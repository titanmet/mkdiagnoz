<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "priem".
 *
 * @property int $id
 * @property string $data
 * @property int $klient_id
 * @property int $jaloba_id
 * @property int $pokazatel_jal_id
 * @property int $pokazatel_live_id
 * @property int $pokazatel_zabol_id
 * @property int $pokazatel_osm_id
 * @property int $pokazatel_obsl_id
 *
 * @property Jaloba $jaloba
 * @property PokazatelJal $pokazatelJal
 * @property PokazatelLive $pokazatelLive
 * @property PokazatelObsl $pokazatelObsl
 * @property PokazatelOsm $pokazatelOsm
 * @property PokazatelZabol $pokazatelZabol
 * @property Klient $klient
 */
class Priem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'priem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'klient_id', 'jaloba_id', 'pokazatel_jal_id', 'pokazatel_live_id', 'pokazatel_zabol_id', 'pokazatel_osm_id', 'pokazatel_obsl_id'], 'required'],
            [['data'], 'safe'],
            [['klient_id', 'jaloba_id', 'pokazatel_jal_id', 'pokazatel_live_id', 'pokazatel_zabol_id', 'pokazatel_osm_id', 'pokazatel_obsl_id'], 'integer'],
            [['jaloba_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jaloba::className(), 'targetAttribute' => ['jaloba_id' => 'id']],
            [['pokazatel_jal_id'], 'exist', 'skipOnError' => true, 'targetClass' => PokazatelJal::className(), 'targetAttribute' => ['pokazatel_jal_id' => 'id']],
            [['pokazatel_live_id'], 'exist', 'skipOnError' => true, 'targetClass' => PokazatelLive::className(), 'targetAttribute' => ['pokazatel_live_id' => 'id']],
            [['pokazatel_obsl_id'], 'exist', 'skipOnError' => true, 'targetClass' => PokazatelObsl::className(), 'targetAttribute' => ['pokazatel_obsl_id' => 'id']],
            [['pokazatel_osm_id'], 'exist', 'skipOnError' => true, 'targetClass' => PokazatelOsm::className(), 'targetAttribute' => ['pokazatel_osm_id' => 'id']],
            [['pokazatel_zabol_id'], 'exist', 'skipOnError' => true, 'targetClass' => PokazatelZabol::className(), 'targetAttribute' => ['pokazatel_zabol_id' => 'id']],
            [['klient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Klient::className(), 'targetAttribute' => ['klient_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'klient_id' => 'Klient ID',
            'jaloba_id' => 'Jaloba ID',
            'pokazatel_jal_id' => 'Pokazatel Jal ID',
            'pokazatel_live_id' => 'Pokazatel Live ID',
            'pokazatel_zabol_id' => 'Pokazatel Zabol ID',
            'pokazatel_osm_id' => 'Pokazatel Osm ID',
            'pokazatel_obsl_id' => 'Pokazatel Obsl ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJaloba()
    {
        return $this->hasOne(Jaloba::className(), ['id' => 'jaloba_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPokazatelJal()
    {
        return $this->hasOne(PokazatelJal::className(), ['id' => 'pokazatel_jal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPokazatelLive()
    {
        return $this->hasOne(PokazatelLive::className(), ['id' => 'pokazatel_live_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPokazatelObsl()
    {
        return $this->hasOne(PokazatelObsl::className(), ['id' => 'pokazatel_obsl_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPokazatelOsm()
    {
        return $this->hasOne(PokazatelOsm::className(), ['id' => 'pokazatel_osm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPokazatelZabol()
    {
        return $this->hasOne(PokazatelZabol::className(), ['id' => 'pokazatel_zabol_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKlient()
    {
        return $this->hasOne(Klient::className(), ['id' => 'klient_id']);
    }
}
