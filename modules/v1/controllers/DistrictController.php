<?php
namespace region\modules\v1\controllers;

class DistrictController extends \yii\rest\ActiveController
{
    public $modelClass = 'region\modules\v1\models\Districts';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'content',
    ];
}
