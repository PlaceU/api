<?php

namespace app\controllers;

use Yii;
use app\models\Organizacao;
use app\models\SearchOrganizacao;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * OrganizacaoController implements the CRUD actions for Organizacao model.
 */
class OrganizacaoController extends ActiveController
{
    public $modelClass = 'app\models\Organizacao';
}
