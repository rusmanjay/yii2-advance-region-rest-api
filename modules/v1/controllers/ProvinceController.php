<?php
namespace region\modules\v1\controllers;

class ProvinceController extends \yii\rest\ActiveController
{
    public $modelClass = 'region\modules\v1\models\Provinces';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'content',
    ];
}
