<?php

namespace backend\Module\settings\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\Module\settings\models\Branches;

/**
 * SearchBranches represents the model behind the search form of `backend\Module\settings\models\Branches`.
 */
class SearchBranches extends Branches
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'company_id', 'branch_name'], 'integer'],
            [['branch_address', 'branch_created_date', 'branch_status'], 'safe'],
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
        $query = Branches::find();

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
            'company_id' => $this->company_id,
            'branch_name' => $this->branch_name,
            'branch_created_date' => $this->branch_created_date,
        ]);

        $query->andFilterWhere(['like', 'branch_address', $this->branch_address])
            ->andFilterWhere(['like', 'branch_status', $this->branch_status]);

        return $dataProvider;
    }
}
