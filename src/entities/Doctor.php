<?php

namespace App\Entities;

use PabauAppointments\Entity\BaseEntity;

/**
 * Message Entity
 */
class Doctor extends BaseEntity
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
     * @var String
     */
    protected string $name;

    /**
     * @var String
     */
    protected string $surname;

    /**
     * @var String
     */
    protected string $address;

    /**
     * @var String
     */
    protected string $contactInfo;


    /**
     * @param string|null $username
     * @return Doctor
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
     * @return Doctor
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
     * @return Doctor
     */
    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }
    /**
     * @return  String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Doctor
     */
    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return  String
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string|null $surname
     * @return Doctor
     */
    public function setSurname(?string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return  String
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return Doctor
     */
    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return  String
     */
    public function getContactInfo(): string
    {
        return $this->contactInfo;
    }

    /**
     * @param string|null $contactInfo
     * @return Doctor
     */
    public function setContactInfo(?string $contactInfo): static
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }
}