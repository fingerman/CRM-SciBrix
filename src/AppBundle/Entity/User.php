<?php
/**
 * Created by PhpStorm.
 * User: computer
 * Date: 18/09/2017
 * Time: 05:47 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string")
     */
    private $familyName;

    /**
     * @ORM\Column(type="string")
     */
    private $phoneBusiness;
    /**
     * @ORM\Column(type="string")
     */
    private $phonePrivate;

    /**
     * @ORM\Column(type="string")
     */
    private $address;
    /**
     * @ORM\Column(type="text")
     */
    private $note;

    /**
     * User constructor.
     * @param $id
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param mixed $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getPhoneBusiness()
    {
        return $this->phoneBusiness;
    }

    /**
     * @param mixed $phoneBusiness
     */
    public function setPhoneBusiness($phoneBusiness)
    {
        $this->phoneBusiness = $phoneBusiness;
    }

    /**
     * @return mixed
     */
    public function getPhonePrivate()
    {
        return $this->phonePrivate;
    }

    /**
     * @param mixed $phonePrivate
     */
    public function setPhonePrivate($phonePrivate)
    {
        $this->phonePrivate = $phonePrivate;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }


}



