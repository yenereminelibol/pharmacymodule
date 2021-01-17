<?php

namespace yenereminelibol\pharmacymodule\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yenereminelibol\pharmacymodule\models\Depolar;

/**
 * DepolarSearch represents the model behind the search form of `yenereminelibol\pharmacymodule\models\Depolar`.
 */
class DepolarSearch extends Depolar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DepoAd', 'DepoSehir'], 'safe'],
            [['DepoIlacMiktar', 'DepoCalisanSayisi'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Depolar::find();

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
            'DepoIlacMiktar' => $this->DepoIlacMiktar,
            'DepoCalisanSayisi' => $this->DepoCalisanSayisi,
        ]);

        $query->andFilterWhere(['like', 'DepoAd', $this->DepoAd])
            ->andFilterWhere(['like', 'DepoSehir', $this->DepoSehir]);

        return $dataProvider;
    }
}
