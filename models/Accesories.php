<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accesories".
 *
 * @property int $article
 * @property string $name
 * @property float $weigth
 * @property int $count
 * @property int $price
 * @property string $description
 * @property string|null $photo
 */
class Accesories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accesories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'weigth', 'count', 'price', 'description'], 'required'],
            [['weigth'], 'number'],
            [['count', 'price'], 'integer'],
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
            'weigth' => 'Weigth',
            'count' => 'Count',
            'price' => 'Price',
            'description' => 'Description',
            'photo' => 'Photo',
        ];
    }
}
