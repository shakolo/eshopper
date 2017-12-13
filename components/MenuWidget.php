<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 13.12.2017
 * Time: 11:52
 */
namespace app\components;
use yii\base\Widget;

class MenuWidget extends Widget
{

    public $tpl;

    public function init(){
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        return $this->tpl;
}
}