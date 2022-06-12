<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TestThree;
use backend\models\TestTwo;
use backend\models\TestOne;
/**
 * TestThreeSearch represents the model behind the search form of `backend\models\TestThree`.
 */
class TestThreeSearch extends TestThree
{
    public $testTwo;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['college','test_two_id'], 'safe'],
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
        $query = TestThree::find();
        // $query->leftJoin('test_two','test_two.id=test_three.test_two_id');
        $query->joinWith('testTwo');
        $query->leftJoin('test_one','test_one.id=test_two.test_one_id');

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
        
        ]);

        $query->andFilterWhere(['like', 'college', $this->college]);
        $query->andFilterWhere(['like', 'address', $this->test_two_id]);
        echo $query->createCommand()->getRawSql();

        return $dataProvider;
    }
}
