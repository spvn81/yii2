<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Departments;

/**
 * DepartmentsSearch represents the model behind the search form of `backend\models\Departments`.
 */
class DepartmentsSearch extends Departments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'brsnch_id', 'company_id'], 'integer'],
            [['deportment_name', 'deportmeny_cretated_date', 'deportment_status'], 'safe'],
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
        $query = Departments::find();

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
            'brsnch_id' => $this->brsnch_id,
            'company_id' => $this->company_id,
            'deportmeny_cretated_date' => $this->deportmeny_cretated_date,
        ]);

        $query->andFilterWhere(['like', 'deportment_name', $this->deportment_name])
            ->andFilterWhere(['like', 'deportment_status', $this->deportment_status]);

        return $dataProvider;
    }
}
