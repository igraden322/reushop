<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clothes;

/**
 * ClothesSearch represents the model behind the search form of `app\models\Clothes`.
 */
class ClothesSearch extends Clothes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article', 'price', 'count'], 'integer'],
            [['name', 'size', 'photo', 'description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Clothes::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'article' => $this->article,
            'price' => $this->price,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
