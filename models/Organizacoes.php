<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizacoes".
 *
 * @property int $id
 * @property string $nome
 * @property string $morada
 * @property string $mail
 * @property string $contacto_fixo
 * @property string $contacto_movel
 * @property string|null $dta_registo
 * @property int $id_owner
 *
 * @property MembrosOrganizacao[] $membrosOrganizacaos
 * @property Utilizadores[] $utilizadors
 * @property Utilizadores $owner
 */
class Organizacoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizacoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada', 'mail', 'contacto_fixo', 'contacto_movel', 'id_owner'], 'required'],
            [['dta_registo'], 'safe'],
            [['id_owner'], 'integer'],
            [['nome', 'contacto_fixo', 'contacto_movel'], 'string', 'max' => 100],
            [['morada', 'mail'], 'string', 'max' => 200],
            [['id_owner'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizadores::className(), 'targetAttribute' => ['id_owner' => 'id']],
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
            'morada' => 'Morada',
            'mail' => 'Mail',
            'contacto_fixo' => 'Contacto Fixo',
            'contacto_movel' => 'Contacto Movel',
            'dta_registo' => 'Dta Registo',
            'id_owner' => 'Id Owner',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembrosOrganizacaos()
    {
        return $this->hasMany(MembrosOrganizacao::className(), ['id_organizacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizadors()
    {
        return $this->hasMany(Utilizadores::className(), ['id' => 'id_utilizador'])->viaTable('membros_organizacao', ['id_organizacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Utilizadores::className(), ['id' => 'id_owner']);
    }
}
