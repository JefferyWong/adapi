<?php
namespace App\Model\User;

/**
 * @Entity 
 * @Table(name="user")
 **/
class User
{
    /** @Id @Column(type="integer") **/
    private $id;
    
    /** @Column(type="string") **/
    private $username;
    
    /** @Column(type="string") **/
    private $system_id;
    
    /** @Column(type="string") **/
    private $password_hash;
    
    /** @Column(type="string") **/
    private $payment_password;
    
    /** @Column(type="string") **/
    private $email;
    
    /** @Column(type="string") **/
    private $status;
    
    /** @Column(type="integer") **/
    private $created_at;
    
    /** @Column(type="integer") **/
    private $update_at;
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return the $system_id
     */
    public function getSystem_id()
    {
        return $this->system_id;
    }

    /**
     * @return the $password_hash
     */
    public function getPassword_hash()
    {
        return $this->password_hash;
    }

    /**
     * @return the $payment_password
     */
    public function getPayment_password()
    {
        return $this->payment_password;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @return the $update_at
     */
    public function getUpdate_at()
    {
        return $this->update_at;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param field_type $system_id
     */
    public function setSystem_id($system_id)
    {
        $this->system_id = $system_id;
    }

    /**
     * @param field_type $password_hash
     */
    public function setPassword_hash($password_hash)
    {
        $this->password_hash = $password_hash;
    }

    /**
     * @param field_type $payment_password
     */
    public function setPayment_password($payment_password)
    {
        $this->payment_password = $payment_password;
    }

    /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param field_type $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param field_type $created_at
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @param field_type $update_at
     */
    public function setUpdate_at($update_at)
    {
        $this->update_at = $update_at;
    }

    
    
}

?>