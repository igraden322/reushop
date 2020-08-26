<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "souvenirs".
 *
 * @property int $article
 * @property string $name
 * @property int $count
 * @property float $weigth
 * @property int $price
 * @property string $description
 * @property string $photo
 */
class Souvenirs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'souvenirs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'count', 'weigth', 'price', 'description', 'photo'], 'required'],
            [['count', 'price'], 'integer'],
            [['weigth'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['photo'], 'string', 'max' => 500],
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
            'count' => 'Count',
            'weigth' => 'Weigth',
            'price' => 'Price',
            'description' => 'Description',
            'photo' => 'Photo',
        ];
    }
}
