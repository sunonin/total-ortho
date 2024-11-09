<?php

namespace common\modules\cms\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property int $id
 * @property int $account_id
 * @property string $username
 * @property string $fullname
 * @property int $position_id
 * @property int $level
 * @property int $marital_status_id
 * @property string $religion
 * @property string $address
 * @property string $email
 * @property string $contact_no
 * @property int $status
 *
 * @property User $account
 * @property MaritalStatus $maritalStatus
 * @property Position $position
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_id', 'username', 'fullname', 'position_id', 'level', 'marital_status_id', 'religion', 'address', 'email', 'contact_no'], 'required'],
            [['account_id', 'position_id', 'level', 'marital_status_id', 'status'], 'integer'],
            [['username', 'fullname', 'address', 'contact_no'], 'string', 'max' => 255],
            [['religion', 'email'], 'string', 'max' => 20],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['account_id' => 'id']],
            [['marital_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => MaritalStatus::class, 'targetAttribute' => ['marital_status_id' => 'id']],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::class, 'targetAttribute' => ['position_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => 'Account ID',
            'username' => 'Username',
            'fullname' => 'Fullname',
            'position_id' => 'Position ID',
            'level' => 'Level',
            'marital_status_id' => 'Marital Status ID',
            'religion' => 'Religion',
            'address' => 'Address',
            'email' => 'Email',
            'contact_no' => 'Contact No',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Account]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(User::class, ['id' => 'account_id']);
    }

    /**
     * Gets query for [[MaritalStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaritalStatus()
    {
        return $this->hasOne(MaritalStatus::class, ['id' => 'marital_status_id']);
    }

    /**
     * Gets query for [[Position]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::class, ['id' => 'position_id']);
    }
}
