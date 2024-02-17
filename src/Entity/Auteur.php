<?php
// src/Entity/Auteur.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="auteurs", uniqueConstraints={@ORM\UniqueConstraint(columns={"nom"})})
 */
class Auteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="Livre", mappedBy="auteur", cascade={"persist", "remove"})
     */
    private $livres;

    public function __construct()
    {
        $this->livres = new ArrayCollection();
    }

    // Getters et setters

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of livres
     */ 
    public function getLivres()
    {
        return $this->livres;
    }

    /**
     * Set the value of livres
     *
     * @return  self
     */ 
    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }
    public function addLivre(Livre $livre)
    {
        if (!$this->livres->contains($livre)) {
            $this->livres[] = $livre;
            $livre->setAuteur($this);
        }
    }

    public function removeLivre(Livre $livre)
    {
        if ($this->livres->contains($livre)) {
            $this->livres->removeElement($livre);
            // Mise à jour de la relation bidirectionnelle
            if ($livre->getAuteur() === $this) {
                $livre->setAuteur(null);
            }
        }
    }

}
?>