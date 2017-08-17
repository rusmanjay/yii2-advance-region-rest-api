<?php
namespace region\modules\v1\controllers;

class RegencyController extends \yii\rest\ActiveController
{
    public $modelClass = 'region\modules\v1\models\Regencies';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'content',
    ];
}
