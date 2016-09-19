<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Validation;

use Cake\Validation\Validator;

/**
 * Description of MyValidation
 *
 * @author lucas
 */
class ExtraValidator extends Validator {

    //put your code here

    public function __construct() {
        parent::__construct();
    }

    /**
     * Checks that a value is a monetary amount.
     *
     * @param string $check Value to check
     * @param string $symbolPosition Where symbol is located (left/right)
     * @return bool Success
     */
    public static function moeda($check) {
        $check = preg_replace('/[^\.\,\d]/', "", $check);
        $check = str_replace('.', '', $check);
        $check = (float) str_replace(',', '.', $check);
        if (is_float($check)) {
            return true;
        }
        return false;
        //$regex = '/^\d{1,3}(\.\d{3})*\,\d{2}$/u';
        //return is_string($regex) && is_scalar($check) && preg_match($regex, $check);
    }

    public static function cnpj($cnpj) {
        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

        // Valida tamanho
        if (strlen($cnpj) != 14)
            return false;

        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
            return false;

        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
    }

    public static function cpf($cpf) {
        $cpf = preg_replace('/[^0-9]/', '', (string) $cpf);

        // Valida tamanho
        if (strlen($cpf) != 11)
            return false;

        // Calcula e confere primeiro dígito verificador
        for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
            $soma += $cpf{$i} * $j;

        $resto = $soma % 11;

        if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
            return false;

        // Calcula e confere segundo dígito verificador
        for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
            $soma += $cpf{$i} * $j;

        $resto = $soma % 11;

        return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
    }

    public function betweenDateTime($dateInicio, $datefim, $obj) {
        $datefim = $obj['data'][$datefim];
        $datetime1 = new \DateTime($dateInicio->format('Y-m-d H:i:s'));
        $datetime2 = new \DateTime($datefim->format('Y-m-d H:i:s'));
        $interval = $datetime1->diff($datetime2);
        if ($interval->invert < 1) {
            return false;
        }
        return true;
    }

    public function DateTimeMin($dateInicio) {
        $datetime1 = new \DateTime($dateInicio->format('Y-m-d H:i'));
        $datetime2 = new \DateTime(date('Y-m-d H:i'));
        /* $interval = $datetime1->diff($datetime2);
          debug($datetime1);
          debug($datetime2);
          debug($interval); */
        if ($datetime1 < $datetime2) {
            return false;
        }
        return true;
    }

    public function betweenDecimal($min, $max, $obj) {
        $max = $obj['data'][$max];
        if ($min > $max) {
            return false;
        }
        return true;
    }

}
