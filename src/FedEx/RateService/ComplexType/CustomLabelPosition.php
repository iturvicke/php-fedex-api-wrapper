<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelPosition
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelPosition';

    /**
     * Horizontal position, relative to left edge of custom area.
     *
     * @param nonNegativeInteger $X
     * return CustomLabelPosition
     */
    public function setX($x)
    {
        $this->X = $x;
        return $this;
    }
    
    /**
     * Vertical position, relative to top edge of custom area.
     *
     * @param nonNegativeInteger $Y
     * return CustomLabelPosition
     */
    public function setY($y)
    {
        $this->Y = $y;
        return $this;
    }
    

    
}