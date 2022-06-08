<?php

namespace backend\Module\settings\models;

use Yii;

/**
 * This is the model class for table "compnies".
 *
 * @property int $id
 * @property string $company_name
 * @property string|null $company_start_date
 * @property string $email
 * @property string $address
 * @property string $company_cretated_date
 * @property string $compant_status
 *
 * @property Branches[] $branches
 * @property Departments[] $departments
 */
class Compnies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compnies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_name', 'email', 'address', 'compant_status'], 'required'],
            [['address', 'compant_status'], 'string'],
            [['company_cretated_date'], 'safe'],
            [['company_name', 'company_start_date', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'company_start_date' => 'Company Start Date',
            'email' => 'Email',
            'address' => 'Address',
            'company_cretated_date' => 'Company Cretated Date',
            'compant_status' => 'Compant Status',
        ];
    }

    /**
     * Gets query for [[Branches]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBranches()
    {
        return $this->hasMany(Branches::className(), ['company_id' => 'id']);
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::className(), ['company_id' => 'id']);
    }
}
