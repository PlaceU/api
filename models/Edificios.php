<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edificios".
 *
 * @property int $id
 * @property string $designacao
 * @property string $morada
 * @property int $id_organizacao
 *
 * @property Organizacoes $organizacao
 * @property Salas[] $salas
 */
class Edificios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'edificios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designacao', 'morada', 'id_organizacao'], 'required'],
            [['id_organizacao'], 'integer'],
            [['designacao', 'morada'], 'string', 'max' => 200],
            [['id_organizacao'], 'exist', 'skipOnError' => true, 'targetClass' => Organizacoes::className(), 'targetAttribute' => ['id_organizacao' => 'id']],
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
            'morada' => 'Morada',
            'id_organizacao' => 'Id Organizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizacao()
    {
        return $this->hasOne(Organizacoes::className(), ['id' => 'id_organizacao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalas()
    {
        return $this->hasMany(Salas::className(), ['id_edificio' => 'id']);
    }
}
