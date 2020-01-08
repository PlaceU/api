<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Requisicoes;

/**
 * RequisicoesSearch represents the model behind the search form of `app\models\Requisicoes`.
 */
class RequisicoesSearch extends Requisicoes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_utilizador', 'id_sala'], 'integer'],
            [['dta_inicio', 'dta_fim'], 'safe'],
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
        $query = Requisicoes::find();

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
            'id' => $this->id,
            'dta_inicio' => $this->dta_inicio,
            'dta_fim' => $this->dta_fim,
            'id_utilizador' => $this->id_utilizador,
            'id_sala' => $this->id_sala,
        ]);

        return $dataProvider;
    }
}
