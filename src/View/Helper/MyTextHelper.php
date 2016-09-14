<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP MyHtmlHelper
 * @author lucas
 */

namespace App\View\Helper;

use Cake\View\Helper\TextHelper;

class MyTextHelper extends TextHelper {

    public $Html;

    public function __construct(\Cake\View\View $View, array $config = array()) {
        parent::__construct($View, $config);
        $this->Html = new MyHtmlHelper($View, $config);
    }

    public function trataTags($str, $separador = ';') {
        $s = explode($separador, $str);
        $r = [];
        foreach ($s as $key => $value) {
            $r[] = $this->Html->label($value);
        }
        return implode(' ', $r);
    }

}
