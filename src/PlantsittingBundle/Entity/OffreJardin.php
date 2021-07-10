<?php

namespace PlantsittingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreJardin
 *
 * @ORM\Table(name="offre_jardin")
 * @ORM\Entity
 */
class OffreJardin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre_jardin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffreJardin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="localisation", type="string", length=200, nullable=false)
     */
    private $localisation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=1000, nullable=false)
     */
    private $titre;
/*
    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    //private $idUser;



    /**
     * @return mixed
     */
    public function getidOffreJardin()
    {
        return $this->idOffreJardin;
    }

    /**
     * @param mixed $idOffreJardin
     */
    public function setidOffreJardin($idOffreJardin)
    {
        $this->idOffreJardin = $idOffreJardin;
    }
    /**
     * @return mixed
     */
    public function getdateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setdateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }
    /**
     * @return mixed
     */
    public function getdateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setdateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
    /**
     * @return mixed
     */
    public function getlocalisation()
    {
        return $this->localisation;
    }

    /**
     * @param mixed $localisation
     */
    public function setlocalisation($localisation)
    {
        $this->localisation = $localisation;
    }
    /**
     * @return mixed
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setprix($prix)
    {
        $this->prix = $prix;
    }
    /**
     * @return mixed
     */
    public function getdescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setdescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return mixed
     */
    public function gettitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function settitre($titre)
    {
        $this->titre = $titre;
    }



}

