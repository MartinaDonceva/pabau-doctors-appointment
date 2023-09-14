<?php

namespace App\Entities;

use PabauAppointments\Entity\BaseEntity;
/**
 * Message Entity
 */
class User extends BaseEntity
{

    /**
     * @var String
     */
    protected string $username;

    /**
     * @var String
     */
    protected string $email;

    /**
     * @var String
     */
    protected string $password;


    /**
     * @param string|null $username
     * @return User
     */
    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return  String
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string|null $email
     * @return User
     */
    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return  String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string|null $password
     * @return User
     */
    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

}