<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MembrosOrganizacao;

/**
 * SearchMembrosOrganizacao represents the model behind the search form of `app\models\MembrosOrganizacao`.
 */
class SearchMembrosOrganizacao extends MembrosOrganizacao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_utilizador', 'id_organizao', 'moderador'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MembrosOrganizacao::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_utilizador' => $this->id_utilizador,
            'id_organizao' => $this->id_organizao,
            'moderador' => $this->moderador,
        ]);

        return $dataProvider;
    }
}
