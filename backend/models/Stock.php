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
            'productid' => 'Product name',
            'quantity' => 'Quantity',
            'addedon' => 'Date available',
        ];
    }
    public function getproduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'productid']);
        //return array('product' => array(self::BELONGS_TO, 'Product', 'productid'));
    }
}
