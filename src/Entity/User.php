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
     * @var bool|null
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true, options={"comment"="0 => inactif
1  => actif
2 => banni"})
     */
    private $actif = '0';


}
