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

    public function getCssRangeHeight(): string
    {
        if ($this->height === null) {
            return 'student-height-empty';
        }
        if ($this->height >= 120 && $this->height <= 129) return 'student-height-120';
        if ($this->height >= 130 && $this->height <= 139) return 'student-height-130';
        if ($this->height >= 140 && $this->height <= 149) return 'student-height-140';
        if ($this->height >= 150 && $this->height <= 159) return 'student-height-150';
        if ($this->height >= 160 && $this->height <= 169) return 'student-height-160';
        if ($this->height >= 170 && $this->height <= 179) return 'student-height-170';
        if ($this->height >= 180 && $this->height <= 189) return 'student-height-180';
        if ($this->height >= 190 && $this->height <= 199) return 'student-height-190';
        return 'student-height-200';
    }

    public function getHeightMeter(): string
    {
        if ($this->height !== null) {
            return ($this->height / 100) . 'm';
        }
        return 'students.gender.unknown';
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
