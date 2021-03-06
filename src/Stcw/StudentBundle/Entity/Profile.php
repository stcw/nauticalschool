<?php

namespace Stcw\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Stcw\StudentBundle\Repository\ProfileRepository")
 * @ORM\Table(name="profile")
 */

class Profile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Student", mappedBy="profile")
     */
    protected $student;

    /**
     * @ORM\Column(type="string", length="10")
     */
    protected $language;

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
     * Set student
     *
     * @param integer $student
     */
    public function setStudent($student)
    {
        $this->student = $student;
    }

    /**
     * Get student
     *
     * @return integer 
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

        public function __toString()
    {
        $langs = array('fr'=>'FR', 'nl'=>'NL', 'en'=>'EN', 'de'=>'DE');
        return $langs[$this->getLanguage()];
    }
}