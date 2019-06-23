<?php

namespace app\models\maxpirali;

use Yii;
use app\models\maxpirali\MenuTrans;

/**
 * This is the model class for table "in_menu".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property integer $template_id
 * @property integer $tree
 * @property integer $status
 * @property integer $user_id
 * @property integer $updated_date
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'status', 'user_id'], 'required'],
            [['template_id', 'tree', 'status', 'user_id', 'updated_date'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'template_id' => 'Template ID',
            'tree' => 'Tree',
            'status' => 'Status',
            'user_id' => 'User ID',
            'updated_date' => 'Updated Date',
        ];
    }
    public static function Menus($tree = false)
    {
        if ($tree) return Menu::find()->where(['tree'=>$tree])->orderBy(['tree'=>SORT_ASC])->all();
        else return Menu::find()->all();
    }
    public function getMenu()
    {
        return $this->hasMany(MenuTrans::className(), ['menu_id' => 'id']);
    }
    public function lang()
    {
        $lang = Yii::$app->language;
        $menu = MenuTrans::find()->where(['menu_id' => $this->id, 'lang' => $lang])->one();
        if (!$menu) {
            return $this->title;
        }else{
            return $menu->title;
        }        
        // echo '<pre>'; var_dump($menu); exit;
    }
    public function template()
    {
        switch ($this->template_id) {
            case 1:
                $template = 'post';
                break;
            
            case 2:
                $template = 'catalog';
                break;
            
            default:
                $template = '';
                break;
        }
        return $template;
    }
}
