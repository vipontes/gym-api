<?php

namespace App\v1\DAO;

use App\v1\Models\TrainingModel;
use PDOException;

class TrainingDAO extends Connection
{
    private $lastError = '';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of lastError
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     *
     */
    public function getTrainingByUser(int $userId): ?array
    {
        $sql = "SELECT
            training_id,
            user_id,
            training_date,
            training_description
            FROM training
            WHERE user_id = :user_id";

        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(':user_id' => $userId));
        $data = $sth->fetchAll();

        $res = [];

        foreach ($data as $item) {
            $training = new TrainingModel();

            $training->setTrainingId($item['training_id'])
                ->setUserId($item['user_id'])
                ->setTrainingDate($item['training_date'])
                ->setTrainingDescription($item['training_description']);

            $res[] = $training;
        }

        return $res;
    }
}