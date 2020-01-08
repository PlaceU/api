<?php

namespace app\controllers;

use Yii;
use app\models\Requisicoes;
use app\models\RequisicoesSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * RequisicoesController implements the CRUD actions for Requisicoes model.
 */
class RequisicoesController extends ActiveController
{
    public $modelClass = 'app\models\Requisicoes';

    public function actionTotal()
    {
        $RequisicoesModel = new $this->modelClass;
        $recs = $RequisicoesModel::find()->all();
        return ['total' => count($recs)];
    }

    public function actionSala($id)
    {
        $OrganizacoesModel = new $this->modelClass;
        $rec = $OrganizacoesModel::find()->where("id=".$id)->one();
        if($rec)
            return['id' => $id, 'id_Sala' => $rec->id_sala];
        return['id' => $id, 'id_sala' => "null"];
    }
}
