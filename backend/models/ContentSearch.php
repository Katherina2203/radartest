<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Content;

/**
 * ContentSearch represents the model behind the search form about `common\models\Content`.
 */
class ContentSearch extends Content
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section_id', 'category_id', 'visible', 'views', 'Editor'], 'integer'],
            [['title', 'title_ru', 'short_discr', 'short_discr_ru', 'full_text', 'full_text_ru', 'RelRef', 'image', 'Author', 'AddDate', 'EditDate'], 'safe'],
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
        $query = Content::find();

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
            'section_id' => $this->section_id,
            'category_id' => $this->category_id,
            'visible' => $this->visible,
            'views' => $this->views,
            'AddDate' => $this->AddDate,
            'Editor' => $this->Editor,
            'EditDate' => $this->EditDate,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'short_discr', $this->short_discr])
            ->andFilterWhere(['like', 'short_discr_ru', $this->short_discr_ru])
            ->andFilterWhere(['like', 'full_text', $this->full_text])
            ->andFilterWhere(['like', 'full_text_ru', $this->full_text_ru])
            ->andFilterWhere(['like', 'RelRef', $this->RelRef])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'Author', $this->Author]);

        return $dataProvider;
    }
}
