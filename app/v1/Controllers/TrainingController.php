<?php

namespace App\v1\Controllers;

use App\v1\DAO\TrainingDAO;
use App\v1\DAO\UserDAO;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TrainingController extends BaseController
{
    public function getTrainingByUser(Request $request, Response $response, array $args): Response
    {
        $userId = $request->getAttribute('user_id');

        $dataAccessObject = new TrainingDAO();
        $users = $dataAccessObject->getTrainingByUser($userId);
        $status = 200;
        header('Content-Type: application/json');
        return $response->withJson($users, $status);
    }

}