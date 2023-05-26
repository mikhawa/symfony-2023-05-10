<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=80, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="usermail", type="string", length=200, nullable=false)
     */
    private $usermail;

    /**
     * @var string
     *
     * @ORM\Column(name="userpwd", type="string", length=255, nullable=false)
     */
    private $userpwd;

    /**
     * @var string
     *
     * @ORM\Column(name="userscreen", type="string", length=400, nullable=false)
     */
    private $userscreen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="useruniqid", type="string", length=120, nullable=true, options={"comment"="idententifiant unique"})
     */
    private $useruniqid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actif", type="integer", nullable=true, options={"comment"="0 => inactif
1  => actif
2 => banni","default"=0})
     */
    private $actif = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUsermail(): ?string
    {
        return $this->usermail;
    }

    public function setUsermail(string $usermail): self
    {
        $this->usermail = $usermail;

        return $this;
    }

    public function getUserpwd(): ?string
    {
        return $this->userpwd;
    }

    public function setUserpwd(string $userpwd): self
    {
        $this->userpwd = $userpwd;

        return $this;
    }

    public function getUserscreen(): ?string
    {
        return $this->userscreen;
    }

    public function setUserscreen(string $userscreen): self
    {
        $this->userscreen = $userscreen;

        return $this;
    }

    public function getUseruniqid(): ?string
    {
        return $this->useruniqid;
    }

    public function setUseruniqid(?string $useruniqid): self
    {
        $this->useruniqid = $useruniqid;

        return $this;
    }

    public function isActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(?int $actif): self
    {
        $this->actif = $actif;

        return $this;
    }


}
