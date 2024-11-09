<?php

namespace common\modules\cms\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\cms\models\UserInfo;

/**
 * UserInfoSearch represents the model behind the search form of `common\modules\cms\models\UserInfo`.
 */
class UserInfoSearch extends UserInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'account_id', 'position_id', 'level', 'marital_status_id', 'status'], 'integer'],
            [['username', 'fullname', 'religion', 'address', 'email', 'contact_no'], 'safe'],
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
        $query = UserInfo::find();

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
            'id' => $this->id,
            'account_id' => $this->account_id,
            'position_id' => $this->position_id,
            'level' => $this->level,
            'marital_status_id' => $this->marital_status_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'contact_no', $this->contact_no]);

        return $dataProvider;
    }
}
