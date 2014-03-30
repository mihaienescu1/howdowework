<?php

namespace Work\MainSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberData
 *
 * @ORM\Table(name="member_data")
 * @ORM\Entity(repositoryClass="Work\MainSiteBundle\Entity\MemberDataRepository")
 */
class MemberData
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
     *
     * @ORM\OneToOne(targetEntity="Work\MainSiteBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\Column(type="string", length=100, name="first_name", nullable=false)
     */
    private $firstName;
    
    /**
     * @ORM\Column(type="string", length=100, name="last_name", nullable=false)
     */
    private $lastName;
    
    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $dob;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $street;
    
    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $city;
    
    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $state;
    
    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $country;
    
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $zip;
    
    /**
     * @ORM\Column(type="string", length=700, nullable=true)
     */
    private $picture;

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
     * Set user
     *
     * @param \Work\MainSiteBundle\Entity\User $user
     * @return MemberData
     */
    public function setUser(\Work\MainSiteBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Work\MainSiteBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return MemberData
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return MemberData
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return MemberData
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return MemberData
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return MemberData
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
     * Set state
     *
     * @param string $state
     * @return MemberData
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return MemberData
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
     * Set zip
     *
     * @param string $zip
     * @return MemberData
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return MemberData
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
