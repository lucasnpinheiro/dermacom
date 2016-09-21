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

use Bootstrap\View\Helper\BootstrapFormHelper;

class MyFormHelper extends BootstrapFormHelper {

    use FuncoesTraits;

    protected $_customFileInput = true;
    private $switchery = false;
    public $helpers = [
        'Html',
        'Url',
        'bHtml' => [
            'className' => 'Bootstrap.BootstrapHtml'
        ]
    ];

    private function extratMyDiv(array $options = []) {
        if (!empty($options['div'])) {
            $div = $options['div'];
            unset($options['div']);

            $defaultDiv = [
                'class' => 'form-group {{type}}{{required}}'
            ];

            $optionsDiv = \Cake\Utility\Hash::merge($defaultDiv, $div);
            $optionsDiv['class'] = $this->mergeValuesTags('class', $defaultDiv, $div);
            $optionsDiv = $this->atributos($optionsDiv);

            $options['templates']['inputContainer'] = '<div ' . $optionsDiv . '>{{content}}</div>';

            $defaultDiv = [
                'class' => 'form-group has-error {{type}}{{required}}'
            ];
            $optionsDiv = \Cake\Utility\Hash::merge($defaultDiv, $div);
            $optionsDiv['class'] = $this->mergeValuesTags('class', $defaultDiv, $div);
            $optionsDiv = $this->atributos($optionsDiv);

            $options['templates']['inputContainerError'] = '<div ' . $optionsDiv . '>{{content}}{{error}}</div>';
        }
        return $options;
    }

    public function input($fieldName, array $options = []) {
        $options = $this->extratMyDiv($options);
        return parent::input($fieldName, $options);
    }

