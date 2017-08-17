<?php
namespace region\components;

use Yii;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

class UserIdentity implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        throw new NotSupportedException('"findIdentity" is not yet implemented.');
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        throw new NotSupportedException('"getId" is not yet implemented.');
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        throw new NotSupportedException('"getAuthKey" is not yet implemented.');
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        throw new NotSupportedException('"validateAuthKey" is not yet implemented.');
    }
}
