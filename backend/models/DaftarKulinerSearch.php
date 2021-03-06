<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DaftarKuliner;

/**
 * DaftarKulinerSearch represents the model behind the search form about `app\models\DaftarKuliner`.
 */
class DaftarKulinerSearch extends DaftarKuliner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kuliner', 'harga', 'id_warung'], 'integer'],
            [['nama_kuliner'], 'safe'],
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
        $query = DaftarKuliner::find();

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
            'id_kuliner' => $this->id_kuliner,
            'harga' => $this->harga,
            'id_warung' => $this->id_warung,
        ]);

        $query->andFilterWhere(['like', 'nama_kuliner', $this->nama_kuliner]);

        return $dataProvider;
    }
}
