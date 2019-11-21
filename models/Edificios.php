<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edificios".
 *
 * @property int $id
 * @property string $designacao
 * @property string $morada
 *
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
            [['designacao', 'morada'], 'required'],
            [['designacao', 'morada'], 'string', 'max' => 200],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalas()
    {
        return $this->hasMany(Salas::className(), ['id_edificio' => 'id']);
    }
}
