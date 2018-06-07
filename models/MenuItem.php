<?php

namespace maxcom\content\models;

use Yii;

class MenuItem extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'shop_menu_item';
    }

    public function getRealUrl()
    {
        return $this->url == '/' ? '/' : '/' . $this->url;
    }
}
