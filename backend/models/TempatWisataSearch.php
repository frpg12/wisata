<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TempatWisata;

/**
 * TempatWisataSearch represents the model behind the search form about `app\models\TempatWisata`.
 */
class TempatWisataSearch extends TempatWisata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_wisata', 'Tiket'], 'integer'],
            [['nama_wisata', 'info_wisata', 'foto_wisata', 'alamat_wisata', 'cp_wisata', 'Rating', 'tgl_update'], 'safe'],
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
        $query = TempatWisata::find();

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
            'id_wisata' => $this->id_wisata,
            'Tiket' => $this->Tiket,
            'tgl_update' => $this->tgl_update,
        ]);

        $query->andFilterWhere(['like', 'nama_wisata', $this->nama_wisata])
            ->andFilterWhere(['like', 'info_wisata', $this->info_wisata])
            ->andFilterWhere(['like', 'foto_wisata', $this->foto_wisata])
            ->andFilterWhere(['like', 'alamat_wisata', $this->alamat_wisata])
            ->andFilterWhere(['like', 'cp_wisata', $this->cp_wisata])
            ->andFilterWhere(['like', 'Rating', $this->Rating]);

        return $dataProvider;
    }
}
