<?php
namespace region\modules\v1\controllers;

class VillageController extends \yii\rest\ActiveController
{
    public $modelClass = 'region\modules\v1\models\Villages';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'content',
    ];
}
