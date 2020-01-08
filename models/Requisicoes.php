<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requisicoes".
 *
 * @property int $id
 * @property string $dta_inicio
 * @property string $dta_fim
 * @property int $id_utilizador
 * @property int $id_sala
 *
 * @property Salas $sala
 * @property Utilizadores $utilizador
 */
class Requisicoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requisicoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dta_inicio', 'dta_fim', 'id_utilizador', 'id_sala'], 'required'],
            [['dta_inicio', 'dta_fim'], 'safe'],
            [['id_utilizador', 'id_sala'], 'integer'],
            [['id_sala'], 'exist', 'skipOnError' => true, 'targetClass' => Salas::className(), 'targetAttribute' => ['id_sala' => 'id']],
            [['id_utilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizadores::className(), 'targetAttribute' => ['id_utilizador' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dta_inicio' => 'Dta Inicio',
            'dta_fim' => 'Dta Fim',
            'id_utilizador' => 'Id Utilizador',
            'id_sala' => 'Id Sala',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSala()
    {
        return $this->hasOne(Salas::className(), ['id' => 'id_sala']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizadores::className(), ['id' => 'id_utilizador']);
    }
}
