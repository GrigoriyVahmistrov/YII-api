<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Moneylog;

/**
 * MoneylogSearch represents the model behind the search form about `app\models\Moneylog`.
 */
class MoneylogSearch extends Moneylog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'userid', 'money', 'isdeleted'], 'integer'],
            [['type', 'description', 'date'], 'safe'],
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
        $query = Moneylog::find();

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
            'userid' => $this->userid,
            'money' => $this->money,
            'isdeleted' => $this->isdeleted,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
