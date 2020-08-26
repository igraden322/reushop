<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clothes".
 *
 * @property int $article
 * @property string $name
 * @property string $size
 * @property int $price
 * @property int $count
 * @property string|null $photo
 * @property string $description
 */
class Clothes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clothes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'size', 'price', 'count', 'description'], 'required'],
            [['price', 'count'], 'integer'],
            [['name', 'size'], 'string', 'max' => 50],
            [['photo'], 'string', 'max' => 1000],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'article' => 'Article',
            'name' => 'Name',
            'size' => 'Size',
            'price' => 'Price',
            'count' => 'Count',
            'photo' => 'Photo',
            'description' => 'Description',
        ];
    }
}
