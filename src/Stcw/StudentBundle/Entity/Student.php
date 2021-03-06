<?php
namespace Stcw\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Stcw\StudentBundle\Repository\StudentRepository")
 * @ORM\Table(name="student")
 */

class Student
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="100")
     * @Assert\NotBlank()
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", length="100")
     * @Assert\NotBlank()
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", length="15", unique="true")
     * @Assert\NotBlank()
     */
    protected $milid;

    /**
     * @ORM\OneToOne(targetEntity="Profile", inversedBy="student", cascade={"persist"})
     */
    protected $profile;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     */
    protected $category;
    
    /**
     * @ORM\ManyToOne(targetEntity="Promotion")
     */
    protected $promotion;

    

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
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
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
     * Set milid
     *
     * @param string $milid
     */
    public function setMilid($milid)
    {
        $this->milid = $milid;
    }

    /**
     * Get milid
     *
     * @return string 
     */
    public function getMilid()
    {
        return $this->milid;
    }

    /**
     * Set profile
     *
     * @param Stcw\StudentBundle\Entity\Profile $profile
     */
    public function setProfile(\Stcw\StudentBundle\Entity\Profile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Get profile
     *
     * @return Stcw\StudentBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set category
     *
     * @param Stcw\StudentBundle\Entity\Category $category
     */
    public function setCategory(\Stcw\StudentBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Stcw\StudentBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }



    /**
     * Set promotion
     *
     * @param Stcw\StudentBundle\Entity\Promotion $promotion
     */
    public function setPromotion(\Stcw\StudentBundle\Entity\Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    /**
     * Get promotion
     *
     * @return Stcw\StudentBundle\Entity\Promotion 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
}