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

use Cake\View\Helper\NumberHelper;
use App\View\Helper\MyHtmlHelper;

class MyNumberHelper extends NumberHelper {

    public function __construct(\Cake\View\View $View, array $config = array()) {
        parent::__construct($View, $config);
        $this->bHtml = new MyHtmlHelper($View, $config);
    }

    /* public $helpers = [
      'bHtml' => [
      'className' => 'MyHtml'
      ]
      ]; */

    public function mes($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            1 => [
                'text' => 'Janeiro',
                'class' => 'default',
            ],
            2 => [
                'text' => 'Fevereiro',
                'class' => 'default',
            ],
            3 => [
                'text' => 'Março',
                'class' => 'default',
            ],
            4 => [
                'text' => 'Abril',
                'class' => 'default',
            ],
            5 => [
                'text' => 'Maio',
                'class' => 'default',
            ],
            6 => [
                'text' => 'Junho',
                'class' => 'default',
            ],
            7 => [
                'text' => 'Julho',
                'class' => 'default',
            ],
            8 => [
                'text' => 'Agosto',
                'class' => 'default',
            ],
            9 => [
                'text' => 'Setembro',
                'class' => 'default',
            ],
            10 => [
                'text' => 'Outubro',
                'class' => 'default',
            ],
            11 => [
                'text' => 'Novembro',
                'class' => 'default',
            ],
            12 => [
                'text' => 'Dezembro',
                'class' => 'default',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function status($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            0 => [
                'text' => 'Inativo',
                'class' => 'danger',
            ],
            1 => [
                'text' => 'Ativo',
                'class' => 'success',
            ],
            9 => [
                'text' => 'Excluido',
                'class' => 'danger',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function socialStatus($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            0 => [
                'text' => 'Enviado',
                'class' => 'info',
            ],
            1 => [
                'text' => 'Publicado',
                'class' => 'success',
            ],
            2 => [
                'text' => 'Reprovado',
                'class' => 'danger',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function tipoSociaisFiles($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            1 => [
                'text' => 'Mensagem',
                'class' => 'info',
            ],
            2 => [
                'text' => 'Imagem',
                'class' => 'primary',
            ],
            3 => [
                'text' => 'Video',
                'class' => 'success',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function statusSac($fieldName, array $options = [], $labelExtra = null) {
        //0 - não lido | 1 - lido | 2 - respondido | 9 - excluido
        $d = [
            0 => [
                'text' => 'Não lido',
                'class' => 'danger',
            ],
            1 => [
                'text' => 'Lido',
                'class' => 'success',
            ],
            2 => [
                'text' => 'Respondido',
                'class' => 'primary',
            ],
            9 => [
                'text' => 'Excluido',
                'class' => 'danger',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function statusTipoCursos($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            1 => [
                'text' => 'Presencial',
                'class' => 'infor',
            ],
            2 => [
                'text' => 'On-line',
                'class' => 'primary',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function tipoCaracteristica($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            'barra' => [
                'text' => 'Barra',
                'class' => 'info',
            ],
            'texto' => [
                'text' => 'Texto livre',
                'class' => 'primary',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function periodo($id = null) {
        $d = [
            1 => 'Semana',
            2 => 'Quinzenal',
            3 => 'Mensal',
            4 => 'Bimestral',
            5 => 'Trimetral',
            6 => 'Semestral',
            7 => 'Anual',
        ];
        return !empty($d[$id]) ? $d[$id] : '';
    }

    public function simNao($fieldName, array $options = [], $labelExtra = null) {
        if (trim($fieldName) === '') {
            $fieldName = 0;
        }
        $d = [
            0 => [
                'text' => 'Não',
                'class' => 'danger',
            ],
            1 => [
                'text' => 'Sim',
                'class' => 'success',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function tipo($fieldName, array $options = []) {
        $fieldName = (int) $fieldName;
        $d = [
            1 => [
                'text' => 'Administrador',
                'class' => 'primary',
            ],
            2 => [
                'text' => 'Consumidor',
                'class' => 'info',
            ],
            3 => [
                'text' => 'Convidado',
                'class' => 'default',
            ],
            9 => [
                'text' => 'Excluido',
                'class' => 'danger',
            ]
        ];
        return $this->bHtml->label($d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function tipoSac($fieldName, array $options = []) {
        $fieldName = (int) $fieldName;
        $d = [
            1 => [
                'text' => 'Sugestão',
                'class' => 'primary',
            ],
            2 => [
                'text' => 'Reclamação',
                'class' => 'info',
            ],
            3 => [
                'text' => 'Outros',
                'class' => 'default',
            ]
        ];
        return $this->bHtml->label($d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function currency($number, $currency = null, array $options = []) {
        return parent::currency($number, 'R$ ', $options);
    }

}
