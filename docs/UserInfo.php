<?php
namespace App\Model;

/**
 * @Entity
 * @Table(name="user_info")
 **/
class UserInfo
{
    /**
     * @Id
     * @Column(type="integer")
     **/
    private $user_id;
    
    /**
     * @Column(type="string")
     */
    private $realname;
    
    /**
     * @Column(type="string")
     */
    private $nation;
    
    /**
     * @Column(type="string")
     */
    private $hometown;
    
    /**
     * @Column(type="string")
     */
    private $id_number;
    
    /**
     * @Column(type="integer")
     */
    private $birthday;
    
    /**
     * @Column(type="string")
     */
    private $avatar;
    
    /**
     * @Column(type="string")
     **/
    private $address;
    
    /**
     * @Column(type="string")
     */
    private $inviter;
    
    /**
     * @Column(type="string")
     */
    private $education;
    
    /**
     * @Column(type="string")
     */
    private $religion;
    
    /**
     * @Column(type="string")
     */
    private $bloodtype;
    
    /**
     * @Column(type="integer")
     */
    private $tall;
    
    /**
     * @Column(type="integer")
     */
    private $weight;
    
    /**
     * @Column(type="integer")
     */
    private $phone;
    
    /**
     * @Column(type="smallint")
     */
    private $is_have_baby;
    
    /**
     * @Column(type="smallint")
     */
    private $is_married;
    
    /**
     * @Column(type="string")
     */
    private $work;
    
    /**
     * @Column(type="string")
     */
    private $income;
    
    /**
     * @Column(type="smallint")
     */
    private $is_accept_ad_money;
    
    /**
     * @Column(type="string")
     */
    private $habits;
    
    /**
     * @Column(type="smallint")
     */
    private $online_shop_type;
    
    /**
     * @Column(type="string")
     */
    private $food_habits;
    
    /**
     * @Column(type="string")
     */
    private $car_info;
    
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
     * @return the $realname
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * @return the $nation
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * @return the $hometown
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * @return the $id_number
     */
    public function getId_number()
    {
        return $this->id_number;
    }

    /**
     * @return the $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return the $avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return the $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return the $initer
     */
    public function getIniter()
    {
        return $this->initer;
    }

    /**
     * @return the $education
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @return the $religion
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @return the $bloodtype
     */
    public function getBloodtype()
    {
        return $this->bloodtype;
    }

    /**
     * @return the $tall
     */
    public function getTall()
    {
        return $this->tall;
    }

    /**
     * @return the $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return the $is_have_baby
     */
    public function getIs_have_baby()
    {
        return $this->is_have_baby;
    }

    /**
     * @return the $is_married
     */
    public function getIs_married()
    {
        return $this->is_married;
    }

    /**
     * @return the $work
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * @return the $income
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * @return the $is_accept_ad_money
     */
    public function getIs_accept_ad_money()
    {
        return $this->is_accept_ad_money;
    }

    /**
     * @return the $habits
     */
    public function getHabits()
    {
        return $this->habits;
    }

    /**
     * @return the $online_shop_type
     */
    public function getOnline_shop_type()
    {
        return $this->online_shop_type;
    }

    /**
     * @return the $food_habits
     */
    public function getFood_habits()
    {
        return $this->food_habits;
    }

    /**
     * @return the $car_info
     */
    public function getCar_info()
    {
        return $this->car_info;
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
     * @param field_type $realname
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;
    }

    /**
     * @param field_type $nation
     */
    public function setNation($nation)
    {
        $this->nation = $nation;
    }

    /**
     * @param field_type $hometown
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;
    }

    /**
     * @param field_type $id_number
     */
    public function setId_number($id_number)
    {
        $this->id_number = $id_number;
    }

    /**
     * @param field_type $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param field_type $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @param field_type $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param field_type $initer
     */
    public function setIniter($initer)
    {
        $this->initer = $initer;
    }

    /**
     * @param field_type $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @param field_type $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
    }

    /**
     * @param field_type $bloodtype
     */
    public function setBloodtype($bloodtype)
    {
        $this->bloodtype = $bloodtype;
    }

    /**
     * @param field_type $tall
     */
    public function setTall($tall)
    {
        $this->tall = $tall;
    }

    /**
     * @param field_type $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param field_type $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param field_type $is_have_baby
     */
    public function setIs_have_baby($is_have_baby)
    {
        $this->is_have_baby = $is_have_baby;
    }

    /**
     * @param field_type $is_married
     */
    public function setIs_married($is_married)
    {
        $this->is_married = $is_married;
    }

    /**
     * @param field_type $work
     */
    public function setWork($work)
    {
        $this->work = $work;
    }

    /**
     * @param field_type $income
     */
    public function setIncome($income)
    {
        $this->income = $income;
    }

    /**
     * @param field_type $is_accept_ad_money
     */
    public function setIs_accept_ad_money($is_accept_ad_money)
    {
        $this->is_accept_ad_money = $is_accept_ad_money;
    }

    /**
     * @param field_type $habits
     */
    public function setHabits($habits)
    {
        $this->habits = $habits;
    }

    /**
     * @param field_type $online_shop_type
     */
    public function setOnline_shop_type($online_shop_type)
    {
        $this->online_shop_type = $online_shop_type;
    }

    /**
     * @param field_type $food_habits
     */
    public function setFood_habits($food_habits)
    {
        $this->food_habits = $food_habits;
    }

    /**
     * @param field_type $car_info
     */
    public function setCar_info($car_info)
    {
        $this->car_info = $car_info;
    }

    
    
}

?>