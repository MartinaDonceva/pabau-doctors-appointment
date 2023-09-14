<?php

namespace App\Entities;

use PabauAppointments\Entity\BaseEntity;

/**
 * Message Entity
 */
class Patient extends BaseEntity
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
     * @var Integer
     */
    protected int $socialSecurityNumber;

    /**
     * @var String
     */
    protected string $phoneNumber;


    /**
     * @return  String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Patient
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
     * @return Patient
     */
    public function setSurname(?string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return  Integer
     */
    public function getSocialSecurityNumber(): int
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @param string|null $socialSecurityNumber
     * @return Patient
     */
    public function setSocialSecurityNumber(?string $socialSecurityNumber): static
    {
        $this->socialSecurityNumber = $socialSecurityNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    /**
     * @param int|null $phoneNumber
     * @return Patient
     */
    public function setPhoneNumber(?int $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}