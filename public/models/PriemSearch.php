<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Priem;

/**
 * PriemSearch represents the model behind the search form of `app\models\Priem`.
 */
class PriemSearch extends Priem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'klient_id', 'jaloba_id', 'pokazatel_jal_id', 'pokazatel_live_id', 'pokazatel_zabol_id', 'pokazatel_osm_id', 'pokazatel_obsl_id'], 'integer'],
            [['data'], 'safe'],
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
        $query = Priem::find();

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
            'data' => $this->data,
            'klient_id' => $this->klient_id,
            'jaloba_id' => $this->jaloba_id,
            'pokazatel_jal_id' => $this->pokazatel_jal_id,
            'pokazatel_live_id' => $this->pokazatel_live_id,
            'pokazatel_zabol_id' => $this->pokazatel_zabol_id,
            'pokazatel_osm_id' => $this->pokazatel_osm_id,
            'pokazatel_obsl_id' => $this->pokazatel_obsl_id,
        ]);

        return $dataProvider;
    }
}
