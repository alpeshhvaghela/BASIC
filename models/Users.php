<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property int $gender
 * @property string $email
 * @property int|null $phone
 * @property string|null $other_information
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age', 'gender', 'email', 'phone'], 'required'],
            [['gender'], 'integer'],
            [['age'], 'integer'],
            [['phone'], 'integer'],
            [['phone'], 'string', 'length' => 10],
            [['name'], 'string', 'max' => 30],
            [['email', 'other_information'], 'string', 'max' => 255],
            [['email'], 'unique'],
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
            'age' => 'Age',
            'gender' => 'Gender',
            'email' => 'Email',
            'phone' => 'Phone',
            'other_information' => 'Other Information',
        ];
    }
}
