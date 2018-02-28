<?php

namespace frontend\models;

use Yii;
use common\models\Blog;
/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $create_time
 */
class BlogForm extends Blog
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['create_time'], 'safe'],
            [['title'], 'string', 'max' => 100],
            ['title', 'required', 'message' => '请填写标题'],
            ['content', 'required', 'message' => '请填写内容'],
            ['create_time', 'required', 'message' => '请填写时间'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'create_time' => '创建时间',
        ];
    }
}
