<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Post".
 *
 * @property int $id
 * @property string $title
 * @property string|null $shot_description
 * @property string|null $description
 * @property int|null $is_active
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $update_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['is_active', 'created_at', 'created_by', 'update_at'], 'integer'],
            [['title'], 'string', 'max' => 250],
            [['shot_description'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'shot_description' => 'Shot Description',
            'description' => 'Description',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'update_at' => 'Update At',
        ];
    }
}
