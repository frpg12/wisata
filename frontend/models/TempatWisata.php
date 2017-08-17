<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tempat_wisata".
 *
 * @property integer $id
 * @property string $nama_lokasi
 * @property string $sekilas_info
 * @property string $detail_info
 * @property string $alamat_lokasi
 * @property string $foto
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
            [['nama_lokasi', 'sekilas_info', 'detail_info', 'alamat_lokasi', 'foto'], 'required'],
            [['nama_lokasi'], 'string', 'max' => 50],
            [['sekilas_info', 'alamat_lokasi', 'foto'], 'string', 'max' => 100],
            [['detail_info'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_lokasi' => 'Nama Lokasi',
            'sekilas_info' => 'Sekilas Info',
            'detail_info' => 'Detail Info',
            'alamat_lokasi' => 'Alamat Lokasi',
            'foto' => 'Foto',
        ];
    }
}
