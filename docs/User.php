<?php
namespace App\Model;

/**
 * @Entity 
 * @Table(name="user")
 **/
class User
{
    /** @Id 
     * @Column(type="integer") 
     * @GeneratedValue(strategy="AUTO");
     **/
    private $id;
    
    /** @Column(type="string") **/
    private $username;
    
    /** @Column(type="integer") **/
    private $birthday;
    
    /** @Column(type="string") **/
    private $id_number;
    
    /** @Column(type="integer") **/
    private $phone;
    
    /** @Column(type="string") **/
    private $sex;
    
    /** @Column(type="string") **/
    private $nation;
    
    /** @Column(type="string") **/
    private $home_town;
    
    /** @Column(type="integer") **/
    private $inviter;
    
    /** @Column(type="string") **/
    private $system_id;
    
    /** @Column(type="string") **/
    private $password_hash;
    
    /** @Column(type="string") **/
    private $payment_password;
    
    /** @Column(type="string") **/
    private $token;
    
    /** @Column(type="string") **/
    private $status;
    
    /** @Column(type="integer") **/
    private $created_at;
    
    /** @Column(type="integer") **/
    private $updated_at;
      
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
    public function getUpdated_at()
    {
        return $this->updated_at;
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
    public function setUpdated_at($update_at)
    {
        $this->updated_at = $update_at;
    }
    /**
     * @return the $token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param field_type $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
    /**
     * @return the $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param field_type $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return the $id_number
     */
    public function getId_number()
    {
        return $this->id_number;
    }

    /**
     * @param field_type $id_number
     */
    public function setId_number($id_number)
    {
        $this->id_number = $id_number;
    }

    /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param field_type $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return the $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param field_type $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return the $nation
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * @param field_type $nation
     */
    public function setNation($nation)
    {
        $this->nation = $nation;
    }

    /**
     * @return the $home_town
     */
    public function getHome_town()
    {
        return $this->home_town;
    }

    /**
     * @param field_type $home_town
     */
    public function setHome_town($home_town)
    {
        $this->home_town = $home_town;
    }

    /**
     * @return the $inviter
     */
    public function getInviter()
    {
        return $this->inviter;
    }

    /**
     * @param field_type $inviter
     */
    public function setInviter($inviter)
    {
        $this->inviter = $inviter;
    }

    public function toArray(){
        $user = array();
        $user['id']             = $this->id;
        $user['username']       = $this->username;
        $user['password_hash']  = $this->password_hash;
        $user['id_number']      = $this->id_number;
        $user['phone']          = $this->phone;
        $user['sex']            = $this->sex;
        $user['home_town']      = $this->home_town;
        $user['nation']         = $this->nation;
        $user['birthday']       = $this->birthday;
        $user['inviter']        = $this->inviter;
        $user['created_at']     = $this->created_at;
        $user['updated_at']     = $this->updated_at;
        $user['payment_password'] = $this->payment_password;
        $user['status']         = $this->status;
        $user['token']          = $this->token;
        return $user;
    }
    
}

?>