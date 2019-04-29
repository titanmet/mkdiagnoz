<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klient".
 *
 * @property int $id
 * @property string $fam
 * @property string $name
 * @property string $otch
 * @property string $data_b
 * @property string $passport
 * @property string $mesto_rab
 * @property string $mest_jit
 * @property string $tel
 *
 * @property Priem[] $priems
 */
class Klient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_b'], 'required'],
            [['data_b'], 'safe'],
            [['fam', 'name', 'otch', 'tel'], 'string', 'max' => 45],
            [['passport', 'mesto_rab', 'mest_jit'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fam' => 'Fam',
            'name' => 'Name',
            'otch' => 'Otch',
            'data_b' => 'Data B',
            'passport' => 'Passport',
            'mesto_rab' => 'Mesto Rab',
            'mest_jit' => 'Mest Jit',
            'tel' => 'Tel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriems()
    {
        return $this->hasMany(Priem::className(), ['klient_id' => 'id']);
    }
}
