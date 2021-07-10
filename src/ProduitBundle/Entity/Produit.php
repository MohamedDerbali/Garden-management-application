<?php

namespace ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="ProduitBundle\Repository\NotificationRepository")
 *  * @ORM\Entity
 * @Vich\Uploadable
 */
class Produit implements NotifiableInterface, \JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=false)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=false)
     */
    public $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    public $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieProduit", type="string", length=200, nullable=true)
     */
    public $categorieproduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    public $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    public $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieplants", type="string", length=200, nullable=true)
     */
    private $categorieplants;

    /**
     * @var string
     *
     * @ORM\Column(name="types", type="string", length=255, nullable=true)
     */
    public $types;

    /**
     * @var string
     *
     * @ORM\Column(name="dure_vie", type="string", length=200, nullable=true)
     */
    public $dureVie;

    /**
     * @var string
     *
     * @ORM\Column(name="origine", type="string", length=200, nullable=true)
     */
    public $origine;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer", nullable=true)
     */
    public $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="saison", type="string", length=200, nullable=true)
     */
    public $saison;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    public $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=200, nullable=true)
     */
    public $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=200, nullable=true)
     */
    public $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=200, nullable=true)
     */
    public $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=200, nullable=true)
     */
    public $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=200, nullable=true)
     */
    public $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsvie", type="string", length=255, nullable=true)
     */
    public $tempsvie;

    /**
     * @var \ProduitBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="ProduitBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    public $idUser;

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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
    public function getCategorieproduit()
    {
        return $this->categorieproduit;
    }

    /**
     * @param string $categorieproduit
     */
    public function setCategorieproduit($categorieproduit)
    {
        $this->categorieproduit = $categorieproduit;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getCategorieplants()
    {
        return $this->categorieplants;
    }

    /**
     * @param string $categorieplants
     */
    public function setCategorieplants($categorieplants)
    {
        $this->categorieplants = $categorieplants;
    }

    /**
     * @return string
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param string $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return string
     */
    public function getDureVie()
    {
        return $this->dureVie;
    }

    /**
     * @param string $dureVie
     */
    public function setDureVie($dureVie)
    {
        $this->dureVie = $dureVie;
    }

    /**
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * @param string $origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    }

    /**
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param int $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return string
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * @param string $saison
     */
    public function setSaison($saison)
    {
        $this->saison = $saison;
    }

    /**
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param int $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return string
     */
    public function getTempsvie()
    {
        return $this->tempsvie;
    }

    /**
     * @param string $tempsvie
     */
    public function setTempsvie($tempsvie)
    {
        $this->tempsvie = $tempsvie;
    }

    /**
     * @return \FosUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param \FosUser $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notification = new \ProduitBundle\Entity\Notification();
        $notification
            ->setTitle('Chère Client on a pour vous un nouveau produit')
            ->setDescription('Produit  "'.$this->nom.'"')
            ->setRoute('affichage')
            ->setParameters(array('id' => $this->idProduit))
        ;
        $builder->addNotification($notification);

        return $builder;
    }

    public function notificationsOnUpdate(NotificationBuilder $builder)
    {
        $notification = new \ProduitBundle\Entity\Notification();
        $notification
            ->setTitle('Modification')
            ->setDescription('"'.$this->nom.'" a été changée ')
            ->setRoute('affichage')
            ->setParameters(array('id' => $this->idProduit))
        ;
        $builder->addNotification($notification);

        return $builder;
    }

    public function notificationsOnDelete(NotificationBuilder $builder)
    {
        // in case you don't want any notification for a special event
        // you can simply return an empty $builder
        return $builder;
    }
    function jsonSerialize()
    {
        return get_object_vars($this);
    }




}

