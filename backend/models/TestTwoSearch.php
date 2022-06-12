<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TestTwo;

/**
 * TestTwoSearch represents the model behind the search form of `backend\models\TestTwo`.
 */
class TestTwoSearch extends TestTwo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'test_one_id'], 'integer'],
            [['address'], 'safe'],
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
        $query = TestTwo::find();

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
            'test_one_id' => $this->test_one_id,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
