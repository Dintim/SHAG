<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function TableName(){
    	return 'country';
    }
}