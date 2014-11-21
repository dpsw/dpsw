<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $surname;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $vk_id;

    /**
     *
     * @var string
     */
    protected $facebook_id;

    /**
     *
     * @var string
     */
    protected $is_ban;

    /**
     *
     * @var string
     */
    protected $is_subscription;

    /**
     *
     * @var double
     */
    protected $money;

    /**
     *
     * @var string
     */
    protected $created_time;

    /**
     *
     * @var string
     */
    protected $last_update;

    /**
     *
     * @var string
     */
    protected $timestamp;

    /**
     *
     * @var string
     */
    protected $role;

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field surname
     *
     * @param string $surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field vk_id
     *
     * @param string $vk_id
     * @return $this
     */
    public function setVkId($vk_id)
    {
        $this->vk_id = $vk_id;

        return $this;
    }

    /**
     * Method to set the value of field facebook_id
     *
     * @param string $facebook_id
     * @return $this
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    /**
     * Method to set the value of field is_ban
     *
     * @param string $is_ban
     * @return $this
     */
    public function setIsBan($is_ban)
    {
        $this->is_ban = $is_ban;

        return $this;
    }

    /**
     * Method to set the value of field is_subscription
     *
     * @param string $is_subscription
     * @return $this
     */
    public function setIsSubscription($is_subscription)
    {
        $this->is_subscription = $is_subscription;

        return $this;
    }

    /**
     * Method to set the value of field money
     *
     * @param double $money
     * @return $this
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Method to set the value of field created_time
     *
     * @param string $created_time
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->created_time = $created_time;

        return $this;
    }

    /**
     * Method to set the value of field last_update
     *
     * @param string $last_update
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;

        return $this;
    }

    /**
     * Method to set the value of field timestamp
     *
     * @param string $timestamp
     * @return $this
     */
    private function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Method to set the value of field role
     *
     * @param string $role
     * @return $this
     */
    public function setRoleId($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field vk_id
     *
     * @return string
     */
    public function getVkId()
    {
        return $this->vk_id;
    }

    /**
     * Returns the value of field facebook_id
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Returns the value of field is_ban
     *
     * @return string
     */
    public function getIsBan()
    {
        return $this->is_ban;
    }

    /**
     * Returns the value of field is_subscription
     *
     * @return string
     */
    public function getIsSubscription()
    {
        return $this->is_subscription;
    }

    /**
     * Returns the value of field money
     *
     * @return double
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Returns the value of field created_time
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * Returns the value of field last_update
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Returns the value of field timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Returns the value of field role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('User');
        $this->hasMany('user_id', 'Shop', 'seller_id');
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'user_id' => 'user_id', 
            'name' => 'name', 
            'surname' => 'surname', 
            'email' => 'email', 
            'vk_id' => 'vk_id', 
            'facebook_id' => 'facebook_id', 
            'is_ban' => 'is_ban', 
            'is_subscription' => 'is_subscription', 
            'money' => 'money', 
            'created_time' => 'created_time', 
            'last_update' => 'last_update', 
            'timestamp' => 'timestamp', 
            'role' => 'role'
        );
    }

    public function getShops($parameters=null)
    {
        return $this->getRelated('Shop', $parameters);
    }



    public function beforeCreate()
    {
        //Set the creation date
        $this->created_time = date('Y-m-d H:i:s');
    }

    public function beforeUpdate()
    {
        //Set the modification date
        $this->last_update = date('Y-m-d H:i:s');
    }

}
