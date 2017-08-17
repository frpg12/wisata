<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Warung;

/**
 * WarungSearch represents the model behind the search form about `app\models\Warung`.
 */
class WarungSearch extends Warung
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_warung', 'id_wisata'], 'integer'],
            [['nama_warung', 'informasi_warung', 'foto_warung', 'lokasi_stand', 'cp_warung', 'rating_warung'], 'safe'],
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
        $query = Warung::find();

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
            'id_warung' => $this->id_warung,
            'id_wisata' => $this->id_wisata,
        ]);

        $query->andFilterWhere(['like', 'nama_warung', $this->nama_warung])
            ->andFilterWhere(['like', 'informasi_warung', $this->informasi_warung])
            ->andFilterWhere(['like', 'foto_warung', $this->foto_warung])
            ->andFilterWhere(['like', 'lokasi_stand', $this->lokasi_stand])
            ->andFilterWhere(['like', 'cp_warung', $this->cp_warung])
            ->andFilterWhere(['like', 'rating_warung', $this->rating_warung]);

        return $dataProvider;
    }
}