    public function file($fieldName, array $options = array()) {
        $default = [
            'button-label' => 'Selecione um arquivo',
            'count-label' => 'Arquivos selecionados',
            'type' => 'file',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        if (!empty($options['div'])) {
            $div = $options['div'];
            unset($options['div']);

            $defaultDiv = [
                'class' => 'form-group {{type}}{{required}}'
            ];

            $optionsDiv = \Cake\Utility\Hash::merge($defaultDiv, $div);
            $optionsDiv['class'] = $this->mergeValuesTags('class', $defaultDiv, $div);
            $optionsDiv = $this->atributos($optionsDiv);
            return '<div ' . $optionsDiv . '>' . parent::file($fieldName, $options) . '</div>';
        } else {
            return parent::file($fieldName, $options);
        }
    }

    public function status($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione uma situação',
            'options' => [
                0 => 'Inativo',
                1 => 'Ativo',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function socialStatus($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione uma situação',
            'options' => [
                0 => 'Enviado',
                1 => 'Publicado',
                2 => 'Reprovado',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function tipoSociaisFiles($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione uma situação',
            'options' => [
                1 => 'Mensagem',
                2 => 'Imagem',
                3 => 'Video',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function statusSac($fieldName, array $options = []) {
        //0 - não lido | 1 - lido | 2 - respondido | 9 - excluido
        $default = [
            'empty' => 'Selecione uma situação',
            'options' => [
                0 => 'Não lido',
                1 => 'Lido',
                2 => 'Respondido',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function statusTipoCursos($fieldName, array $options = []) {
        //0 - não lido | 1 - lido | 2 - respondido | 9 - excluido
        $default = [
            'empty' => 'Selecione uma situação',
            'options' => [
                1 => 'Presencial',
                2 => 'On-line',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function tipoCaracteristica($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione um tipo',
            'options' => [
                'barra' => 'Barra',
                'texto' => 'Texto livre',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function periodo($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione uma situação',
            'options' => [
                1 => 'Semana',
                2 => 'Quinzenal',
                3 => 'Mensal',
                4 => 'Bimestral',
                5 => 'Trimetral',
                6 => 'Semestral',
                7 => 'Anual',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function simNao($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione uma Opção',
            'options' => [
                0 => 'Não',
                1 => 'Sim',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function tipo($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione um tipo',
            'options' => [
                1 => 'Administrador',
                2 => 'Consumidor',
                3 => 'Convidado',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function tipoSac($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione um tipo',
            'options' => [
                1 => 'Sugestão',
                2 => 'Reclamação',
                3 => 'Outros',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function tipoInput($fieldName, array $options = []) {
        $default = [
            'empty' => 'Selecione um tipo',
            'options' => [
                'text' => 'Text',
                'textarea' => 'TextArea',
                'select' => 'Select',
                'radio' => 'Radio',
                'checkbox' => 'CheckBox',
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function bootstrapSelected($fieldName, array $options = []) {
        $default = [
            'class' => 'selectpicker'
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        $this->bHtml->script('/plugins/bootstrap-select/bootstrap-select.min.js', ['block' => 'script']);
        $this->bHtml->css('/plugins/bootstrap-select/bootstrap-select.min.css', ['block' => 'css']);
        return $this->input($fieldName, $options);
    }

    public function bootstrapTags($fieldName, array $options = []) {
        $default = [
            'class' => 'bootstrap-tagsinput',
            'type' => 'text',
            'help' => 'Separação da palavra chave por ";" ponto e virgula ou tab',
            'script' => [
                'delimiter' => ';'
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $_script = $options['script'];
        unset($options['script']);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        $this->bHtml->script('/plugins/bootstrap-tagsinput/bootstrap-tokenfield.min.js', ['block' => 'script']);
        $this->bHtml->css('/plugins/bootstrap-tagsinput/css/bootstrap-tokenfield.min.css', ['block' => 'css']);
        $this->bHtml->css('/plugins/bootstrap-tagsinput/css/tokenfield-typeahead.min.css', ['block' => 'css']);
        $script = '$(document).ready(function(){$(".bootstrap-tagsinput").tokenfield(' . json_encode($_script) . ')});';
        $this->bHtml->scriptBlock($script, ['block' => 'script']);
        return $this->input($fieldName, $options);
    }

    public function switchery($fieldName, array $options = [], array $config = []) {
        $default = [
            'class' => 'js-switch'
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        $this->bHtml->css('/plugins/switchery/switchery.min.css', ['block' => 'css']);
        $this->bHtml->script('/plugins/switchery/switchery.min.js', ['block' => 'script']);
        if ($this->switchery === false) {
            $default = [
                'size' => 'small'
            ];
            $config = \Cake\Utility\Hash::merge($default, $config);
            $script = 'var elems = Array.prototype.slice.call(document.querySelectorAll(".js-switch",' . json_encode($config) . '));
                    elems.forEach(function(html) {
                        var switchery = new Switchery(html);
                    });';
            $this->bHtml->scriptBlock($script, ['block' => 'script']);
            $this->switchery = true;
        }
        return $this->input($fieldName, $options);
    }

    public function passwordForce($fieldName, array $options = [], array $config = []) {
        $default = [
            'type' => 'password'
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $id = $this->_domId($fieldName);
        $default = [
            'security' => 0,
            'rawEntry' => true,
            'minimum' => 6,
            'levels' => ['Muito fraco', 'Muito fraco', 'Fraco', 'Fraco', 'Moderado', 'Boa', 'Segura', 'Muito forte'],
            'colours' => ['gray', 'red', 'red', '#C00000', 'orange', '#0099FF', 'blue', 'green'],
            'labels' => [
                'passwordStrength' => 'Segurança da senha:',
                'tooShort' => ''
            ]
        ];
        $config = \Cake\Utility\Hash::merge($default, $config);
        $script = '$("#' . $id . '").passStrengthify(' . json_encode($config) . ');';
        $this->bHtml->script('/js/jquery.passstrength.js', ['block' => 'script']);
        $this->bHtml->scriptBlock($script, ['block' => 'script']);
        return $this->input($fieldName, $options);
    }

    public function summernote($fieldName, array $options = [], $extra = []) {
        $options['type'] = 'textarea';
        if (empty($options['div']['class'])) {
            $options['div']['class'] = '';
        }
        $options['div']['class'] .= ' summernote';
        $options['type'] = 'textarea';

        $extra = \Cake\Utility\Hash::merge([
                    'colors' => [
                        ['#000000', '#424242', '#636363', '#9C9C94', '#CEC6CE', '#EFEFEF', '#F7F7F7', '#FFFFFF'],
                        ['#FF0000', '#FF9C00', '#FFFF00', '#00FF00', '#00FFFF', '#0000FF', '#9C00FF', '#FF00FF'],
                        ['#F7C6CE', '#FFE7CE', '#FFEFC6', '#D6EFD6', '#CEDEE7', '#CEE7F7', '#D6D6E7', '#E7D6DE'],
                        ['#E79C9C', '#FFC69C', '#FFE79C', '#B5D6A5', '#A5C6CE', '#9CC6EF', '#B5A5D6', '#D6A5BD'],
                        ['#E76363', '#F7AD6B', '#FFD663', '#94BD7B', '#73A5AD', '#6BADDE', '#8C7BC6', '#C67BA5'],
                        ['#CE0000', '#E79439', '#EFC631', '#6BA54A', '#4A7B8C', '#3984C6', '#634AA5', '#A54A7B'],
                        ['#9C0000', '#B56308', '#BD9400', '#397B21', '#104A5A', '#085294', '#311873', '#731842'],
                        ['#630000', '#7B3900', '#846300', '#295218', '#083139', '#003163', '#21104A', '#4A1031'],
                        ['#898989', '#898989', '#898989', '#898989', '#898989', '#898989', '#898989', '#898989']
                    ],
                    'lang' => 'pt-BR',
                        //'fontNames' => ['BloggerSans', 'BloggerSansMedium', 'BloggerSansMediumItalic', 'BloggerSansLight', 'BloggerSansLightItalic', 'BloggerSansItalic', 'BloggerSansBold', 'BloggerSansBoldItalic', 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande'],
                        //'fontNamesIgnoreCheck' => ['BloggerSans', 'BloggerSansMedium', 'BloggerSansMediumItalic', 'BloggerSansLight', 'BloggerSansLightItalic', 'BloggerSansItalic', 'BloggerSansBold', 'BloggerSansBoldItalic']
                        ], $extra);

        $script = '$("#' . $this->_domId($fieldName) . '").summernote(' . json_encode($extra) . ');';
        $this->bHtml->script('/plugins/summernote/summernote.min.js', ['block' => 'script']);
        $this->bHtml->script('/plugins/summernote/lang/summernote-pt-BR.js', ['block' => 'script']);
        $this->bHtml->css('/plugins/summernote/summernote.min.css', ['block' => 'css']);
        $this->bHtml->scriptBlock($script, ['block' => 'script']);
        return $this->input($fieldName, $options);
    }

    public function numero($fieldName, array $options = []) {
        $default = [
            'class' => 'numero',
            'type' => 'text',
            'data-mask' => '?99999',
            'data-placeholder' => ' ',
            'append' => '0-9',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return $this->input($fieldName, $options);
    }

    public function numeroNegative($fieldName, array $options = []) {
        $default = [
            'class' => 'numeroNegative',
            'type' => 'text',
            'data-prefix' => '',
            'data-allowNegative' => 'true',
            'data-thousands' => '.',
            'data-decimal' => ',',
            'data-precision' => '0',
            'data-affixesStay' => 'false',
            'append' => '0-9',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        if (!empty($options['value'])) {
            $options['value'] = $options['data-prefix'] . number_format($options['value'], $options['data-precision'], $options['data-decimal'], $options['data-thousands']);
        }
        return $this->input($fieldName, $options);
    }

    public function dataHora($fieldName, array $options = []) {
        $default = [
            'class' => 'data_hora',
            'type' => 'text',
            'data-mask' => '99/99/9999 99:99',
            'data-placeholder' => '_',
            'append' => '<i class="fa fa-calendar"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return $this->input($fieldName, $options);
    }

    public function data($fieldName, array $options = []) {
        $default = [
            'class' => 'data',
            'type' => 'text',
            'data-mask' => '99/99/9999',
            'data-placeholder' => '_',
            'append' => '<i class="fa fa-calendar"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return $this->input($fieldName, $options);
    }

    public function hora($fieldName, array $options = []) {
        $default = [
            'class' => 'hora',
            'type' => 'text',
            'data-mask' => '99:99:99',
            'data-placeholder' => '_',
            'append' => '<i class="fa fa-clock-o"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return $this->input($fieldName, $options);
    }

    public function moeda($fieldName, array $options = []) {
        $default = [
            'class' => 'moeda',
            'type' => 'text',
            'data-prefix' => '',
            'data-allowNegative' => 'true',
            'data-thousands' => '.',
            'data-decimal' => ',',
            'data-precision' => '2',
            'data-affixesStay' => 'false',
            'append' => '<i class="fa fa-usd"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        if (!empty($options['value'])) {
            $options['value'] = $options['data-prefix'] . number_format($options['value'], $options['data-precision'], $options['data-decimal'], $options['data-thousands']);
        }
        return $this->input($fieldName, $options);
    }

    public function inputUrl($fieldName, array $options = []) {
        $default = [
            'type' => 'url',
            'append' => '<i class="fa fa-link" aria-hidden="true"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($fieldName, $options);
    }

    public function porcentagem($fieldName, array $options = []) {
        $default = [
            'class' => '',
            'type' => 'text',
            'append' => '%',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return $this->input($fieldName, $options);
    }

    public function quantidade($fieldName, array $options = []) {
        $default = [
            'class' => 'quantidade',
            'type' => 'text',
            'data-prefix' => '',
            'data-allowNegative' => 'true',
            'data-thousands' => '',
            'data-decimal' => '.',
            'data-precision' => '3',
            'data-affixesStay' => 'false',
            'append' => '',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        if (!empty($options['value'])) {
            $options['value'] = $options['data-prefix'] . number_format($options['value'], $options['data-precision'], $options['data-decimal'], $options['data-thousands']);
        }
        return $this->input($fieldName, $options);
    }

    public function posicao($fieldName, array $options = []) {
        $default = [
            'class' => 'posicao',
            'type' => 'text',
            'data-prefix' => '',
            'data-allowNegative' => 'true',
            'data-precision' => 3,
            'data-thousands' => '.',
            'data-decimal' => '',
            'data-affixesStay' => 'false',
            'append' => '<i class="fa fa-street-view"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return $this->input($fieldName, $options);
    }

    public function cep($fieldName, array $options = []) {
        $default = [
            'class' => 'cep',
            'onchange' => 'cake.util.cep(this)',
            'type' => 'text',
            'data-campos' => [],
            'data-focus' => '#numero',
            'data-load-function' => '',
            'append' => '<i class="fa fa-location-arrow"></i>',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        $options['data-campos'] = json_encode($options['data-campos']);
        return $this->input($fieldName, $options);
    }

    public function cepNumero($fieldName, array $options = []) {
        $default = [
            'onchange' => 'cake.util.cepNumero(this)',
            'data-campos' => [],
            'data-cep' => '#cep',
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['data-campos'] = json_encode($options['data-campos']);
        return $this->numero($fieldName, $options);
    }

    public function fileUpload($fieldName, array $options = array()) {
        $default = [
            'type' => 'file',
            'help' => 'Tamanho máximo ' . ini_get('upload_max_filesize'),
            'class' => 'file',
            'data-show-preview' => "false",
            'data-show-upload' => "false",
            'data-allowed-file-extensions' => '["png", "jpg", "jpeg", "gif"]'
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $image = '';
        if (isset($options['path']) AND ! empty($options['path'])) {
            $list = pathinfo($options['path']);
            //debug($list);
            $image = '<span><img style="margin-left: 20px;" class="img-lg img-border img-thumbnail" src="data:image/' . $list['extension'] . ';base64,' . base64_encode(file_get_contents($list['dirname'] . '/' . $list['basename'])) . '"></span>';
            unset($options['path']);
        }
        $id = $this->_domId($fieldName);
        echo $this->Html->script('/js/upload.js', ['block' => 'script']);
        echo $this->Html->css('/css/upload.css', ['block' => 'css']);
        $this->Html->scriptBlock("document.getElementById('" . $id . "').addEventListener('change', handleFileSelect, false);", ['block' => 'script']);
        return '<div class="form-group file" ><div class="listFileUpload">' . $image . '</div>' . $this->input($fieldName, $options) . '</div>';
    }

    /**
     * Creates an HTML link, but access the URL using the method you specify
     * (defaults to POST). Requires javascript to be enabled in browser.
     *
     * This method creates a `<form>` element. If you want to use this method inside of an
     * existing form, you must use the `block` option so that the new form is being set to
     * a view block that can be rendered outside of the main form.
     *
     * If all you are looking for is a button to submit your form, then you should use
     * `FormHelper::button()` or `FormHelper::submit()` instead.
     *
     * ### Options:
     *
     * - `data` - Array with key/value to pass in input hidden
     * - `method` - Request method to use. Set to 'delete' to simulate
     *   HTTP/1.1 DELETE request. Defaults to 'post'.
     * - `confirm` - Confirm message to show.
     * - `block` - Set to true to append form to view block "postLink" or provide
     *   custom block name.
     * - Other options are the same of HtmlHelper::link() method.
     * - The option `onclick` will be replaced.
     *
     * @param string $title The content to be wrapped by <a> tags.
     * @param string|array|null $url Cake-relative URL or array of URL parameters, or
     *   external URL (starts with http://)
     * @param array $options Array of HTML attributes.
     * @return string An `<a />` element.
     * @link http://book.cakephp.org/3.0/en/views/helpers/form.html#creating-standalone-buttons-and-post-links
     */
    public function postLinkPermissoes($title, $url = null, array $options = [], $nameDb = false) {
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
        return $this->postLink($title, $url, $options);
    }

    public function help($msg, $icon = 'info-circle') {
        return '<i class="fa fa-' . $icon . '" aria-hidden="true" title="' . $msg . '"></i>';
    }

    public function inputRange($fieldName, array $options = []) {
        $defautl = [
            'div' => '',
            'type' => 'text',
            'label' => false,
            'min' => "-100",
            'max' => "100",
            'start' => "0",
        ];
        $options = \Cake\Utility\Hash::merge($defautl, $options);
        $div = $options['div'];
        unset($options['div']);
        $var = str_replace('-', '_', \Cake\Utility\Inflector::camelize($this->_domId($fieldName)));
        $script = ' var rs_' . $var . ' = document.getElementById("' . $this->_domId($fieldName) . '-div");
                    var rs_' . $var . '_value = document.getElementById("' . $this->_domId($fieldName) . '");

                    noUiSlider.create(rs_' . $var . ',{
                        start   : [ ' . $options['start'] . ' ],
                        connect : "lower",
                        range   : {
                            "min": [  ' . $options['min'] . ' ],
                            "max": [ ' . $options['max'] . ' ]
                        }
                    });

                    rs_' . $var . '.noUiSlider.on("update", function( values, handle ) {
                        console.log(values[handle]);
                        rs_' . $var . '_value.value = values[handle];
                    });';
        $this->bHtml->script('/plugins/noUiSlider/nouislider.min.js', ['block' => 'script']);
        $this->bHtml->css('/plugins/noUiSlider/nouislider.min.css', ['block' => 'css']);
        $this->bHtml->scriptBlock($script, ['block' => 'script']);
        $input = $this->input($fieldName, $options);
        return '<div ' . $div . '><div class="col-xs-12 col-md-9" style="margin-top: 15px;" id="' . $this->_domId($fieldName) . '-div"></div><div class="col-xs-12 col-md-3">' . $input . '</div></div>';
    }

    public function inputStatic($label, $value, array $options = array()) {
        $default = [
            'label' => [
                'class' => 'control-label'
            ],
            'input' => [
                'class' => 'form-control'
            ],
            'class' => 'form-group form-group-static'
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        $options['label']['class'] = $this->mergeValuesTags('class', $default['label'], $options['label']);
        $_label = $options['label'];
        unset($options['label']);
        $options['input']['class'] = $this->mergeValuesTags('class', $default['input'], $options['input']);
        $_input = $options['input'];
        unset($options['input']);
        $options['class'] = $this->mergeValuesTags('class', $default, $options);
        return '<div ' . $this->atributos($options) . '>
                <label ' . $this->atributos($_label) . '>' . \Cake\Utility\Inflector::humanize($label) . '</label>
                <div ' . $this->atributos($_input) . '>
                  <p class="form-control-static">' . $value . '</p>
                </div>
              </div>';
    }

    public function myCheckBox($value, $name = 'selectAll', $class = 'selectAll', $js = 'onclick="cake.tableList.selectAll(this);"') {
        return '<div><input ' . $js . ' class="' . $class . '" type="checkbox" name="' . \Cake\Utility\Inflector::variable($name) . '" value="' . $value . '" id="' . $this->_domId($name) . '"></div>';
    }

    public function myCheckBoxOne($value, $name = 'selectOne', $class = 'selectOne') {
        return $this->myCheckBox($value, 'selectOne.' . $value, 'selectOne', '');
    }

    public function myButtonExcluir($url) {
        $this->bHtml->script('/js/excluirTableList.js', ['block' => 'script']);
        return $this->button($this->Html->icon('trash') . ' Excluir', ['onclick' => 'cake.tableList.enviar(this);', 'escape' => false, 'type' => 'button', 'class' => 'btn btn-danger', 'url' => \Cake\Routing\Router::url($url, true)]);
    }

}
