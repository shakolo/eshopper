<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 13.12.2017
 * Time: 11:46
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    public static function tableName() {
        return 'product';
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}