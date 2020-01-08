<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Utilizadores;

/**
 * UtilizadoresSearch represents the model behind the search form of `app\models\Utilizadores`.
 */
class UtilizadoresSearch extends Utilizadores
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'isadmin', 'isbanned'], 'integer'],
            [['nome', 'password', 'email', 'morada', 'contacto', 'dta_nascimento', 'dta_registo'], 'safe'],
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
        $query = Utilizadores::find();

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
            'dta_nascimento' => $this->dta_nascimento,
            'dta_registo' => $this->dta_registo,
            'isadmin' => $this->isadmin,
            'isbanned' => $this->isbanned,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'morada', $this->morada])
            ->andFilterWhere(['like', 'contacto', $this->contacto]);

        return $dataProvider;
    }
}
