<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $id
 * @property int $brsnch_id
 * @property int $company_id
 * @property string $deportment_name
 * @property string $deportmeny_cretated_date
 * @property string $deportment_status
 *
 * @property Branches $brsnch
 * @property Compnies $company
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brsnch_id', 'company_id', 'deportment_name', 'deportment_status'], 'required'],
            [['brsnch_id', 'company_id'], 'integer'],
            [['deportmeny_cretated_date'], 'safe'],
            [['deportment_status'], 'string'],
            [['deportment_name'], 'string', 'max' => 255],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compnies::className(), 'targetAttribute' => ['company_id' => 'id']],
            [['brsnch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branches::className(), 'targetAttribute' => ['brsnch_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brsnch_id' => 'Brsnch ID',
            'company_id' => 'Company ID',
            'deportment_name' => 'Deportment Name',
            'deportmeny_cretated_date' => 'Deportmeny Cretated Date',
            'deportment_status' => 'Deportment Status',
        ];
    }

    /**
     * Gets query for [[Brsnch]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrsnch()
    {
        return $this->hasOne(Branches::className(), ['id' => 'brsnch_id']);
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
}
