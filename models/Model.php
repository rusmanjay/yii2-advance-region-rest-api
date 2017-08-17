<?php

namespace region\models;

/**
 * @inheritdoc
 */
class Model extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->id = (string) $this->id;
            return true;
        }
        return false;
    }
}
