<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftar_kuliner".
 *
 * @property integer $id_kuliner
 * @property string $nama_kuliner
 * @property integer $harga
 * @property integer $id_warung
 *
 * @property Warung $idWarung
 */
class DaftarKuliner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daftar_kuliner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kuliner', 'harga', 'id_warung'], 'required'],
            [['harga', 'id_warung'], 'integer'],
            [['nama_kuliner'], 'string', 'max' => 150],
            [['id_warung'], 'exist', 'skipOnError' => true, 'targetClass' => Warung::className(), 'targetAttribute' => ['id_warung' => 'id_warung']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kuliner' => 'Id Kuliner',
            'nama_kuliner' => 'Nama Kuliner',
            'harga' => 'Harga',
            'id_warung' => 'Id Warung',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdWarung()
    {
        return $this->hasOne(Warung::className(), ['id_warung' => 'id_warung']);
    }
}
