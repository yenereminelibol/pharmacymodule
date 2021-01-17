<?php

namespace yenereminelibol\pharmacymodule\models;

use Yii;

/**
 * This is the model class for table "deposecme".
 *
 * @property int $Deposecmeid
 * @property string $DepoAd
 * @property string $EczaneAd
 *
 * @property Depolar $depoAd
 * @property Eczaneler $eczaneAd
 */
class Deposecme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deposecme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DepoAd', 'EczaneAd'], 'required'],
            [['DepoAd', 'EczaneAd'], 'string', 'max' => 50],
            [['DepoAd'], 'exist', 'skipOnError' => true, 'targetClass' => Depolar::className(), 'targetAttribute' => ['DepoAd' => 'DepoAd']],
            [['EczaneAd'], 'exist', 'skipOnError' => true, 'targetClass' => Eczaneler::className(), 'targetAttribute' => ['EczaneAd' => 'EczaneAd']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Deposecmeid' => 'Deposecmeid',
            'DepoAd' => 'Depo Ad',
            'EczaneAd' => 'Eczane Ad',
        ];
    }

    /**
     * Gets query for [[DepoAd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepoAd()
    {
        return $this->hasOne(Depolar::className(), ['DepoAd' => 'DepoAd']);
    }

    /**
     * Gets query for [[EczaneAd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEczaneAd()
    {
        return $this->hasOne(Eczaneler::className(), ['EczaneAd' => 'EczaneAd']);
    }
}
