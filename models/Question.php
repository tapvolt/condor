<?php

namespace app\models;

use app\models\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "question".
 *
 * @property integer $id
 * @property integer $variable
 * @property string $text
 * @property integer $input
 * @property string $created_at
 * @property string $updated_at
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['variable', 'input'], 'integer', 'max' => 10, 'min' => 7],
            [['text', 'input'], 'required'],
            [['text'], 'string', 'max' => 511],
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'variable' => 'Variable',
            'text' => 'Text',
            'input' => 'Input',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return QuestionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionQuery(get_called_class());
    }
}
