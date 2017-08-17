<?php

namespace region\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%provinces}}".
 *
 * @property string $id
 * @property string $name
 *
 * @property Regencies[] $regencies
 */
class Provinces extends \region\models\Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%provinces}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('region', 'ID'),
            'name' => Yii::t('region', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegencies()
    {
        return $this->hasMany(Regencies::className(), ['province_id' => 'id']);
    }
}
