<?php

namespace App\Entities;

use DateTime;
use PabauAppointments\Entity\BaseEntity;
use StatusEnum;

/**
 * Message Entity
 */
class Appointment extends BaseEntity
{

    /**
     * @var Integer
     */
    protected int $doctorId;

    /**
     * @var Integer
     */
    protected int $patientId;

    /**
     * @var DateTime
     */
    protected DateTime $startTime;

    /**
     * @var DateTime
     */
    protected DateTime $endTime;

    /**
     * @var StatusEnum
     */
    protected StatusEnum $status;

    /**
     * @var String
     */
    protected string $medicalCondition;

    /**
     * @var String
     */
    protected string $service;


    /**
     * Constructor for Patient entity
     *
     * @param int $doctorId The foreign key referencing the Doctor entity.
     * @param int $patientId The foreign key referencing the Patient entity.
     */
    public function __construct(int $doctorId, int $patientId)
    {
        parent::__construct();
        $this->doctorId = $doctorId;
        $this->patientId = $patientId;
    }

    /**
     * Get the doctorId
     *
     * @return int
     */
    public function getDoctorId(): int
    {
        return $this->doctorId;
    }

    /**
     * Set the doctorId
     *
     * @param int $doctorId
     */
    public function setDoctorId(int $doctorId)
    {
        $this->doctorId = $doctorId;
    }

    /**
     * Get the patientId
     *
     * @return int
     */
    public function getPatientId(): int
    {
        return $this->patientId;
    }

    /**
     * Set the patientId
     *
     * @param int $patientId
     */
    public function setPatientId(int $patientId)
    {
        $this->patientId = $patientId;
    }


    /**
     * @param DateTime|null $startTime
     * @return Appointment
     */
    public function setStartTime(?string $startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return  DateTime
     */
    public function getStartTime(): DateTime
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|null $endTime
     * @return Appointment
     */
    public function setEndTime(?string $endTime): static
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return  Datetime
     */
    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    /**
     * @return  StatusEnum
     */
    public function getStatus(): StatusEnum
    {
        return $this->status;
    }

    /**
     * @param StatusEnum|null $status
     * @return Appointment
     */
    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return  String
     */
    public function getMedicalCondition(): string
    {
        return $this->medicalCondition;
    }

    /**
     * @param string|null $medicalCondition
     * @return Appointment
     */
    public function setMedicalCondition(?string $medicalCondition): static
    {
        $this->medicalCondition = $medicalCondition;

        return $this;
    }

    /**
     * @return  String
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string|null $service
     * @return Appointment
     */
    public function setService(?string $service): static
    {
        $this->service = $service;

        return $this;
    }
}