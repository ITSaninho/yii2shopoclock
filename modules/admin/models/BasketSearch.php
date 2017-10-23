<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Basket;

/**
 * BasketSearch represents the model behind the search form about `app\modules\admin\models\Basket`.
 */
class BasketSearch extends Basket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'count', 'status', 'public', 'created_at', 'updated_at', 'user_id', 'product_id'], 'integer'],
            [['length', 'height', 'width', 'size_integer', 'size_string', 'weight', 'color', 'material'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Basket::find();

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
            'id' => $this->id,
            'count' => $this->count,
            'status' => $this->status,
            'public' => $this->public,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
        ]);

        $query->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'size_integer', $this->size_integer])
            ->andFilterWhere(['like', 'size_string', $this->size_string])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'material', $this->material]);

        return $dataProvider;
    }
}
