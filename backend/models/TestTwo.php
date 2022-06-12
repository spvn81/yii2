<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test_two".
 *
 * @property int $id
 * @property int $test_one_id
 * @property string $address
 *
 * @property TestOne $testOne
 * @property TestThree[] $testThrees
 */
class TestTwo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_two';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_one_id', 'address'], 'required'],
            [['test_one_id'], 'integer'],
            [['address'], 'string'],
            [['test_one_id'], 'exist', 'skipOnError' => true, 'targetClass' => TestOne::className(), 'targetAttribute' => ['test_one_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test_one_id' => 'Test One ID',
            'address' => 'Address',
        ];
    }

    /**
     * Gets query for [[TestOne]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestOne()
    {
        return $this->hasOne(TestOne::className(), ['id' => 'test_one_id']);
    }

    /**
     * Gets query for [[TestThrees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestThrees()
    {
        return $this->hasMany(TestThree::className(), ['test_two_id' => 'id']);
    }
}
