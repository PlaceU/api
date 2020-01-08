<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utilizadores".
 *
 * @property int $id
 * @property string $nome
 * @property string $password
 * @property string $email
 * @property string|null $morada
 * @property string|null $contacto
 * @property string|null $dta_nascimento
 * @property string|null $dta_registo
 * @property int|null $isadmin
 * @property int|null $isbanned
 *
 * @property MembrosOrganizacao[] $membrosOrganizacaos
 * @property Organizacoes[] $organizacaos
 * @property Organizacoes[] $organizacoes
 * @property Requisicoes[] $requisicoes
 */
class Utilizadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utilizadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'password', 'email'], 'required'],
            [['dta_nascimento', 'dta_registo'], 'safe'],
            [['isadmin', 'isbanned'], 'integer'],
            [['nome', 'password', 'email', 'contacto'], 'string', 'max' => 100],
            [['morada'], 'string', 'max' => 200],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'password' => 'Password',
            'email' => 'Email',
            'morada' => 'Morada',
            'contacto' => 'Contacto',
            'dta_nascimento' => 'Dta Nascimento',
            'dta_registo' => 'Dta Registo',
            'isadmin' => 'Isadmin',
            'isbanned' => 'Isbanned',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembrosOrganizacaos()
    {
        return $this->hasMany(MembrosOrganizacao::className(), ['id_utilizador' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizacaos()
    {
        return $this->hasMany(Organizacoes::className(), ['id' => 'id_organizacao'])->viaTable('membros_organizacao', ['id_utilizador' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizacoes()
    {
        return $this->hasMany(Organizacoes::className(), ['id_owner' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisicoes()
    {
        return $this->hasMany(Requisicoes::className(), ['id_utilizador' => 'id']);
    }
}
