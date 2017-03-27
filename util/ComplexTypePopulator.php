<?php

namespace FedEx\Utility;

use FedEx\AbstractComplexType;
use Faker\Factory;

class ComplexTypePopulator
{
    protected $ignoreMethods = [
        '__set',
        '__get',
        'toArray'
    ];

    /**
     * @var \Faker\Generator
     */
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * Recursively populates a ComplexType object with fake data
     *
     * @param AbstractComplexType $object
     */
    public function populate(AbstractComplexType $object)
    {
        /* @var $object \FedEx\RateService\ComplexType\RateRequest */
        $reflectionClass = new \ReflectionClass($object);

        foreach ($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflectionMethod) {
            if (in_array($reflectionMethod->name, $this->ignoreMethods)) {
                continue;
            }

            $fakeValue = $this->getFakeValue($reflectionMethod);

            //recursively populate child classes
            if ($fakeValue instanceof AbstractComplexType) {
                $this->populateDependencies($fakeValue);
            }

            $object->{$reflectionMethod->name}($fakeValue);
        }
    }

    protected function getFakeValue(\ReflectionMethod $reflectionMethod)
    {
        foreach ($reflectionMethod->getParameters() as $reflectionParameter) {
            if ($reflectionParameter->getClass() instanceof \ReflectionClass) {
                $className = $reflectionParameter->getClass()->name;
                return new $className;
            } elseif ($reflectionParameter->isArray()) {
                $arrayType = $this->getArrayType($reflectionParameter);
                if (class_exists($arrayType)) {
                    if ($this->isSimpleType($arrayType)) {
                        return [$this->getRandomConstValueFromSimpleType($arrayType)];
                    } else {
                        $complexType = new $arrayType();
                        $this->populateDependencies($complexType);
                        return [$complexType];
                    }
                }
                return ['test'];
            } else {
                $scalarType = $this->getScalarType($reflectionParameter);

                if (class_exists($scalarType)) {
                    return $this->getRandomConstValueFromSimpleType($scalarType);
                }

                switch ($scalarType) {
                    case 'boolean':
                    case 'bool':
                        return $this->faker->boolean;
                        break;
                    case 'float':
                        return $this->faker->randomFloat(2, 1, 10);
                        break;
                    case 'int':
                        return $this->faker->randomNumber(1);
                        break;
                    case 'string':
                    default:
                        return $this->faker->word;
                        break;
                }
            }
        }
    }

    protected function getArrayType(\ReflectionParameter $reflectionParameter)
    {
        if (!$reflectionParameter->isArray()) {
            return null;
        }
        preg_match('/@param\s+([^\s]+)/', $reflectionParameter->getDeclaringFunction()->getDocComment(), $matches);
        if (isset($matches[1])) {
            if (stristr($matches[1], 'SimpleType')) {
                return str_replace('[]', '', explode('|', $matches[1])[0]);
            } else {
                $namespaceParts = explode('\\', $reflectionParameter->getDeclaringClass()->name);
                array_pop($namespaceParts);
                return join('\\', $namespaceParts) . '\\' . str_replace('[]', '', $matches[1]);
            }
        }
    }

    protected function getScalarType(\ReflectionParameter $reflectionParameter)
    {
        if ($reflectionParameter->isArray() || ($reflectionParameter->getClass() instanceof \ReflectionClass)) {
            return null;
        }

        preg_match('/@param\s+([^\s]+)/', $reflectionParameter->getDeclaringFunction()->getDocComment(), $matches);
        if (!isset($matches[1])) {
            return null;
        }

        $match = $matches[1];

        if (preg_match('/(.*)\|string$/', $match, $matches)) {
            if (isset($matches[1]) && class_exists($matches[1])) {
                return $matches[1];
            }
        }

        return $match;
    }

    /**
     * Returns a random class constant value from a SimpleType object
     *
     * @param string $fullyQualifiedClassName
     * @return string|null
     */
    protected function getRandomConstValueFromSimpleType($fullyQualifiedClassName)
    {
        if (!class_exists($fullyQualifiedClassName)) {
            return null;
        }

        $simpleType = new $fullyQualifiedClassName('temp value');
        $reflectionClass = new \ReflectionClass($simpleType);
        $constantValues = $reflectionClass->getConstants();
        return $constantValues[array_rand($constantValues)];
    }

    /**
     * Is fully qualified class name a Simpletype?
     *
     * @param string $fullyQualifiedClassName
     * @return bool
     */
    protected function isSimpleType($fullyQualifiedClassName)
    {
        if (preg_match('/SimpleType/', $fullyQualifiedClassName)) {
            return true;
        }
        return false;
    }
}