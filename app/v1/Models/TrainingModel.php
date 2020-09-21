<?php

namespace App\v1\Models;

use JsonSerializable;

final class TrainingModel implements JsonSerializable
{
    private $trainingId = 0;
    private $userId = 0;
    private $trainingDate = '';
    private $trainingDescription = '';

    public function jsonSerialize()
    {
        return [
            'trainingId' => $this->trainingId,
            'userId' => $this->userId,
            'trainingDate' => $this->trainingDate,
            'trainingDescription' => $this->trainingDescription,
        ];
    }

    /**
     * Get the value of trainingId
     */ 
    public function getTrainingId()
    {
        return $this->trainingId;
    }

    /**
     * Set the value of trainingId
     *
     * @return  self
     */ 
    public function setTrainingId($trainingId)
    {
        $this->trainingId = $trainingId;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of trainingDate
     */ 
    public function getTrainingDate()
    {
        return $this->trainingDate;
    }

    /**
     * Set the value of trainingDate
     *
     * @return  self
     */ 
    public function setTrainingDate($trainingDate)
    {
        $this->trainingDate = $trainingDate;

        return $this;
    }

    /**
     * Get the value of trainingDescription
     */ 
    public function getTrainingDescription()
    {
        return $this->trainingDescription;
    }

    /**
     * Set the value of trainingDescription
     *
     * @return  self
     */ 
    public function setTrainingDescription($trainingDescription)
    {
        $this->trainingDescription = $trainingDescription;

        return $this;
    }
}