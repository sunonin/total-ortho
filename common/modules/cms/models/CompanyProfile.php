<?php

namespace common\modules\cms\models;

use Yii;

/**
 * This is the model class for table "company_profile".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $address
 * @property string $telephone
 * @property string $fax_no
 * @property string $email
 * @property string $tin
 * @property string $signatory
 * @property int $is_single
 */
class CompanyProfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'telephone', 'fax_no', 'email', 'tin', 'signatory'], 'required'],
            [['is_single'], 'integer'],
            [['name', 'description', 'address', 'email', 'signatory'], 'string', 'max' => 255],
            [['telephone', 'fax_no', 'tin'], 'string', 'max' => 20],
            [['is_single'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Company Name',
            'description' => 'Description',
            'address' => 'Address',
            'telephone' => 'Telephone No.',
            'fax_no' => 'Fax No.',
            'email' => 'Email Address',
            'tin' => 'VAT Registered TIN',
            'signatory' => 'Signatory',
            'is_single' => 'Is Single',
        ];
    }

    public static function myCompanyProfile()
    {
        return self::find()->where(['is_single' => true])->one();
    }

}
