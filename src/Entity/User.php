<?php
// src/Entity/User.php

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

// Ajoutez d'autres propriétés et méthodes selon vos besoins

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
}
?>