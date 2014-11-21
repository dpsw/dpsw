<?php

class Shop extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $shop_id;

    /**
     *
     * @var integer
     */
    protected $seller_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $short_description;

    /**
     *
     * @var string
     */
    protected $addresses;

    /**
     *
     * @var string
     */
    protected $contacts;

    /**
     *
     * @var string
     */
    protected $with_delivery;

    /**
     *
     * @var string
     */
    protected $is_ban;

    /**
     *
     * @var string
     */
    protected $is_deleted;

    /**
     *
     * @var string
     */
    protected $active;

    /**
     *
     * @var integer
     */
    protected $max_tag_count;

    /**
     *
     * @var double
     */
    protected $rating_shop;

    /**
     *
     * @var double
     */
    protected $rating_product;

    /**
     *
     * @var string
     */
    protected $yandex_map_coordinates;

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
    protected $last_rating_update;

    /**
     *
     * @var string
     */
    protected $timestamp;

    /**
     * Method to set the value of field shop_id
     *
     * @param integer $shop_id
     * @return $this
     */
    public function setShopId($shop_id)
    {
        $this->shop_id = $shop_id;

        return $this;
    }

    /**
     * Method to set the value of field seller_id
     *
     * @param integer $seller_id
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->seller_id = $seller_id;

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
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field short_description
     *
     * @param string $short_description
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;

        return $this;
    }

    /**
     * Method to set the value of field addresses
     *
     * @param string $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * Method to set the value of field contacts
     *
     * @param string $contacts
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Method to set the value of field with_delivery
     *
     * @param string $with_delivery
     * @return $this
     */
    public function setWithDelivery($with_delivery)
    {
        $this->with_delivery = $with_delivery;

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
     * Method to set the value of field is_deleted
     *
     * @param string $is_deleted
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->is_deleted = $is_deleted;

        return $this;
    }

    /**
     * Method to set the value of field active
     *
     * @param string $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Method to set the value of field max_tag_count
     *
     * @param integer $max_tag_count
     * @return $this
     */
    public function setMaxTagCount($max_tag_count)
    {
        $this->max_tag_count = $max_tag_count;

        return $this;
    }

    /**
     * Method to set the value of field rating_shop
     *
     * @param double $rating_shop
     * @return $this
     */
    public function setRatingShop($rating_shop)
    {
        $this->rating_shop = $rating_shop;

        return $this;
    }

    /**
     * Method to set the value of field rating_product
     *
     * @param double $rating_product
     * @return $this
     */
    public function setRatingProduct($rating_product)
    {
        $this->rating_product = $rating_product;

        return $this;
    }

    /**
     * Method to set the value of field yandex_map_coordinates
     *
     * @param string $yandex_map_coordinates
     * @return $this
     */
    public function setYandexMapCoordinates($yandex_map_coordinates)
    {
        $this->yandex_map_coordinates = $yandex_map_coordinates;

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
     * Method to set the value of field last_rating_update
     *
     * @param string $last_rating_update
     * @return $this
     */
    public function setLastRatingUpdate($last_rating_update)
    {
        $this->last_rating_update = $last_rating_update;

        return $this;
    }

    /**
     * Method to set the value of field timestamp
     *
     * @param string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Returns the value of field shop_id
     *
     * @return integer
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * Returns the value of field seller_id
     *
     * @return integer
     */
    public function getSellerId()
    {
        return $this->seller_id;
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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * Returns the value of field addresses
     *
     * @return string
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Returns the value of field contacts
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Returns the value of field with_delivery
     *
     * @return string
     */
    public function getWithDelivery()
    {
        return $this->with_delivery;
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
     * Returns the value of field is_deleted
     *
     * @return string
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    /**
     * Returns the value of field active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Returns the value of field max_tag_count
     *
     * @return integer
     */
    public function getMaxTagCount()
    {
        return $this->max_tag_count;
    }

    /**
     * Returns the value of field rating_shop
     *
     * @return double
     */
    public function getRatingShop()
    {
        return $this->rating_shop;
    }

    /**
     * Returns the value of field rating_product
     *
     * @return double
     */
    public function getRatingProduct()
    {
        return $this->rating_product;
    }

    /**
     * Returns the value of field yandex_map_coordinates
     *
     * @return string
     */
    public function getYandexMapCoordinates()
    {
        return $this->yandex_map_coordinates;
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
     * Returns the value of field last_rating_update
     *
     * @return string
     */
    public function getLastRatingUpdate()
    {
        return $this->last_rating_update;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('Shop');
        $this->belongsTo("seller_id", "User", "user_id");
        $this->hasMany("shop_id", "Product", "product_id");
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'shop_id' => 'shop_id', 
            'seller_id' => 'seller_id', 
            'name' => 'name', 
            'description' => 'description', 
            'short_description' => 'short_description', 
            'addresses' => 'addresses', 
            'contacts' => 'contacts', 
            'with_delivery' => 'with_delivery', 
            'is_ban' => 'is_ban', 
            'is_deleted' => 'is_deleted', 
            'active' => 'active', 
            'max_tag_count' => 'max_tag_count', 
            'rating_shop' => 'rating_shop', 
            'rating_product' => 'rating_product', 
            'yandex_map_coordinates' => 'yandex_map_coordinates', 
            'created_time' => 'created_time', 
            'last_update' => 'last_update', 
            'last_rating_update' => 'last_rating_update', 
            'timestamp' => 'timestamp'
        );
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
