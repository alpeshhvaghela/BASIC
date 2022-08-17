<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string $description
 * @property string $price
 * @property string $status
 * @property string $color variant
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'description', 'price', 'status', 'color variant'], 'required'],
            [['category_id'], 'integer'],
            [['name', 'description', 'price', 'status', 'color variant'], 'string', 'max' => 255],
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
            'category_id' => 'Category ID',
            'description' => 'Description',
            'price' => 'Price',
            'status' => 'Status',
            'color variant' => 'Color Variant',
        ];
    }
}
