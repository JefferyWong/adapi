<?php
namespace App\Model;

/**
 * @Entity
 * @Table(name="user_account")
 **/
class UserAccount
{
    /**
     * @Id
     * @Column(type="integer")
     */
    private $user_id;
    
    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    private $available_balance;
    
    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    private $unavailable_balance;
    
    /**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @param field_type $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return the $available_balance
     */
    public function getAvailable_balance()
    {
        return $this->available_balance;
    }

    /**
     * @param field_type $available_balance
     */
    public function setAvailable_balance($available_balance)
    {
        $this->available_balance = $available_balance;
    }

    /**
     * @return the $unavailable_balance
     */
    public function getUnavailable_balance()
    {
        return $this->unavailable_balance;
    }

    /**
     * @param field_type $unavailable_balance
     */
    public function setUnavailable_balance($unavailable_balance)
    {
        $this->unavailable_balance = $unavailable_balance;
    }

    
    
    
    
}

?>