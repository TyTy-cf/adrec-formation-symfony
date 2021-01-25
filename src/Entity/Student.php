<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
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
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $gender;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function getHeightMeter(): string
    {
        if ($this->height !== null) {
            return ($this->height / 100) . 'm';
        }
        return 'Non renseigné';
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @return string|null
     */
    public function getGenderLabel(): string
    {
        // Si gender est renseigné
        if ($this->gender !== null) {
            // Si c'est M on renvoit Homme
            if ($this->gender === 'M') return 'students.gender.male';
            // Sinon Femme
            return 'students.gender.female';
        }
        // Si gender n'est pas renseigné, on renvoit Non renseigné
        return 'students.gender.unknown';
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
