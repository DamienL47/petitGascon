<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=ReservationsRepository::class)
 */
class Reservations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $email;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $tel;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $nbPersonnes;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $dateReservation;

    /**
     * @ORM\ManyToOne(targetEntity=Status::class, inversedBy="reservations")
     */
    private ?Status $status_id;

    /**
     * @ORM\OneToMany(targetEntity=Admin::class, mappedBy="admin")
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?Admin $modifierPar_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $contraintes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getNbPersonnes(): ?int
    {
        return $this->nbPersonnes;
    }

    public function setNbPersonnes(int $nbPersonnes): self
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getStatusId(): ?Status
    {
        return $this->status_id;
    }

    public function setStatusId(?Status $status_id): self
    {
        $this->status_id = $status_id;

        return $this;
    }

    public function getModifierParId(): ?Admin
    {
        return $this->modifierPar_id;
    }

    public function setModifierParId(?Admin $modifierPar_id): self
    {
        $this->modifierPar_id = $modifierPar_id;

        return $this;
    }

    public function getContraintes(): ?string
    {
        return $this->contraintes;
    }

    public function setContraintes(?string $contraintes): self
    {
        $this->contraintes = $contraintes;

        return $this;
    }

}