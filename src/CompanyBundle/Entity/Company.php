<?php

namespace CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="CompanyBundle\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameCompany", type="string", length=255)
     */
    private $nameCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=255)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="addressCompany", type="string", length=255)
     */
    private $addressCompany;

    /**
     * @var bool
     *
     * @ORM\Column(name="hasBought", type="boolean", nullable=true)
     */
    private $hasBought;

    /**
     * @var string
     *
     * @ORM\Column(name="productInterest", type="string", length=255)
     */
    private $productInterest;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="contacted", type="boolean", nullable=true)
     */
    private $contacted;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameCompany
     *
     * @param string $nameCompany
     *
     * @return Company
     */
    public function setNameCompany($nameCompany)
    {
        $this->nameCompany = $nameCompany;

        return $this;
    }

    /**
     * Get nameCompany
     *
     * @return string
     */
    public function getNameCompany()
    {
        return $this->nameCompany;
    }

    /**
     * Set segment
     *
     * @param string $segment
     *
     * @return Company
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Company
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set addressCompany
     *
     * @param string $addressCompany
     *
     * @return Company
     */
    public function setAddressCompany($addressCompany)
    {
        $this->addressCompany = $addressCompany;

        return $this;
    }

    /**
     * Get addressCompany
     *
     * @return string
     */
    public function getAddressCompany()
    {
        return $this->addressCompany;
    }

    /**
     * Set hasBought
     *
     * @param boolean $hasBought
     *
     * @return Company
     */
    public function setHasBought($hasBought)
    {
        $this->hasBought = $hasBought;

        return $this;
    }

    /**
     * Get hasBought
     *
     * @return bool
     */
    public function getHasBought()
    {
        return $this->hasBought;
    }

    /**
     * Set productInterest
     *
     * @param string $productInterest
     *
     * @return Company
     */
    public function setProductInterest($productInterest)
    {
        $this->productInterest = $productInterest;

        return $this;
    }

    /**
     * Get productInterest
     *
     * @return string
     */
    public function getProductInterest()
    {
        return $this->productInterest;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Company
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Company
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set contacted
     *
     * @param boolean $contacted
     *
     * @return Company
     */
    public function setContacted($contacted)
    {
        $this->contacted = $contacted;

        return $this;
    }

    /**
     * Get contacted
     *
     * @return bool
     */
    public function getContacted()
    {
        return $this->contacted;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Company
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}

