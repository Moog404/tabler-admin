<?php

namespace App\Entity;

use App\Repository\MachineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MachineRepository::class)
 */
class Machine
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
    private string $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $content;

    /**
     * @ORM\Column(type="boolean")
     */
    private ?bool $isOnline;

    /**
     * @ORM\OneToMany(targetEntity=Characteristic::class, mappedBy="machine", orphanRemoval=true, cascade={"persist"})
     */
    private $characteristics;

    /**
     * @ORM\OneToMany(targetEntity=Characteristic::class, mappedBy="machine2", orphanRemoval=true, cascade={"persist"})
     */
    private $secondCharacteristics;

    public function __construct()
    {
        $this->characteristics = new ArrayCollection();
        $this->secondCharacteristics = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getIsOnline(): ?bool
    {
        return $this->isOnline;
    }

    public function setIsOnline(bool $isOnline): self
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * @return Collection|Characteristic[]
     */
    public function getCharacteristics(): Collection
    {
        return $this->characteristics;
    }

    public function addCharacteristic(Characteristic $characteristic): self
    {
        if (!$this->characteristics->contains($characteristic)) {
            $this->characteristics[] = $characteristic;
            $characteristic->setMachine($this);
        }

        return $this;
    }

    public function removeCharacteristic(Characteristic $characteristic): self
    {
        if ($this->characteristics->removeElement($characteristic)) {
            // set the owning side to null (unless already changed)
            if ($characteristic->getMachine() === $this) {
                $characteristic->setMachine(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getSecondCharacteristics(): Collection
    {
        return $this->secondCharacteristics;
    }

    public function addSecondCharacteristic(Characteristic $secondCharacteristic): self
    {
        if (!$this->secondCharacteristics->contains($secondCharacteristic)) {
            $this->secondCharacteristics[] = $secondCharacteristic;
            $secondCharacteristic->setMachine2($this);
        }

        return $this;
    }

    public function removeSecondCharacteristic(Characteristic $secondCharacteristic): self
    {
        if ($this->secondCharacteristics->removeElement($secondCharacteristic)) {
            // set the owning side to null (unless already changed)
            if ($secondCharacteristic->getMachine2() === $this) {
                $secondCharacteristic->setMachine2(null);
            }
        }

        return $this;
    }
}
