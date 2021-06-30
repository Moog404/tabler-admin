<?php

namespace App\Entity;

use App\Repository\CharacteristicRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacteristicRepository::class)
 */
class Characteristic
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $content;

    /**
     * @ORM\ManyToOne(targetEntity=Machine::class, inversedBy="characteristics")
     */
    private ?Machine $machine;

    /**
     * @ORM\ManyToOne(targetEntity=Machine::class, inversedBy="secondCharacteristics")
     */
    private ?Machine $machine2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getMachine(): ?Machine
    {
        return $this->machine;
    }

    public function setMachine(?Machine $machine): self
    {
        $this->machine = $machine;

        return $this;
    }

    public function getMachine2(): ?Machine
    {
        return $this->machine2;
    }

    public function setMachine2(?Machine $machine2): self
    {
        $this->machine2 = $machine2;

        return $this;
    }
}
