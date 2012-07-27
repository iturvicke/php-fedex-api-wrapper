<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to e-mail shipping documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentEMailDetail
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentEMailDetail';

    /**
     * Provides the roles and email addresses for e-mail recipients.
     *
     * @param array[ShippingDocumentEMailRecipient] $EMailRecipients
     * return ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients)
    {
        $this->EMailRecipients = $eMailRecipients;
        return $this;
    }
    
    /**
     * Identifies the convention by which documents are to be grouped as e-mail attachments.
     *
     * @param ShippingDocumentEMailGroupingType $Grouping
     * return ShippingDocumentEMailDetail
     */
    public function setGrouping(\FedEx\ShipService\SimpleType\ShippingDocumentEMailGroupingType $grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    

    
}