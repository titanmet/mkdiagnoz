<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pokazatel_live".
 *
 * @property int $id
 * @property string $name
 *
 * @property Priem[] $priems
 */
class PokazatelLive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pokazatel_live';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriems()
    {
        return $this->hasMany(Priem::className(), ['pokazatel_live_id' => 'id']);
    }
}
