<?php

namespace app\controllers;

use Yii;
use app\models\Utilizador;
use app\models\SearchUtilizador;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * UtilizadoresController implements the CRUD actions for Utilizador model.
 */
class UtilizadoresController extends ActiveController
{
    public $modelClass = 'app\models\Utilizador';

    public function actionTotal()
    {
        $UtilizadorModel = new $this->modelClass;
        $recs = $UtilizadorModel::find()->all();
        return ['total' => count($recs)];
    }

    /*
    public function actionRemoverutilizador($id){
        $UtilizadorModel = new $this->modelClass;
        $ret=$UtilizadorModel->deleteAll("id=".$id);

        if($ret){
            \Yii::$app->response->statusCode =200; return ['code'=>'ok'];
        }
        \Yii::$app->response->statusCode =404; return ['code'=>'error'];
    }
    */
}
