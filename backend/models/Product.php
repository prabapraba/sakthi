<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $material
 * @property string $specification
 * @property string $code
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'material', 'specification', 'code'], 'required'],
            [['name'], 'string', 'max' => 75],
            [['material'], 'string', 'max' => 50],
            [['specification'], 'string', 'max' => 200],
            [['code'], 'string', 'max' => 25],
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
            'material' => 'Material',
            'specification' => 'Specification',
            'code' => 'Code',
        ];
    }
}
