<?php

namespace app\controllers;

use Yii;
use app\models\Edificios;
use app\models\EdificiosSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EdificiosController implements the CRUD actions for Edificios model.
 */
class EdificiosController extends ActiveController
{
    public $modelClass = 'app\models\Edificios';

    public function actionTotal()
    {
        $EdificiosModel = new $this->modelClass;
        $recs = $EdificiosModel::find()->all();
        return ['total' => count($recs)];
    }

    public function actionDesignacao($id)
    {
        $EdificiosModel = new $this->modelClass;
        $rec = $EdificiosModel::find()->where("id=".$id)->one();
        if($rec)
            return['id' => $id, 'Designacao' => $rec->designacao];
        return['id' => $id, 'Designacao' => "null"];
    }
}
