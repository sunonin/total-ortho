<?php

namespace common\modules\cms\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property int $id
 * @property string $name
 *
 * @property UserInfo[] $userInfos
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[UserInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserInfos()
    {
        return $this->hasMany(UserInfo::class, ['position_id' => 'id']);
    }
}
