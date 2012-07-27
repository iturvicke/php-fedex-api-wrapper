<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightPickupDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightPickupDetail';

    /**
     * Contact Information of origin service center representative that authorized the pickup
     *
     * @param Contact $ApprovedBy
     * return FreightPickupDetail
     */
    public function setApprovedBy(Contact $approvedBy)
    {
        $this->ApprovedBy = $approvedBy;
        return $this;
    }
    
    /**
     * Identifies the type of payment to be tendered for the pickup.
     *
     * @param FreightAccountPaymentType $Payment
     * return FreightPickupDetail
     */
    public function setPayment(\FedEx\Pickup\SimpleType\FreightAccountPaymentType $payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param FreightShipmentRoleType $Role
     * return FreightPickupDetail
     */
    public function setRole(\FedEx\Pickup\SimpleType\FreightShipmentRoleType $role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Contact Information of the person submitting the pickup.
     *
     * @param Contact $SubmittedBy
     * return FreightPickupDetail
     */
    public function setSubmittedBy(Contact $submittedBy)
    {
        $this->SubmittedBy = $submittedBy;
        return $this;
    }
    
    /**
     * Identifies the details about the contents of the shipments to be picked up.
     *
     * @param array[FreightPickupLineItem] $LineItems
     * return FreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}