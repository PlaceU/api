<?php

namespace app\controllers;

use Yii;
use app\models\Salas;
use app\models\SalasSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SalasController implements the CRUD actions for Salas model.
 */
class SalasController extends ActiveController
{
    public $modelClass = 'app\models\Salas';

    public function actionTotal()
    {
        $SalasModel = new $this->modelClass;
        $recs = $SalasModel::find()->all();
        return ['total' => count($recs)];
    }

    public function actionLugares($id)
    {
        $OrganizacoesModel = new $this->modelClass;
        $rec = $OrganizacoesModel::find()->where("id=".$id)->one();
        if($rec)
            return['id' => $id, 'Lugares' => $rec->lugares];
        return['id' => $id, 'Lugares' => "null"];
    }
}
