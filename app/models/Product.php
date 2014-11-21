<?php

class Product extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $product_id;

    /**
     *
     * @var integer
     */
    protected $shop_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $short_description;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $active;

    /**
     *
     * @var string
     */
    protected $is_ban;

    /**
     *
     * @var integer
     */
    protected $max_tag_count;

    /**
     *
     * @var double
     */
    protected $rating;

    /**
     *
     * @var double
     */
    protected $price;

    /**
     *
     * @var double
     */
    protected $sale_price;

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
     * Method to set the value of field product_id
     *
     * @param integer $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

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
     * Method to set the value of field rating
     *
     * @param double $rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Method to set the value of field price
     *
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Method to set the value of field sale_price
     *
     * @param double $sale_price
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->sale_price = $sale_price;

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
     * Returns the value of field product_id
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Returns the value of field is_ban
     *
     * @return string
     */
    public function getIsBan()
    {
        return $this->is_ban;
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
     * Returns the value of field rating
     *
     * @return double
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Returns the value of field price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Returns the value of field sale_price
     *
     * @return double
     */
    public function getSalePrice()
    {
        return $this->sale_price;
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
        $this->setSource('Product');
        $this->belongsTo("shop_id", "Shop", "shop_id");
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'product_id' => 'product_id', 
            'shop_id' => 'shop_id', 
            'name' => 'name', 
            'short_description' => 'short_description', 
            'description' => 'description', 
            'active' => 'active', 
            'is_ban' => 'is_ban', 
            'max_tag_count' => 'max_tag_count', 
            'rating' => 'rating', 
            'price' => 'price', 
            'sale_price' => 'sale_price', 
            'created_time' => 'created_time', 
            'last_update' => 'last_update', 
            'last_rating_update' => 'last_rating_update', 
            'timestamp' => 'timestamp'
        );
    }

}
