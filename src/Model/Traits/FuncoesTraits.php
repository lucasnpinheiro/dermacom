<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Traits;

/**
 * Description of Funcoes
 *
 * @author lucas
 */
trait FuncoesTraits {

    //put your code here

    public function replaceMoney($str) {
        if (!empty($str)) {
            $str = preg_replace('/[^\.\,\d]/', "", $str);
            $str = str_replace('.', '', $str);
            return (float) str_replace(',', '.', $str);
        }
        return $str;
    }

    public function posicaoToSQL($price) {
        $price = preg_replace('/[^0-9\.,-]*/i', '', $price);
        if (stripos($price, ',') !== false) {
            $price = str_replace('.', '', $price);
            $price = str_replace(',', '.', $price);
        }
        return doubleval($price);
    }

}
