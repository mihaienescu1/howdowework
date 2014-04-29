<?php

namespace Work\MainSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Work\MainSiteBundle\Entity\PostRepository")
 */
class Post
{

	const DEFAULT_POST_STATUS = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	 /**
     * @ORM\Column(type="string", length=1000, name="source", nullable=true)
     */
	protected $source;
	
	 /**
     * @ORM\Column(type="string", length=1000, name="source_link", nullable=true)
     */
	protected $sourceLink;
	
	/**
     * @ORM\Column(type="text", nullable=true)
     */
	protected $summary;
	
	/**
     * @ORM\Column(type="text", nullable=true)
     */
	protected $description;
	
	/**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
	protected $title;
	
	/**
     * @ORM\Column(type="string", length=2000, nullable=false)
     */
	protected $link;
	
	/**
     * @ORM\Column(type="string", length=2000, nullable=false)
     */
	protected $path;
	
	/**
     * @ORM\Column(type="string", length=100,  name="short_link", nullable=true)
     */
	protected $shortLink;
	
	/**
     * @ORM\Column(type="string", length=100,  name="short_link_hash", nullable=true)
     */
	protected $shortLinkHash;
	
	/**
     * @ORM\Column(type="string", length=40, name="unique_id", nullable=false)
     */
	protected $uniqueId;
	
	/**
     * @ORM\Column(type="integer", nullable=true)
     */
	protected $status;
	
	/**
     * @ORM\Column(type="datetime", name="rss_date_time", nullable=true)
     */
	protected $rssDateTime;
	
	/**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
	protected $enclosure;
	

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
     * Set source
     *
     * @param string $source
     * @return Post
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourceLink
     *
     * @param string $sourceLink
     * @return Post
     */
    public function setSourceLink($sourceLink)
    {
        $this->sourceLink = $sourceLink;

        return $this;
    }

    /**
     * Get sourceLink
     *
     * @return string 
     */
    public function getSourceLink()
    {
        return $this->sourceLink;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Post
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Post
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
     * Set title
     *
     * @param string $title
     * @return Post
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
     * Set link
     *
     * @param string $link
     * @return Post
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set shortLink
     *
     * @param string $shortLink
     * @return Post
     */
    public function setShortLink($shortLink)
    {
        $this->shortLink = $shortLink;

        return $this;
    }

    /**
     * Get shortLink
     *
     * @return string 
     */
    public function getShortLink()
    {
        return $this->shortLink;
    }

    /**
     * Set uniqueId
     *
     * @param string $uniqueId
     * @return Post
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * Get uniqueId
     *
     * @return string 
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Post
     */
    public function setStatus($status)
    {
		if (empty($status)) {
			$status = self::DEFAULT_POST_STATUS;
		}	
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set rssDateTime
     *
     * @param \DateTime $rssDateTime
     * @return Post
     */
    public function setRssDateTime($rssDateTime)
    {
        $this->rssDateTime = $rssDateTime;

        return $this;
    }

    /**
     * Get rssDateTime
     *
     * @return \DateTime 
     */
    public function getRssDateTime()
    {
        return $this->rssDateTime;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Post
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set shortLinkHash
     *
     * @param string $shortLinkHash
     * @return Post
     */
    public function setShortLinkHash($shortLinkHash)
    {
        $this->shortLinkHash = $shortLinkHash;

        return $this;
    }

    /**
     * Get shortLinkHash
     *
     * @return string 
     */
    public function getShortLinkHash()
    {
        return $this->shortLinkHash;
    }

    /**
     * Set enclosure
     *
     * @param string $enclosure
     * @return Post
     */
    public function setEnclosure($enclosure)
    {
        $this->enclosure = $enclosure;

        return $this;
    }

    /**
     * Get enclosure
     *
     * @return string 
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }
}
