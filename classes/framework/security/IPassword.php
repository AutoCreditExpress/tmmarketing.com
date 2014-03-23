<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * The contract between concrete password implementations and
 * the rest of the system.
 *
 * @package framework
 * @subpackage security
 */
interface IPassword {
    /**
     * Retrieve the password as a string
     * @return string
     */
    public function toString();
    /**
     * Encrypt the password
     * @return string the encrypted password
     */
    public function encrypt();
    /**
     * Decrypt the password
     * @return string the decrypted password
     */
    public function decrypt();
    /**
     * Determines if the password is currently encrypted.
     * @return boolean
     */
    public function isEncrypted();


    public function equals(IPassword $that);
}
?>