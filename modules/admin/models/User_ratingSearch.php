<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\User_rating;

/**
 * UserRatingSearch represents the model behind the search form about `app\modules\admin\models\UserRating`.
 */
class User_ratingSearch extends User_rating
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'public', 'created_at', 'updated_at', 'user_id', 'voted_id'], 'integer'],
            [['rank'], 'safe'],
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
        $query = User_rating::find();

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
            'public' => $this->public,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'voted_id' => $this->voted_id,
        ]);

        $query->andFilterWhere(['like', 'rank', $this->rank]);

        return $dataProvider;
    }
}
