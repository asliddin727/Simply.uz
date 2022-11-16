<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `backend\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'port', 'centre_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['url', 'fullName', 'centre_name', 'date', 'create_date'], 'safe'],
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
        $query = Orders::find();

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
            'port' => $this->port,
            'centre_id' => $this->centre_id,
            'create_date' => $this->create_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'centre_name', $this->centre_name])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
