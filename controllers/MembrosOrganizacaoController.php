<?php

namespace app\controllers;

use Yii;
use app\models\MembrosOrganizacao;
use app\models\MembrosOrganizacaoSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MembrosOrganizacaoController implements the CRUD actions for MembrosOrganizacao model.
 */
class MembrosOrganizacaoController extends ActiveController
{
    public $modelClass = 'app\models\MembrosOrganizacao';
}
