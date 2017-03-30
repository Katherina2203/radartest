<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Refs;

/**
 * RefsSearch represents the model behind the search form about `common\models\Refs`.
 */
class RefsSearch extends Refs
{
    public $authorId;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RefId', 'Type', 'Volume', 'Year', 'Owner', 'authorId'], 'integer'],
            [['Authors', 'Title', 'TitleRus', 'PublisherE', 'PublisherR', 'Number', 'Page', 'Abstract', 'AbstractRus', 'Link'], 'safe'],
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
        $query = Refs::find()->with(['authors', 'types'])->joinWith(['refauth'], false);

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
            'RefId' => $this->RefId,
            'Type' => $this->Type,
            'Volume' => $this->Volume,
            'Year' => $this->Year,
            'Owner' => $this->Owner,
            '{{%refauth}}.Author' => $this->authorId,
        ]);

        $query->andFilterWhere(['like', 'Authors', $this->Authors])
            ->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'TitleRus', $this->TitleRus])
            ->andFilterWhere(['like', 'PublisherE', $this->PublisherE])
            ->andFilterWhere(['like', 'PublisherR', $this->PublisherR])
            ->andFilterWhere(['like', 'Number', $this->Number])
            ->andFilterWhere(['like', 'Page', $this->Page])
            ->andFilterWhere(['like', 'Abstract', $this->Abstract])
            ->andFilterWhere(['like', 'AbstractRus', $this->AbstractRus])
            ->andFilterWhere(['like', 'Link', $this->Link]);

        return $dataProvider;
    }
}
