<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $title
 * @property int $inn
 * @property string $general_director
 * @property string $address
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inn'], 'integer'],
            [['title', 'general_director', 'address'], 'string', 'max' => 255],
            [['inn', 'title', 'general_director', 'address'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'inn' => 'ИНН',
            'general_director' => 'Генеральный директор',
            'address' => 'Адрес',
        ];
    }
}
