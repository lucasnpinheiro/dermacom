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

use Bootstrap\View\Helper\BootstrapHtmlHelper;

class MyHtmlHelper extends BootstrapHtmlHelper {

    protected $_useFontAwesome = TRUE;
    private $_addButton = [];

    public function addButton($link) {
        $this->_addButton[md5($link)] = $link;
    }

    public function getButton() {
        return '<div class="btn-group" role="group" aria-label="">' . implode(' ', $this->_addButton) . '</div>';
    }

    public function linkPermissoes($title, $url = null, array $options = array(), $nameDb = false) {
        if (is_array($url)) {
            $_url = array_merge($this->request->params, $url);
            $session = $this->request->session()->read('menusPermissoes');
            if (!empty($session[$_url['prefix']][$_url['controller']][$_url['action']])) {
                if ($nameDb) {
                    $title = __($session[$_url['prefix']][$_url['controller']][$_url['action']]);
                    $options['title'] = $title;
                }
            } else {
                return null;
            }
        }
        return parent::link($title, $url, $options);
    }

    public function label($text, $type = 'default', $options = []) {
        if (is_string($type)) {
            $options['type'] = $type;
        } else if (is_array($type)) {
            $options = $type;
        }
        $type = $this->_extractType($options, 'type', $default = 'default', array('default', 'primary', 'success', 'info', 'warning', 'danger', 'mint', 'purple', 'pink', 'dark'));
        unset($options['type']);
        $options = $this->addClass($options, 'label');
        $options = $this->addClass($options, 'label-' . $type);
        return $this->tag('span', $text, $options);
    }

    public function gerarTags() {
        $max = 30;
        $total = $maior = 0;
        $retorno = [];
        $Comunicados = \Cake\ORM\TableRegistry::get('Comunicados');
        $find = $Comunicados->find()->select(['tags'])->where(['status !=' => 9])->all();
        $tags = [];
        if (count($find) > 0) {
            foreach ($find as $key => $value) {
                $ex = explode(',', $value->tags);
                foreach ($ex as $k => $v) {
                    if (!isset($tags[$v])) {
                        $tags[$v] = 0;
                    }
                    $tags[$v] ++;
                    $total += $tags[$v];
                    if ($tags[$v] > $maior)
                        $maior = $tags[$v];
                }
            }
            $this->shuffleAssoc($tags);
            foreach ($tags as $key => $value) {
                $size = round($max * $value / $maior);
                $menor = $max / 3;
                if ($size < $menor)
                    $size = $menor;
                $retorno[] = $this->link($key, ['?' => ['tags' => $key]], ['style' => 'color: #' . $this->corAleatoria(0, 100) . ';font-size:' . $size . 'px', 'escape' => false]);
            }
        }
        return implode(' ', $retorno);
    }

    private function shuffleAssoc(&$array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach ($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return true;
    }

    private function corAleatoria($faixaMin = 0, $faixaMax = 255) {
        return str_pad(dechex(rand($faixaMin, $faixaMax)), 2, "0", STR_PAD_LEFT) . str_pad(dechex(rand($faixaMin, $faixaMax)), 2, "0", STR_PAD_LEFT) . str_pad(dechex(rand($faixaMin, $faixaMax)), 2, "0", STR_PAD_LEFT);
    }

}
