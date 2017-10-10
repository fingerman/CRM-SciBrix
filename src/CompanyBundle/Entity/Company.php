<?php

namespace CompanyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\Column(name="companyName", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="companyAddress", type="string", length=255)
     */
    private $companyAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="companyPhone", type="string", length=255)
     */
    private $companyPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="companyEmail", type="string", length=255)
     */
    private $companyEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="interestedIn", type="string", length=255)
     */
    private $interestedIn;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
 * @var ArrayCollection
 * @ORM\OneToMany(targetEntity="Supplier", mappedBy="company")
 *
 *
 */
    private $suppliers;

    /**
     * Company constructor.
     */

    function __construct()
    {
        $this->suppliers = new ArrayCollection();
    }


    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="company")
     *
     *
     */
    private $customers;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }



    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyAddress
     *
     * @param string $companyAddress
     *
     * @return Company
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    /**
     * Get companyAddress
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Set companyPhone
     *
     * @param string $companyPhone
     *
     * @return Company
     */
    public function setCompanyPhone($companyPhone)
    {
        $this->companyPhone = $companyPhone;

        return $this;
    }

    /**
     * Get companyPhone
     *
     * @return string
     */
    public function getCompanyPhone()
    {
        return $this->companyPhone;
    }

    /**
     * Set companyEmail
     *
     * @param string $companyEmail
     *
     * @return Company
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * Get companyEmail
     *
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }

    /**
     * Set interestedIn
     *
     * @param string $interestedIn
     *
     * @return Company
     */
    public function setInterestedIn($interestedIn)
    {
        $this->interestedIn = $interestedIn;

        return $this;
    }

    /**
     * Get interestedIn
     *
     * @return string
     */
    public function getInterestedIn()
    {
        return $this->interestedIn;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Company
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
     * @return ArrayCollection
     */
    public function getSuppliers(): ArrayCollection
    {
        return $this->suppliers;
    }

    /**
     * @param ArrayCollection $suppliers
     */
    public function setSuppliers(ArrayCollection $suppliers)
    {
        $this->suppliers = $suppliers;
    }

    /**
     * @return ArrayCollection
     */
    public function getCustomers(): ArrayCollection
    {
        return $this->customers;
    }

    /**
     * @param ArrayCollection $customers
     */
    public function setCustomers(ArrayCollection $customers)
    {
        $this->customers = $customers;
    }

}

