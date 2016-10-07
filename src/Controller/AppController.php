<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Database\Type;
use Cake\I18n\I18n;
use Cake\I18n\Time;
use Cake\I18n\Number;

I18n::locale('pt_BR');
// Habilita o parseamento de datas localizadas
Type::build('date')->useLocaleParser()->setLocaleFormat('dd/M/yyyy');
Type::build('datetime')->useLocaleParser()->setLocaleFormat('dd/M/yyyy HH:ii:ss');
Type::build('timestamp')->useLocaleParser()->setLocaleFormat('dd/M/yyyy HH:ii:ss');

// Habilita o parseamento de decimal localizaddos
Type::build('decimal')->useLocaleParser();
Type::build('float')->useLocaleParser();

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $title = 'Não definido';
    public $sub_title = 'Não definido';

    public function __construct(\Cake\Network\Request $request = null, \Cake\Network\Response $response = null, $name = null, $eventManager = null, $components = null) {
        parent::__construct($request, $response, $name, $eventManager, $components);
        $this->set('title', $this->title);
        $this->set('sub_title', $this->sub_title);
        //$this->definedTitles();
    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->helpers = [
            'Flash' => [
                'className' => 'MyFlash'
            ],
            'Form' => [
                'className' => 'MyForm'
            ],
            'Html' => [
                'className' => 'MyHtml'
            ],
            'Number' => [
                'className' => 'MyNumber'
            ],
            'Paginator' => [
                'className' => 'MyPaginator'
            ],
            'Rss' => [
                'className' => 'MyRss'
            ],
            'Text' => [
                'className' => 'MyText'
            ],
            'Time' => [
                'className' => 'MyTime'
            ],
            'Url' => [
                'className' => 'MyUrl'
            ],
            'Modal' => [
                'className' => 'MyModal'
            ],
        ];


        if ($this->request->action === 'index') {
            $this->loadComponent('Search.Prg');
        }
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Usuarios',
                'action' => 'login',
                'prefix' => false,
                'plugin' => null
            ],
            'loginAction' => [
                'controller' => 'Usuarios',
                'action' => 'login',
                'prefix' => false,
                'plugin' => null
            ],
            'logoutRedirect' => '/',
            'authorize' => ['Controller'], // Added this line
            'authenticate' => [
                'Form' => [
                    'passwordHasher' => [
                        'className' => 'Default',
                    ],
                    'fields' => ['username' => 'login', 'password' => 'senha'],
                    'userModel' => 'Usuarios',
                    'scope' => [
                        'Usuarios.status' => 1
                    ],
                ],
            ],
            'storage' => 'Session'
        ]);
        $this->viewBuilder()->layout('simples');

        if ($this->RequestHandler->accepts('json') OR $this->request->accepts('application/json') OR $this->request->is('ajax')) {
            $this->viewBuilder()->layout('ajax');
            $this->response->disableCache();
            $this->RequestHandler->prefers('json');
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->set('_serialize', true);
        }
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function isAuthorized($user) {
        if (!empty($user)) {
            return true;
        }
        return false;
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        if ($this->request->params['controller'] != 'Usuarios' AND $this->request->params['action'] != 'login') {
            if (!empty($this->Auth->user())) {
                $this->Auth->allow();
            }
        }

        // $this->Auth->allow();
    }

    protected function definedTitles() {
        $this->loadModel('Menus');
        $find = $this->Menus->find()->where(['Menus.controller' => $this->request->params['controller'], 'Menus.action' => 'index'])->cache(false)->first();
        if (!empty($find)) {
            $this->set('title', __($find->titulo));
        }
        $find = $this->Menus->find()->where(['Menus.controller' => $this->request->params['controller'], 'Menus.action' => $this->request->params['action']])->cache(false)->first();
        if (!empty($find)) {
            $this->set('sub_title', __($find->titulo) . ' Registro');
        }
    }

    public function sendResponse($result = [], $code = 200, $msg = 'Generico') {
        if ($this->request->is('options')) {
            $code = 200;
            $result = [];
        }
        $paging = [];

        if (!empty($this->request->params['paging'])) {
            $k = array_keys($this->request->params['paging']);
            $paging = array_merge($paging, $this->request->params['paging'][$k[0]]);
        }
        $new_code = $this->response->httpCodes($code);
        if (empty($new_code)) {
            $this->response->httpCodes([$code => $msg]);
            $new_code = [$code => $msg];
        }
        $url = h($this->request->here());
        $message = $new_code[$code];
        if (is_array($result) AND isset($result['message'])) {
            $message = $result['message'];
            unset($result['message']);
        }
        $this->response->statusCode($code);
        if (count($paging) > 0) {
            $this->set(compact('message', 'code', 'url', 'paging', 'result'));
            $this->set('_serialize', ['message', 'code', 'url', 'paging', 'result']);
        } else {
            $this->set(compact('message', 'code', 'url', 'result'));
            $this->set('_serialize', ['message', 'code', 'url', 'result']);
        }

        if (\Cake\Core\Configure::read('debug') === true) {
            \Cake\Log\Log::info('Response: ' . json_encode(compact('message', 'code', 'url', 'paging', 'result'), JSON_PRETTY_PRINT) . "\n", ['scope' => ['api']]);
        }
    }

}
