<?php
namespace App\Model;

/**
 * @Entity
 * @Table(name="trade_history")
 **/
class TradeHistory
{
    /**
     * @Id
     * @Column(type="integer")
     */
    private $id;
    
    /**
     * @Column(type="integer")
     * @var unknown
     */
    private $user_id;
    
    /**
     * @Column(type="decimal", precision=10, scale=2)
     * @var unknown
     */
    private $account;
    
    /**
     * @Column(type="string")
     * @var unknown
     */
    private $type;
    
    /**
     * @Column(type="integer")
     * @var unknown
     */
    private $time;
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @param \App\Model\unknown $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return the $account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \App\Model\unknown $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return the $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \App\Model\unknown $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return the $time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param \App\Model\unknown $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    
}

?>