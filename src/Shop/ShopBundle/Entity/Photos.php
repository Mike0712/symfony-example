<?php

namespace Shop\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Photos
{
    protected $id;

    protected $goods;

    protected $basename;

    /**
     * Set basename
     *
     * @param string $basename
     * @return Photos
     */
    public function setBasename($basename)
    {
        $this->basename = $basename;

        return $this;
    }

    /**
     * Get basename
     *
     * @return string 
     */
    public function getBasename()
    {
        return $this->basename;
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
     * @return Photos
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
