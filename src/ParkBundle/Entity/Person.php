<?php

namespace ParkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ParkBundle\Entity\PersonRepository")
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastanme", type="string", length=50)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=50)
     */
    private $fonction;

    /**
     * @ORM\OneToOne(targetEntity="ParkBundle\Entity\Computer", cascade={"persist"})
     */
    private $computers; // Notez le « s », une annonce est liée à plusieurs computers;

    /**
     * @var integer
     *
     * @ORM\Column(name="Age", type="integer")
     */
    private $age; // Age de la personne
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastanme
     *
     * @param string $lastanme
     *
     * @return Person
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastanme
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * Set age
     *
     * @return integer
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Person
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->computers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add computer
     *
     * @param \ParkBundle\Entity\Computer $computer
     *
     * @return Person
     */
    public function addComputer(\ParkBundle\Entity\Computer $computer)
    {
        $this->computers[] = $computer;

        return $this;
    }

    /**
     * Remove computer
     *
     * @param \ParkBundle\Entity\Computer $computer
     */
    public function removeComputer(\ParkBundle\Entity\Computer $computer)
    {
        $this->computers->removeElement($computer);
    }

    /**
     * Get computers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComputers()
    {
        return $this->computers;
    }

    public function __tostring()
    {
        return $this->getLastname().' '.$this->getFirstname();
    }
}
