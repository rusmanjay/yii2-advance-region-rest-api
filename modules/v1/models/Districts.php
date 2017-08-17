<?php

namespace region\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%districts}}".
 *
 * @property string $id
 * @property string $regency_id
 * @property string $name
 *
 * @property Regencies $regency
 * @property Villages[] $villages
 */
class Districts extends \region\models\Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%districts}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'regency_id', 'name'], 'required'],
            [['id'], 'string', 'max' => 7],
            [['regency_id'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 255],
            [['regency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regencies::className(), 'targetAttribute' => ['regency_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('region', 'ID'),
            'regency_id' => Yii::t('region', 'Regency ID'),
            'name' => Yii::t('region', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegency()
    {
        return $this->hasOne(Regencies::className(), ['id' => 'regency_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVillages()
    {
        return $this->hasMany(Villages::className(), ['district_id' => 'id']);
    }
}
