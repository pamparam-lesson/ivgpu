<?php

namespace frontend\models;

use Yii;

class ListGroup extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%groups}}';
    }

    public function rules()
    {
        return [
            [['name'], 'string'],
            [['id_kafedra', 'number', 'children'], 'integer'],
        ];
    }
        
}