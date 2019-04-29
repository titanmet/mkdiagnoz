<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Klient;

/**
 * KlientSearch represents the model behind the search form of `app\models\Klient`.
 */
class KlientSearch extends Klient
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fam', 'name', 'otch', 'data_b', 'passport', 'mesto_rab', 'mest_jit', 'tel'], 'safe'],
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
        $query = Klient::find();

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
            'data_b' => $this->data_b,
        ]);

        $query->andFilterWhere(['like', 'fam', $this->fam])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'otch', $this->otch])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'mesto_rab', $this->mesto_rab])
            ->andFilterWhere(['like', 'mest_jit', $this->mest_jit])
            ->andFilterWhere(['like', 'tel', $this->tel]);

        return $dataProvider;
    }
}
