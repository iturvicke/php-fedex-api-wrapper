<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightSpecialServicePayment
    extends AbstractComplexType
{
    protected $_name = 'FreightSpecialServicePayment';

    /**
     * Identifies the special service.
     *
     * @param ShipmentSpecialServiceType $SpecialService
     * return FreightSpecialServicePayment
     */
    public function setSpecialService(\FedEx\ShipService\SimpleType\ShipmentSpecialServiceType $specialService)
    {
        $this->SpecialService = $specialService;
        return $this;
    }
    
    /**
     * Indicates who will pay for the special service.
     *
     * @param FreightAccountPaymentType $PaymentType
     * return FreightSpecialServicePayment
     */
    public function setPaymentType(\FedEx\ShipService\SimpleType\FreightAccountPaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    

    
}