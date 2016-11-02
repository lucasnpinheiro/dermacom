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

    public function removeColunas($data) {
        if (isset($data['created'])) {
            unset($data['created']);
        }
        if (isset($data['modified'])) {
            unset($data['modified']);
        }
        return $data;
    }

    public function capitalize($list, $ignore = []) {
        if (count($list) > 0) {
            foreach ($list as $key => $value) {
                if (!in_array($key, $ignore)) {
                    if (!is_array($value) AND ! is_object($value)) {
                        $list[$key] = mb_strtoupper($value, 'UTF-8');
                    }
                }
            }
        }
        return $list;
    }

    public function converteData($str, $explode = '/', $split = '-') {
        if (!empty($str)) {
            if (stripos($explode, $str) !== FALSE) {
                $str = implode($split, array_reverse(explode($explode, $str)));
            }
        }
        return $str;
    }

    public function removeMascara($str) {
        return str_replace(['.', ' ', '-', '_', '/', '(', ')', '\\'], '', $str);
    }

    public function posicaoToSQL($price) {
        $price = preg_replace('/[^0-9\.,-]*/i', '', $price);
        if (stripos($price, ',') !== false) {
            $price = str_replace('.', '', $price);
            $price = str_replace(',', '.', $price);
        }
        return doubleval($price);
    }

    public function mask($val, $mask) {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] === '#') {
                if (isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    public function maskInscricaoEstadualRS($str) {
        return $this->mask($str, '###-#######');
    }

    public function maskInscricaoEstadualSC($str) {
        return $this->mask($str, '###.###.###');
    }

    public function maskInscricaoEstadualPR($str) {
        return $this->mask($str, '########-##');
    }

    public function maskInscricaoEstadualSP($str) {
        return $this->mask($str, '###.###.###.###');
    }

    public function maskInscricaoEstadualMG($str) {
        return $this->mask($str, '###.###.###/####');
    }

    public function maskInscricaoEstadualRJ($str) {
        return $this->mask($str, '##.###.##-#');
    }

    public function maskInscricaoEstadualES($str) {
        return $this->mask($str, '###.###.##-#');
    }

    public function maskInscricaoEstadualBA($str) {
        return $this->mask($str, '###.###.##-#');
    }

    public function maskInscricaoEstadualSE($str) {
        return $this->mask($str, '#########-#');
    }

    public function maskInscricaoEstadualAL($str) {
        return $this->mask($str, '#########');
    }

    public function maskInscricaoEstadualPE($str) {
        return $this->mask($str, '##.#.###.#######-#');
    }

    public function maskInscricaoEstadualPB($str) {
        return $this->mask($str, '########-#');
    }

    public function maskInscricaoEstadualRN($str) {
        return $this->mask($str, '##.###.###-#');
    }

    public function maskInscricaoEstadualPI($str) {
        return $this->mask($str, '#########');
    }

    public function maskInscricaoEstadualMA($str) {
        return $this->mask($str, '#########');
    }

    public function maskInscricaoEstadualCE($str) {
        return $this->mask($str, '########-#');
    }

    public function maskInscricaoEstadualGO($str) {
        return $this->mask($str, '##.###.###-#');
    }

    public function maskInscricaoEstadualTO($str) {
        return $this->mask($str, '###########');
    }

    public function maskInscricaoEstadualMT($str) {
        return $this->mask($str, '#########');
    }

    public function maskInscricaoEstadualMS($str) {
        return $this->mask($str, '#########');
    }

    public function maskInscricaoEstadualDF($str) {
        return $this->mask($str, '###########-##');
    }

    public function maskInscricaoEstadualAM($str) {
        return $this->mask($str, '##.###.###-#');
    }

    public function maskInscricaoEstadualAC($str) {
        return $this->mask($str, '##.###.###/###-##');
    }

    public function maskInscricaoEstadualPA($str) {
        return $this->mask($str, '##-######-#');
    }

    public function maskInscricaoEstadualRO($str) {
        return $this->mask($str, '###.#####-#');
    }

    public function maskInscricaoEstadualRR($str) {
        return $this->mask($str, '########-#');
    }

    public function maskInscricaoEstadualAP($str) {
        return $this->mask($str, '#########');
    }

}
