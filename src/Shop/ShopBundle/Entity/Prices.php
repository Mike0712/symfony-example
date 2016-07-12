<?php

namespace Shop\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Prices
{
    protected $id;

    protected $price_type_id;

    protected $goods;

    protected $price;

    /**
     * Set price_type_id
     *
     * @param integer $priceTypeId
     * @return Prices
     */
    public function setPriceTypeId($priceTypeId)
    {
        $this->price_type_id = $priceTypeId;

        return $this;
    }

    /**
     * Get price_type_id
     *
     * @return integer 
     */
    public function getPriceTypeId()
    {
        return $this->price_type_id;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Prices
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set goods
     *
     * @param \Shop\ShopBundle\Entity\Goods $goods
     * @return Prices
     */
    public function setGoods(\Shop\ShopBundle\Entity\Goods $goods = null)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get goods
     *
     * @return \Shop\ShopBundle\Entity\Goods 
     */
    public function getGoods()
    {
        return $this->goods;
    }
}
