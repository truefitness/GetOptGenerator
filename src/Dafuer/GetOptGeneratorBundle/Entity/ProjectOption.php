<?php

namespace Dafuer\GetOptGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dafuer\GetOptGeneratorBundle\Entity\ProjectOption
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dafuer\GetOptGeneratorBundle\Entity\ProjectOptionRepository")
 */
class ProjectOption
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $ShortName
     *
     * @ORM\Column(type="string", length=5)
     */
    private $shortName;

    /**
     * @var string $LongName
     *
     * @ORM\Column(type="string", length=255)
     */
    private $longName;

    /**
     * @var string $Description
     *
     * @ORM\Column(type="string", length=511)
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Dafuer\GetOptGeneratorBundle\Entity\Project", inversedBy="projectOptions") 
     */
    private $project;

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
     * Set shortName
     *
     * @param string $shortName
     * @return ProjectOption
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    
        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set longName
     *
     * @param string $longName
     * @return ProjectOption
     */
    public function setLongName($longName)
    {
        $this->longName = $longName;
    
        return $this;
    }

    /**
     * Get longName
     *
     * @return string 
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ProjectOption
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
     * Set project
     *
     * @param Dafuer\GetOptGenerator\Entity\Project $project
     * @return ProjectOption
     */
    public function setProject(\Dafuer\GetOptGenerator\Entity\Project $project = null)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return Dafuer\GetOptGenerator\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * 
     */
    public function __toString(){
        return $this->getLongName();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}