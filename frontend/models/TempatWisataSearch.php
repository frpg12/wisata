<?php

namespace app\models;

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
            [['id'], 'integer'],
            [['nama_lokasi', 'sekilas_info', 'detail_info', 'alamat_lokasi', 'foto'], 'safe'],
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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama_lokasi', $this->nama_lokasi])
            ->andFilterWhere(['like', 'sekilas_info', $this->sekilas_info])
            ->andFilterWhere(['like', 'detail_info', $this->detail_info])
            ->andFilterWhere(['like', 'alamat_lokasi', $this->alamat_lokasi])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
