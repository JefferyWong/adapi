<?php
namespace App\Model;

/**
 * @Entity
 * @Table(name="bank_card")
 **/
class BankCard
{
    /** 
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO");
     **/
    private $id;
    
    /**
     * @Column(type="integer")
     **/
    private $user_id;
    
    /**
     * @Column(type="string")
     **/
    private $card_number;
    
    /**
     * @Column(type="string")
     **/
    private $card_bank;
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @return the $card_number
     */
    public function getCard_number()
    {
        return $this->card_number;
    }

    /**
     * @return the $card_bank
     */
    public function getCard_bank()
    {
        return $this->card_bank;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param field_type $card_number
     */
    public function setCard_number($card_number)
    {
        $this->card_number = $card_number;
    }

    /**
     * @param field_type $card_bank
     */
    public function setCard_bank($card_bank)
    {
        $this->card_bank = $card_bank;
    }

    
    
}

?>