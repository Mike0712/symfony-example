<?php

namespace Shop\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="goods")
 */

class Goods
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\column(type="string", length=100)
     */
    protected $title;
    /**
     * @ORM\column(type="text")
     */
    protected $description;
    /**
     * @ORM\OneToMany(
     *     targetEntity="Prices",
     *     mappedBy="goods"
     * )
     */
    protected $price;
    /**
     * @ORM\OneToMany(
     *     targetEntity="Photos",
     *     mappedBy="goods"
     * )
     */
    protected $photo;
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
     * Constructor
     */
    public function __construct()
    {
        $this->price = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set price
     *
     * @param \Shop\ShopBundle\Entity\Prices $price
     * @return Goods
     */
    public function setPrice(\Shop\ShopBundle\Entity\Prices $price = null)
    {
        $this->price = $price;

        return $this;
    }
}
