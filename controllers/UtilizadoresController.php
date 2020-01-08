<?php

namespace app\controllers;

use Yii;
use app\models\Utilizadores;
use app\models\UtilizadoresSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtilizadoresController implements the CRUD actions for Utilizadores model.
 */
class UtilizadoresController extends ActiveController
{
    public $modelClass = 'app\models\Utilizadores';

    public function actionTotal()
    {
        $UtilizadoresModel = new $this->modelClass;
        $recs = $UtilizadoresModel::find()->all();
        return ['total' => count($recs)];
    }

    public function actionEmail($id)
    {
        $UtilizadoresModel = new $this->modelClass;
        $rec = $UtilizadoresModel::find()->where("id=".$id)->one();
        if($rec)
            return['id' => $id, 'Email' => $rec->email];
        return['id' => $id, 'Email' => "null"];
    }
}
