<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tempat_wisata".
 *
 * @property integer $id_wisata
 * @property string $nama_wisata
 * @property string $info_wisata
 * @property string $foto_wisata
 * @property string $alamat_wisata
 * @property string $cp_wisata
 * @property integer $Tiket
 * @property string $Rating
 * @property string $tgl_update
 *
 * @property Penginapan[] $penginapans
 * @property Warung[] $warungs
 */
class TempatWisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tempat_wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_wisata', 'info_wisata', 'foto_wisata', 'alamat_wisata', 'cp_wisata', 'Tiket', 'Rating', 'tgl_update'], 'required'],
            [['info_wisata', 'Rating'], 'string'],
            [['Tiket'], 'integer'],
            [['tgl_update'], 'safe'],
            [['nama_wisata'], 'string', 'max' => 150],
            [['foto_wisata'], 'string', 'max' => 200],
            [['alamat_wisata'], 'string', 'max' => 250],
            [['cp_wisata'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_wisata' => 'Id Wisata',
            'nama_wisata' => 'Nama Wisata',
            'info_wisata' => 'Info Wisata',
            'foto_wisata' => 'Foto Wisata',
            'alamat_wisata' => 'Alamat Wisata',
            'cp_wisata' => 'Cp Wisata',
            'Tiket' => 'Tiket',
            'Rating' => 'Rating',
            'tgl_update' => 'Tgl Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenginapans()
    {
        return $this->hasMany(Penginapan::className(), ['id_wisata' => 'id_wisata']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarungs()
    {
        return $this->hasMany(Warung::className(), ['id_wisata' => 'id_wisata']);
    }
}
