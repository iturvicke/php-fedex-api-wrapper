<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Two part authentication string used for the sender's identity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class WebAuthenticationCredential
    extends AbstractComplexType
{
    protected $_name = 'WebAuthenticationCredential';

    /**
     * Publicly known part of authentication key used for authentication. This value is provided by FedEx after registration.
     *
     * @param string $Key
     * return WebAuthenticationCredential
     */
    public function setKey($key)
    {
        $this->Key = $key;
        return $this;
    }
    
    /**
     * Secret part of authentication key used for authentication. This value is provided by FedEx after registration.
     *
     * @param string $Password
     * return WebAuthenticationCredential
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    

    
}