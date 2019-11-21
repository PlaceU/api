<?php

namespace app\controllers;

use Yii;
use app\models\Salas;
use app\models\SearchSalas;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * SalasController implements the CRUD actions for Salas model.
 */
class SalasController extends ActiveController
{
    public $modelClass = 'app\models\Salas';
}
