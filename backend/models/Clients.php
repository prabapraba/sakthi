<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $contact_person
 * @property string $telephone
 * @property string $mobile
 * @property string $email
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'contact_person', 'telephone', 'mobile', 'email'], 'required'],
            [['address'], 'string'],
            [['name'], 'string', 'max' => 150],
            [['contact_person'], 'string', 'max' => 100],
            [['telephone', 'mobile'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'contact_person' => 'Contact Person',
            'telephone' => 'Telephone',
            'mobile' => 'Mobile',
            'email' => 'Email',
        ];
    }
}
