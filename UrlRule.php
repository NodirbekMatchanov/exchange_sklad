<?php


namespace rare\exchange1c;


use rare\exchange1c\helpers\ModuleHelper;

class UrlRule extends \yii\web\UrlRule
{
    public $route = 'exchange/api/<mode>/<auth>';
    public $pattern = '1c_exchange.php/<auth>';

    public function init()
    {
        $this->route = ModuleHelper::getModuleNameByClass('rare\exchange1c\ExchangeModule', 'exchange') . '/api/<mode>';
        parent::init();
    }

    public function parseRequest($manager, $request)
    {
        $this->defaults = ['mode' => \Yii::$app->request->get('mode', 'error')];
        return parent::parseRequest($manager, $request);
    }
}