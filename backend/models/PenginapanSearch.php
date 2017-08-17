<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penginapan;

/**
 * PenginapanSearch represents the model behind the search form about `app\models\Penginapan`.
 */
class PenginapanSearch extends Penginapan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penginapan', 'id_wisata'], 'integer'],
            [['nama_penginapan', 'info_penginapan', 'foto_penginapan', 'alamat_penginapan', 'cp_penginapan', 'rating_penginapan'], 'safe'],
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
        $query = Penginapan::find();

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
            'id_penginapan' => $this->id_penginapan,
            'id_wisata' => $this->id_wisata,
        ]);

        $query->andFilterWhere(['like', 'nama_penginapan', $this->nama_penginapan])
            ->andFilterWhere(['like', 'info_penginapan', $this->info_penginapan])
            ->andFilterWhere(['like', 'foto_penginapan', $this->foto_penginapan])
            ->andFilterWhere(['like', 'alamat_penginapan', $this->alamat_penginapan])
            ->andFilterWhere(['like', 'cp_penginapan', $this->cp_penginapan])
            ->andFilterWhere(['like', 'rating_penginapan', $this->rating_penginapan]);

        return $dataProvider;
    }
}
