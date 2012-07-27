<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaCertificateOfOriginDetail
    extends AbstractComplexType
{
    protected $_name = 'NaftaCertificateOfOriginDetail';

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return NaftaCertificateOfOriginDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * 
     *
     * @param DateRange $BlanketPeriod
     * return NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(DateRange $blanketPeriod)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    
    /**
     * Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     *
     * @param NaftaImporterSpecificationType $ImporterSpecification
     * return NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification(\FedEx\RateService\SimpleType\NaftaImporterSpecificationType $importerSpecification)
    {
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    
    /**
     * Contact information for "Authorized Signature" area of form.
     *
     * @param Contact $SignatureContact
     * return NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(Contact $signatureContact)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    
    /**
     * 
     *
     * @param NaftaProducerSpecificationType $ProducerSpecification
     * return NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification(\FedEx\RateService\SimpleType\NaftaProducerSpecificationType $producerSpecification)
    {
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[NaftaProducer] $Producers
     * return NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers)
    {
        $this->Producers = $producers;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}