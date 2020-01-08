<?php

namespace app\controllers;

use Yii;
use app\models\Organizacoes;
use app\models\OrganizacoesSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrganizacoesController implements the CRUD actions for Organizacoes model.
 */
class OrganizacoesController extends ActiveController
{
    public $modelClass = 'app\models\Organizacoes';

    public function actionTotal()
    {
        $OrganizacoesModel = new $this->modelClass;
        $recs = $OrganizacoesModel::find()->all();
        return ['total' => count($recs)];
    }

    public function actionNome($id)
    {
        $OrganizacoesModel = new $this->modelClass;
        $rec = $OrganizacoesModel::find()->where("id=".$id)->one();
        if($rec)
            return['id' => $id, 'Nome' => $rec->nome];
        return['id' => $id, 'Nome' => "null"];
    }
}
