<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Authors;

/**
 * AuthorsSearch represents the model behind the search form about `common\models\Authors`.
 */
class AuthorsSearch extends Authors
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AuthorId', 'Owner'], 'integer'],
            [['Name', 'FirstName', 'NameR', 'FirstNameR', 'AddressR', 'AddressE', 'URL'], 'safe'],
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
        $query = Authors::find();

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
            'AuthorId' => $this->AuthorId,
            'Owner' => $this->Owner,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'NameR', $this->NameR])
            ->andFilterWhere(['like', 'FirstNameR', $this->FirstNameR])
            ->andFilterWhere(['like', 'AddressR', $this->AddressR])
            ->andFilterWhere(['like', 'AddressE', $this->AddressE])
            ->andFilterWhere(['like', 'URL', $this->URL]);

        return $dataProvider;
    }
}
