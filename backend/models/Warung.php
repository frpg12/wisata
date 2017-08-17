<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "warung".
 *
 * @property integer $id_warung
 * @property string $nama_warung
 * @property string $informasi_warung
 * @property string $foto_warung
 * @property string $lokasi_stand
 * @property string $cp_warung
 * @property string $rating_warung
 * @property integer $id_wisata
 *
 * @property DaftarKuliner[] $daftarKuliners
 * @property TempatWisata $idWisata
 */
class Warung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_warung', 'informasi_warung', 'foto_warung', 'lokasi_stand', 'cp_warung', 'rating_warung', 'id_wisata'], 'required'],
            [['informasi_warung', 'rating_warung'], 'string'],
            [['id_wisata'], 'integer'],
            [['nama_warung'], 'string', 'max' => 150],
            [['foto_warung'], 'string', 'max' => 200],
            [['lokasi_stand'], 'string', 'max' => 250],
            [['cp_warung'], 'string', 'max' => 40],
            [['id_wisata'], 'exist', 'skipOnError' => true, 'targetClass' => TempatWisata::className(), 'targetAttribute' => ['id_wisata' => 'id_wisata']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_warung' => 'Id Warung',
            'nama_warung' => 'Nama Warung',
            'informasi_warung' => 'Informasi Warung',
            'foto_warung' => 'Foto Warung',
            'lokasi_stand' => 'Lokasi Stand',
            'cp_warung' => 'Cp Warung',
            'rating_warung' => 'Rating Warung',
            'id_wisata' => 'Id Wisata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDaftarKuliners()
    {
        return $this->hasMany(DaftarKuliner::className(), ['id_warung' => 'id_warung']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdWisata()
    {
        return $this->hasOne(TempatWisata::className(), ['id_wisata' => 'id_wisata']);
    }
}
