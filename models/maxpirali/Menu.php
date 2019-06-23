<?php

namespace app\models\maxpirali;

use Yii;

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
}
