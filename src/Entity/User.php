<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;


    /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
private $githubUsername;

/**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
private $githubToken;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
   
    }



    public function getGithubUsername(): ?string
    {
        return $this->githubUsername;
    }

    public function setGithubUsername(string $githubUsername): self
    {
        $this->githubUsername = $githubUsername;

        return $this;
   
    }
    

    public function getGithubToken(): ?string
    {
        return $this->githubToken;
    }

    public function setGithubToken(string $githubToken): self
    {
        $this->githubToken =  $githubToken;

        return $this;
   
    }
}