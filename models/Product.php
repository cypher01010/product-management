<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $image
 */
class Product extends \yii\db\ActiveRecord
{
	public $upload;
	
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
            [['price'], 'number'],
            [['upload'], 'file', 'extensions' => 'png, jpg, gif, jpeg'],
            [['name'], 'string', 'max' => 120],
            [['description'], 'string', 'max' => 240],
            [['name', 'description', 'price','upload'],'required'],
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
            'description' => 'Description',
            'price' => 'Price',
            'image' => 'Image',
        ];
    }
}
