<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "membros_organizacao".
 *
 * @property int $id_utilizador
 * @property int $id_organizao
 * @property int|null $moderador
 *
 * @property Utilizador $utilizador
 * @property Organizacao $organizao
 */
class MembrosOrganizacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'membros_organizacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_utilizador', 'id_organizao'], 'required'],
            [['id_utilizador', 'id_organizao', 'moderador'], 'integer'],
            [['id_utilizador', 'id_organizao'], 'unique', 'targetAttribute' => ['id_utilizador', 'id_organizao']],
            [['id_utilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['id_utilizador' => 'id']],
            [['id_organizao'], 'exist', 'skipOnError' => true, 'targetClass' => Organizacao::className(), 'targetAttribute' => ['id_organizao' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_utilizador' => 'Id Utilizador',
            'id_organizao' => 'Id Organizao',
            'moderador' => 'Moderador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizador::className(), ['id' => 'id_utilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizao()
    {
        return $this->hasOne(Organizacao::className(), ['id' => 'id_organizao']);
    }
}
