<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieSortie
 *
 * @ORM\Table(name="bledvoyage__CategorieSortie")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\CategorieSortieRepository")
 */
class CategorieSortie
{
    public function __construct() {
        /*
        $this->velo         = false;
        $this->running      = false;
        $this->kayak        = false;
        $this->randonee     = false;
        $this->roller       = false;
        $this->plongee      = false;
        $this->equitation   = false;
        $this->fitness      = false;
        $this->tennis       = false;
        $this->golf         = false;
        $this->marche       = false;
        $this->visites      = false;
        $this->sportEau     = false;
        $this->arc          = false;
        $this->air          = false;
        $this->sable        = false;
        $this->quad         = false;
        */
        $this->dateTime     = new \Datetime();
    }
    
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
     * @ORM\Column(name="velo", type="boolean")
     */
    private $velo;

    /**
     * @var string
     *
     * @ORM\Column(name="running", type="boolean")
     */
    private $running;

    /**
     * @var string
     *
     * @ORM\Column(name="kayak", type="boolean")
     */
    private $kayak;

    /**
     * @var string
     *
     * @ORM\Column(name="randonee", type="boolean")
     */
    private $randonee;

    /**
     * @var string
     *
     * @ORM\Column(name="roller", type="boolean")
     */
    private $roller;

    /**
     * @var string
     *
     * @ORM\Column(name="plongee", type="boolean")
     */
    private $plongee;

    /**
     * @var string
     *
     * @ORM\Column(name="equitation", type="boolean")
     */
    private $equitation;

    /**
     * @var string
     *
     * @ORM\Column(name="fitness", type="boolean")
     */
    private $fitness;

    /**
     * @var string
     *
     * @ORM\Column(name="tennis", type="boolean")
     */
    private $tennis;

    /**
     * @var string
     *
     * @ORM\Column(name="golf", type="boolean")
     */
    private $golf;

    /**
     * @var string
     *
     * @ORM\Column(name="marche", type="boolean")
     */
    private $marche;

    /**
     * @var string
     *
     * @ORM\Column(name="visites", type="boolean")
     */
    private $visites;

    /**
     * @var string
     *
     * @ORM\Column(name="sport_eau", type="boolean")
     */
    private $sportEau;

    /**
     * @var string
     *
     * @ORM\Column(name="arc", type="boolean")
     */
    private $arc;

    /**
     * @var string
     *
     * @ORM\Column(name="air", type="boolean")
     */
    private $air;

    /**
     * @var string
     *
     * @ORM\Column(name="sable", type="boolean")
     */
    private $sable;

    /**
     * @var string
     *
     * @ORM\Column(name="quad", type="boolean")
     */
    private $quad;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime")
     */
    private $dateTime;


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
     * Set velo
     *
     * @param string $velo
     * @return CategorieSortie
     */
    public function setVelo($velo)
    {
        $this->velo = $velo;

        return $this;
    }

    /**
     * Get velo
     *
     * @return string 
     */
    public function getVelo()
    {
        return $this->velo;
    }

    /**
     * Set running
     *
     * @param string $running
     * @return CategorieSortie
     */
    public function setRunning($running)
    {
        $this->running = $running;

        return $this;
    }

    /**
     * Get running
     *
     * @return string 
     */
    public function getRunning()
    {
        return $this->running;
    }

    /**
     * Set kayak
     *
     * @param string $kayak
     * @return CategorieSortie
     */
    public function setKayak($kayak)
    {
        $this->kayak = $kayak;

        return $this;
    }

    /**
     * Get kayak
     *
     * @return string 
     */
    public function getKayak()
    {
        return $this->kayak;
    }

    /**
     * Set randonee
     *
     * @param string $randonee
     * @return CategorieSortie
     */
    public function setRandonee($randonee)
    {
        $this->randonee = $randonee;

        return $this;
    }

    /**
     * Get randonee
     *
     * @return string 
     */
    public function getRandonee()
    {
        return $this->randonee;
    }

