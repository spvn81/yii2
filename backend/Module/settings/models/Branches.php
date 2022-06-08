<?php

namespace backend\Module\settings\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property int $id
 * @property int $company_id
 * @property int $branch_name
 * @property string $branch_address
 * @property string $branch_created_date
 * @property string $branch_status
 *
 * @property Compnies $company
 * @property Departments[] $departments
 */
class Branches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'branch_name', 'branch_address', 'branch_status'], 'required'],
            [['company_id', 'branch_name'], 'integer'],
            [['branch_address', 'branch_status'], 'string'],
            [['branch_created_date'], 'safe'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compnies::className(), 'targetAttribute' => ['company_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'branch_name' => 'Branch Name',
            'branch_address' => 'Branch Address',
            'branch_created_date' => 'Branch Created Date',
            'branch_status' => 'Branch Status',
        ];
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Compnies::className(), ['id' => 'company_id']);
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::className(), ['brsnch_id' => 'id']);
    }
}
