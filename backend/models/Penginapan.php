<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penginapan".
 *
 * @property integer $id_penginapan
 * @property string $nama_penginapan
 * @property string $info_penginapan
 * @property string $foto_penginapan
 * @property string $alamat_penginapan
 * @property string $cp_penginapan
 * @property string $rating_penginapan
 * @property integer $id_wisata
 *
 * @property TempatWisata $idWisata
 */
class Penginapan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penginapan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_penginapan', 'info_penginapan', 'foto_penginapan', 'alamat_penginapan', 'cp_penginapan', 'rating_penginapan', 'id_wisata'], 'required'],
            [['info_penginapan', 'rating_penginapan'], 'string'],
            [['id_wisata'], 'integer'],
            [['nama_penginapan'], 'string', 'max' => 150],
            [['foto_penginapan'], 'string', 'max' => 200],
            [['alamat_penginapan'], 'string', 'max' => 250],
            [['cp_penginapan'], 'string', 'max' => 40],
            [['id_wisata'], 'exist', 'skipOnError' => true, 'targetClass' => TempatWisata::className(), 'targetAttribute' => ['id_wisata' => 'id_wisata']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_penginapan' => 'Id Penginapan',
            'nama_penginapan' => 'Nama Penginapan',
            'info_penginapan' => 'Info Penginapan',
            'foto_penginapan' => 'Foto Penginapan',
            'alamat_penginapan' => 'Alamat Penginapan',
            'cp_penginapan' => 'Cp Penginapan',
            'rating_penginapan' => 'Rating Penginapan',
            'id_wisata' => 'Id Wisata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdWisata()
    {
        return $this->hasOne(TempatWisata::className(), ['id_wisata' => 'id_wisata']);
    }
}
