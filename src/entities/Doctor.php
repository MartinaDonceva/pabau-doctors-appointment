<?php

namespace App\Entities;

/**
 * Message Entity
 */
class Doctor extends User
{

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