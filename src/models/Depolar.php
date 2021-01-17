<?php

namespace yenereminelibol\pharmacymodule\models;

use Yii;

/**
 * This is the model class for table "depolar".
 *
 * @property string $DepoAd
 * @property string $DepoSehir
 * @property int $DepoIlacMiktar
 * @property int $DepoCalisanSayisi
 *
 * @property Deposecme[] $deposecmes
 */
class Depolar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depolar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DepoAd', 'DepoSehir', 'DepoIlacMiktar', 'DepoCalisanSayisi'], 'required'],
            [['DepoIlacMiktar', 'DepoCalisanSayisi'], 'integer'],
            [['DepoAd'], 'string', 'max' => 50],
            [['DepoSehir'], 'string', 'max' => 255],
            [['DepoAd'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DepoAd' => 'Depo Ad',
            'DepoSehir' => 'Depo Sehir',
            'DepoIlacMiktar' => 'Depo Ilac Miktar',
            'DepoCalisanSayisi' => 'Depo Calisan Sayisi',
        ];
    }

    /**
     * Gets query for [[Deposecmes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposecmes()
    {
        return $this->hasMany(Deposecme::className(), ['DepoAd' => 'DepoAd']);
    }
}
