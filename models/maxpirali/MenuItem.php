<?php

namespace app\models\maxpirali;

use Yii;

/**
 * This is the model class for table "in_menu_item".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $title
 * @property string $photo
 * @property string $short
 * @property string $text
 * @property string $slug
 * @property integer $views
 * @property integer $status
 * @property integer $price
 * @property integer $sale
 * @property integer $user_id
 * @property integer $created_date
 * @property integer $updated_date
 */
class MenuItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in_menu_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'title', 'text', 'slug', 'views', 'status', 'user_id', 'created_date'], 'required'],
            [['menu_id', 'views', 'status', 'price', 'sale', 'user_id', 'created_date', 'updated_date'], 'integer'],
            [['text'], 'string'],
            [['title', 'photo', 'slug'], 'string', 'max' => 128],
            [['short'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'title' => 'Title',
            'photo' => 'Photo',
            'short' => 'Short',
            'text' => 'Text',
            'slug' => 'Slug',
            'views' => 'Views',
            'status' => 'Status',
            'price' => 'Price',
            'sale' => 'Sale',
            'user_id' => 'User ID',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }
}
