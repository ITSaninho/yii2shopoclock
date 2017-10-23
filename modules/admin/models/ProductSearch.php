<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hit', 'new', 'sale', 'count', 'public', 'created_at', 'updated_at', 'user_id', 'category_id'], 'integer'],
            [['title', 'alias', 'price', 'text', 'currency', 'discount'], 'safe'],
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
        $query = Product::find();

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
            'hit' => $this->hit,
            'new' => $this->new,
            'sale' => $this->sale,
            'count' => $this->count,
            'public' => $this->public,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'discount', $this->discount]);

        return $dataProvider;
    }
}
