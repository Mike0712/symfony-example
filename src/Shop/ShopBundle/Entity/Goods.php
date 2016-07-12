<?php

namespace Shop\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Goods
{
    protected $id;

    protected $title;

    protected $description;

    protected $price;

    protected $photo;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->price = new \Doctrine\Common\Collections\ArrayCollection();
        $this->photo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Goods
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Goods
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
     * Add price
     *
     * @param \Shop\ShopBundle\Entity\Prices $price
     * @return Goods
     */
    public function addPrice(\Shop\ShopBundle\Entity\Prices $price)
    {
        $this->price[] = $price;

        return $this;
    }

    /**
     * Remove price
     *
     * @param \Shop\ShopBundle\Entity\Prices $price
     */
    public function removePrice(\Shop\ShopBundle\Entity\Prices $price)
    {
        $this->price->removeElement($price);
    }

    /**
     * Get price
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Add photo
     *
     * @param \Shop\ShopBundle\Entity\Photos $photo
     * @return Goods
     */
    public function addPhoto(\Shop\ShopBundle\Entity\Photos $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Shop\ShopBundle\Entity\Photos $photo
     */
    public function removePhoto(\Shop\ShopBundle\Entity\Photos $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
