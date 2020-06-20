<?php

namespace App\Entity;

use App\Repository\TourRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=TourRepository::class)
 */
class Tour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *  * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Tour name must be at least {{ limit }} characters long",
     *      maxMessage = "Tour name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     * )
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $length;

    /**
     * @Assert\Url(
     *    message = "The url '{{ value }}' is not a valid url",
     * )
     * @ORM\Column(type="text", nullable=true)
     */
    private $linkToMap;

    /**
     * @ORM\Column(type="integer")
     */
    private $difficulty;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userId;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $note;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfNotes;

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

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getLinkToMap(): ?string
    {
        return $this->linkToMap;
    }

    public function setLinkToMap(?string $linkToMap): self
    {
        $this->linkToMap = $linkToMap;

        return $this;
    }

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getNumberOfNotes(): ?int
    {
        return $this->numberOfNotes;
    }

    public function setNumberOfNotes(int $numberOfNotes): self
    {
        $this->numberOfNotes = $numberOfNotes;

        return $this;
    }
}
