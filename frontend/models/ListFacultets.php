<?php

namespace frontend\models;

use Yii;

class ListFacultets extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%facultets}}';
    }

    public function rules()
    {
        return [
            [['name'], 'string'],
            [['id_dekan'], 'integer'],
        ];
    }


}