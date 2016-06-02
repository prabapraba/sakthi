<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property integer $id
 * @property integer $productid
 * @property integer $quantity
 * @property string $addedon
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productid', 'quantity'], 'required'],
            [['productid', 'quantity'], 'integer'],
            [['addedon'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productid' => 'Productid',
            'quantity' => 'Quantity',
            'addedon' => 'Addedon',
        ];
    }
}
