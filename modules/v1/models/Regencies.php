<?php

namespace region\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%regencies}}".
 *
 * @property string $id
 * @property string $province_id
 * @property string $name
 *
 * @property Districts[] $districts
 * @property Provinces $province
 */
class Regencies extends \region\models\Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%regencies}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'province_id', 'name'], 'required'],
            [['id'], 'string', 'max' => 4],
            [['province_id'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Provinces::className(), 'targetAttribute' => ['province_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('region', 'ID'),
            'province_id' => Yii::t('region', 'Province ID'),
            'name' => Yii::t('region', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(Districts::className(), ['regency_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Provinces::className(), ['id' => 'province_id']);
    }
}
