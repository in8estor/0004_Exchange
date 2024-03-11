<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 12, unique: true, nullable: false)]
    private string $phone;

    #[ORM\Column(type: 'string', length: 50, unique: true, nullable: false)]
    private string $email;

    #[ORM\Column(type: 'string', length: 50, nullable: false)]
    private string $name;

    #[ORM\Column(type: 'string', length: 50, nullable: false)]
    private string $password;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $createdAt;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $updatedAt;

}