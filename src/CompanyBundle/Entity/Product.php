<?php

namespace CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="CompanyBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="segment", type="string", length=255)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="productionPrice", type="float")
     */
    private $productionPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="sellPrice", type="float")
     */
    private $sellPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="soldTo", type="string", length=255)
     */
    private $soldTo;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

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
     * Set segment
     *
     * @param string $segment
     *
     * @return Product
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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set productionPrice
     *
     * @param float $productionPrice
     *
     * @return Product
     */
    public function setProductionPrice($productionPrice)
    {
        $this->productionPrice = $productionPrice;

        return $this;
    }

    /**
     * Get productionPrice
     *
     * @return float
     */
    public function getProductionPrice()
    {
        return $this->productionPrice;
    }

    /**
     * Set sellPrice
     *
     * @param float $sellPrice
     *
     * @return Product
     */
    public function setSellPrice($sellPrice)
    {
        $this->sellPrice = $sellPrice;

        return $this;
    }

    /**
     * Get sellPrice
     *
     * @return float
     */
    public function getSellPrice()
    {
        return $this->sellPrice;
    }

    /**
     * Set soldTo
     *
     * @param string $soldTo
     *
     * @return Product
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * Get soldTo
     *
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * Set count
     *
     * @param int $counts
     *
     * @return Product
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Product
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

