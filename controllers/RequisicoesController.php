<?php

namespace app\controllers;

use Yii;
use app\models\Requisicoes;
use app\models\Searchrequisicoes;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * RequisicoesController implements the CRUD actions for Requisicoes model.
 */
class RequisicoesController extends ActiveController
{
    public $modelClass = 'app\models\Requisicoes';
}
