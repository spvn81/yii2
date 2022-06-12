<?php

namespace backend\Module\settings\models;

use Yii;

/**
 * This is the model class for table "test_one".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $contact
 *
 * @property TestTwo[] $testTwos
 */
class TestOne extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_one';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'contact'], 'required'],
            [['name', 'email'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'contact' => 'Contact',
        ];
    }

    /**
     * Gets query for [[TestTwos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestTwos()
    {
        return $this->hasMany(TestTwo::className(), ['test_one_id' => 'id']);
    }
}
