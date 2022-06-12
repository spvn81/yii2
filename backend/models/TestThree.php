<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test_three".
 *
 * @property int $id
 * @property int $test_two_id
 * @property string $college
 *
 * @property TestTwo $testTwo
 */
class TestThree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_three';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_two_id', 'college'], 'required'],
            [['test_two_id'], 'integer'],
            [['college'], 'string', 'max' => 255],
            [['test_two_id'], 'exist', 'skipOnError' => true, 'targetClass' => TestTwo::className(), 'targetAttribute' => ['test_two_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test_two_id' => 'Test Two ID',
            'college' => 'College',
        ];
    }

    /**
     * Gets query for [[TestTwo]].
     *
     * @return \yii\db\ActiveQuery
     */


    public function getTestOne()
    {
        return $this->hasOne(TestOne::className(), ['id' => 'test_one_id']);
    }


    public function getTestTwo()
    {
        return $this->hasOne(TestTwo::className(), ['id' => 'test_two_id']);
    }
}
