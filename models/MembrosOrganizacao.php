<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "membros_organizacao".
 *
 * @property int $id_utilizador
 * @property int $id_organizacao
 * @property int|null $moderador
 *
 * @property Utilizadores $utilizador
 * @property Organizacoes $organizacao
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
            [['id_utilizador', 'id_organizacao'], 'required'],
            [['id_utilizador', 'id_organizacao', 'moderador'], 'integer'],
            [['id_utilizador', 'id_organizacao'], 'unique', 'targetAttribute' => ['id_utilizador', 'id_organizacao']],
            [['id_utilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizadores::className(), 'targetAttribute' => ['id_utilizador' => 'id']],
            [['id_organizacao'], 'exist', 'skipOnError' => true, 'targetClass' => Organizacoes::className(), 'targetAttribute' => ['id_organizacao' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_utilizador' => 'Id Utilizador',
            'id_organizacao' => 'Id Organizacao',
            'moderador' => 'Moderador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizadores::className(), ['id' => 'id_utilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizacao()
    {
        return $this->hasOne(Organizacoes::className(), ['id' => 'id_organizacao']);
    }
}
