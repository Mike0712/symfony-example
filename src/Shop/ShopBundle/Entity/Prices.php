<?php

namespace Shop\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="prices", uniqueConstraints={@ORM\UniqueConstraint(name="price_type_id_goods_id",columns={"price_type_id", "goods_id"})})
 */
class Prices
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $price_type_id;
    /**
     * @ORM\ManyToOne(
     *  targetEntity="Goods",
     *  inversedBy="price"
     * )
     */
    protected $goods;
    /**
     * @ORM\Column(type="integer")
     */
    protected $price;
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
     * Set goods_id
     *
     * @param integer $goodsId
     * @return Prices
     */
    public function setGoodsId($goodsId)
    {
        $this->goods_id = $goodsId;

        return $this;
    }

    /**
     * Get goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
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
     * Set goods
     *
     * @param integer $goods
     * @return Prices
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get goods
     *
     * @return integer
     */
    public function getGoods()
    {
        return $this->goods;
    }
}
