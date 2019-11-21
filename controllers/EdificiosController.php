<?php

namespace app\controllers;

use Yii;
use app\models\Edificios;
use app\models\SearchEdificios;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * EdificiosController implements the CRUD actions for Edificios model.
 */
class EdificiosController extends ActiveController
{
    public $modelClass = 'app\models\Edificios';
}
