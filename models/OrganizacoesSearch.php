<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Organizacoes;

/**
 * OrganizacoesSearch represents the model behind the search form of `app\models\Organizacoes`.
 */
class OrganizacoesSearch extends Organizacoes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_owner'], 'integer'],
            [['nome', 'morada', 'mail', 'contacto_fixo', 'contacto_movel', 'dta_registo'], 'safe'],
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
        $query = Organizacoes::find();

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
            'dta_registo' => $this->dta_registo,
            'id_owner' => $this->id_owner,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'morada', $this->morada])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'contacto_fixo', $this->contacto_fixo])
            ->andFilterWhere(['like', 'contacto_movel', $this->contacto_movel]);

        return $dataProvider;
    }
}
