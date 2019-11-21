<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salas".
 *
 * @property int $id
 * @property string $designacao
 * @property int $lugares
 * @property int|null $tem_pc
 * @property int|null $tem_projetor
 * @property int|null $tem_qi
 * @property int|null $tem_wifi
 * @property int $id_edificio
 *
 * @property Requisicoes[] $requisicoes
 * @property Edificios $edificio
 */
class Salas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designacao', 'lugares', 'id_edificio'], 'required'],
            [['lugares', 'tem_pc', 'tem_projetor', 'tem_qi', 'tem_wifi', 'id_edificio'], 'integer'],
            [['designacao'], 'string', 'max' => 200],
            [['id_edificio'], 'exist', 'skipOnError' => true, 'targetClass' => Edificios::className(), 'targetAttribute' => ['id_edificio' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designacao' => 'Designacao',
            'lugares' => 'Lugares',
            'tem_pc' => 'Tem Pc',
            'tem_projetor' => 'Tem Projetor',
            'tem_qi' => 'Tem Qi',
            'tem_wifi' => 'Tem Wifi',
            'id_edificio' => 'Id Edificio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisicoes()
    {
        return $this->hasMany(Requisicoes::className(), ['id_sala' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEdificio()
    {
        return $this->hasOne(Edificios::className(), ['id' => 'id_edificio']);
    }
}
