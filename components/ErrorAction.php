<?php
namespace region\components;

class ErrorAction extends \yii\web\ErrorAction
{
    public function run()
    {
        return $this->getViewRenderParams();
    }
}
