<?php

namespace yenereminelibol\pharmacymodule\models;

use Yii;

/**
 * This is the model class for table "eczaneler".
 *
 * @property string $EczaneAd
 * @property string $EczaneSehir
 * @property int $EczaneCalisanSayisi
 *
 * @property Deposecme[] $deposecmes
 */
class Eczaneler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eczaneler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EczaneAd', 'EczaneSehir', 'EczaneCalisanSayisi'], 'required'],
            [['EczaneCalisanSayisi'], 'integer'],
            [['EczaneAd'], 'string', 'max' => 100],
            [['EczaneSehir'], 'string', 'max' => 255],
            [['EczaneAd'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EczaneAd' => 'Eczane Ad',
            'EczaneSehir' => 'Eczane Sehir',
            'EczaneCalisanSayisi' => 'Eczane Calisan Sayisi',
        ];
    }

    /**
     * Gets query for [[Deposecmes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposecmes()
    {
        return $this->hasMany(Deposecme::className(), ['EczaneAd' => 'EczaneAd']);
    }
}
