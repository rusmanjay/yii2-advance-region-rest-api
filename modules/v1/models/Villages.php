<?php

namespace region\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%villages}}".
 *
 * @property string $id
 * @property string $district_id
 * @property string $name
 *
 * @property Districts $district
 */
class Villages extends \region\models\Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%villages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'district_id', 'name'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['district_id'], 'string', 'max' => 7],
            [['name'], 'string', 'max' => 255],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('region', 'ID'),
            'district_id' => Yii::t('region', 'District ID'),
            'name' => Yii::t('region', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(Districts::className(), ['id' => 'district_id']);
    }
}
