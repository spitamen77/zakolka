<?php

namespace app\models\maxpirali;

use Yii;
use app\models\maxpirali\MenuItemTrans;


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
    public function translate($slug)
    {
        $result = MenuItemTrans::find()->where(['item_id'=>$this->id, 'lang'=>Yii::$app->language])->asArray()->one();
        $this->load($result,'');
        echo "<pre>";var_dump($this); die;
        switch ($slug) {
            case 'title':
                $res = ($result)?$result->title:$this->title;
                break;
            case 'short':
                $res = ($result)?$result->short:$this->short;
                break;
            case 'text':
                $res = ($result)?$result->text:$this->text;
                break;
            
            default:
                $res = 'xato yozding';
                break;
        }
        return $res;
    }

    public static function find()
    {
        return parent::find()->where(['<>', 'status', 0]);
    }
}
