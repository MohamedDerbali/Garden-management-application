<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\EventsRepository")
 */
class Events
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=true)
     */
    private $dateDeb;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_event", type="string", length=255, nullable=false)
     */
    private $adresseEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=50, nullable=false)
     */
    private $nomEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="frais_particpation", type="integer", nullable=false)
     */
    private $fraisParticpation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_participant", type="integer", nullable=false)
     */
    private $nbre_participant;


    /**
     *@ORM\ManyToOne(targetEntity="CategorieEvent")
     *@ORM\JoinColumn(referencedColumnName="id")
     */
    private $cactegorie;
    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=50, nullable=false)
     */
    private $img;

    /**
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param int $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * @param \DateTime $dateDeb
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAdresseEvent()
    {
        return $this->adresseEvent;
    }

    /**
     * @param string $adresseEvent
     */
    public function setAdresseEvent($adresseEvent)
    {
        $this->adresseEvent = $adresseEvent;
    }

    /**
     * @return string
     */
    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    /**
     * @param string $nomEvent
     */
    public function setNomEvent($nomEvent)
    {
        $this->nomEvent = $nomEvent;
    }

    /**
     * @return int
     */
    public function getFraisParticpation()
    {
        return $this->fraisParticpation;
    }

    /**
     * @param int $fraisParticpation
     */
    public function setFraisParticpation($fraisParticpation)
    {
        $this->fraisParticpation = $fraisParticpation;
    }

    /**
     * @return int
     */
    public function getNbreParticipant()
    {
        return $this->nbre_participant;
    }

    /**
     * @param int $nbre_participant
     */
    public function setNbreParticipant($nbre_participant)
    {
        $this->nbre_participant = $nbre_participant;
    }

    /**
     * @return mixed
     */
    public function getCactegorie()
    {
        return $this->cactegorie;
    }

    /**
     * @param mixed $cactegorie
     */
    public function setCactegorie($cactegorie)
    {
        $this->cactegorie = $cactegorie;
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }



}