    /**
     * Set roller
     *
     * @param string $roller
     * @return CategorieSortie
     */
    public function setRoller($roller)
    {
        $this->roller = $roller;

        return $this;
    }

    /**
     * Get roller
     *
     * @return string 
     */
    public function getRoller()
    {
        return $this->roller;
    }

    /**
     * Set plongee
     *
     * @param string $plongee
     * @return CategorieSortie
     */
    public function setPlongee($plongee)
    {
        $this->plongee = $plongee;

        return $this;
    }

    /**
     * Get plongee
     *
     * @return string 
     */
    public function getPlongee()
    {
        return $this->plongee;
    }

    /**
     * Set equitation
     *
     * @param string $equitation
     * @return CategorieSortie
     */
    public function setEquitation($equitation)
    {
        $this->equitation = $equitation;

        return $this;
    }

    /**
     * Get equitation
     *
     * @return string 
     */
    public function getEquitation()
    {
        return $this->equitation;
    }

    /**
     * Set fitness
     *
     * @param string $fitness
     * @return CategorieSortie
     */
    public function setFitness($fitness)
    {
        $this->fitness = $fitness;

        return $this;
    }

    /**
     * Get fitness
     *
     * @return string 
     */
    public function getFitness()
    {
        return $this->fitness;
    }

    /**
     * Set tennis
     *
     * @param string $tennis
     * @return CategorieSortie
     */
    public function setTennis($tennis)
    {
        $this->tennis = $tennis;

        return $this;
    }

    /**
     * Get tennis
     *
     * @return string 
     */
    public function getTennis()
    {
        return $this->tennis;
    }

    /**
     * Set golf
     *
     * @param string $golf
     * @return CategorieSortie
     */
    public function setGolf($golf)
    {
        $this->golf = $golf;

        return $this;
    }

    /**
     * Get golf
     *
     * @return string 
     */
    public function getGolf()
    {
        return $this->golf;
    }

    /**
     * Set marche
     *
     * @param string $marche
     * @return CategorieSortie
     */
    public function setMarche($marche)
    {
        $this->marche = $marche;

        return $this;
    }

    /**
     * Get marche
     *
     * @return string 
     */
    public function getMarche()
    {
        return $this->marche;
    }

    /**
     * Set visites
     *
     * @param string $visites
     * @return CategorieSortie
     */
    public function setVisites($visites)
    {
        $this->visites = $visites;

        return $this;
    }

    /**
     * Get visites
     *
     * @return string 
     */
    public function getVisites()
    {
        return $this->visites;
    }

    /**
     * Set sportEau
     *
     * @param string $sportEau
     * @return CategorieSortie
     */
    public function setSportEau($sportEau)
    {
        $this->sportEau = $sportEau;

        return $this;
    }

    /**
     * Get sportEau
     *
     * @return string 
     */
    public function getSportEau()
    {
        return $this->sportEau;
    }

    /**
     * Set arc
     *
     * @param string $arc
     * @return CategorieSortie
     */
    public function setArc($arc)
    {
        $this->arc = $arc;

        return $this;
    }

    /**
     * Get arc
     *
     * @return string 
     */
    public function getArc()
    {
        return $this->arc;
    }

    /**
     * Set air
     *
     * @param string $air
     * @return CategorieSortie
     */
    public function setAir($air)
    {
        $this->air = $air;

        return $this;
    }

    /**
     * Get air
     *
     * @return string 
     */
    public function getAir()
    {
        return $this->air;
    }

    /**
     * Set sable
     *
     * @param string $sable
     * @return CategorieSortie
     */
    public function setSable($sable)
    {
        $this->sable = $sable;

        return $this;
    }

    /**
     * Get sable
     *
     * @return string 
     */
    public function getSable()
    {
        return $this->sable;
    }

    /**
     * Set quad
     *
     * @param string $quad
     * @return CategorieSortie
     */
    public function setQuad($quad)
    {
        $this->quad = $quad;

        return $this;
    }

    /**
     * Get quad
     *
     * @return string 
     */
    public function getQuad()
    {
        return $this->quad;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return CategorieSortie
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return CategorieSortie
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
