<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Salas;

/**
 * SalasSearch represents the model behind the search form of `app\models\Salas`.
 */
class SalasSearch extends Salas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lugares', 'tem_pc', 'tem_projetor', 'tem_qi', 'tem_wifi', 'id_edificio'], 'integer'],
            [['designacao'], 'safe'],
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
        $query = Salas::find();

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
            'lugares' => $this->lugares,
            'tem_pc' => $this->tem_pc,
            'tem_projetor' => $this->tem_projetor,
            'tem_qi' => $this->tem_qi,
            'tem_wifi' => $this->tem_wifi,
            'id_edificio' => $this->id_edificio,
        ]);

        $query->andFilterWhere(['like', 'designacao', $this->designacao]);

        return $dataProvider;
    }
}
