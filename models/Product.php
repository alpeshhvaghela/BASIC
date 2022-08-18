<?php

namespace app\models;

use Faker\Core\Number;
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
 * @property string $color_variant
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
            [['name', 'category_id', 'description', 'price', 'status', 'color_variant'], 'required'],
            [['category_id'], 'integer'],
            [['price'],'number'],
            [['name', 'description', 'price', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'name' => 'Product Name',
            'category_id' => 'Product Category',
            'description' => 'Description',
            'price' => 'Price',
            'status' => 'Status',
            'color_variant' => 'Color Variant',
        ];
    }

    public function beforeSave($insert)
    {
        $this->color_variant = implode(",", $this->color_variant);
        if (parent::beforeSave($insert)) {
            return true;
        } else {
            return false;
        }
    }
}
