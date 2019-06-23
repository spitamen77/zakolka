<?php

namespace app\models\dilshod;

use Yii;
use app\models\Lang;

/**
 * This is the model class for table "in_photo".
 *
 * @property int $id
 * @property string $slug
 * @property string $image
 * @property int $status
 */
class Photo extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE=1;
    const STATUS_INACTIVE=0;
    const STATUS_DELETE=9;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'in_photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['slug'], 'required'],
            [['status'], 'integer'],
            [['slug'], 'string', 'max' => 255],
            [['image'],'file', 'maxFiles' => 10,'extensions' => 'png, jpg, gif']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => Lang::t('Slug'),
            'image' => Lang::t("Image"),
            'status' => 'Status',
        ];
    }

    public function getStatus()
    {
        return [
        '1' => Lang::t('Aktiv'),
        '0' => Lang::t('Nofaol'),
    ];
    }
}
