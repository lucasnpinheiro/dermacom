<?php

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * MenuLateral cell
 */
class MenuLateralCell extends Cell {

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display() {
        $this->loadModel('Menus');
        $menus = $this->Menus->find()->where(['Menus.status' => 1, 'Menus.item_menu' => 1])->order(['Menus.titulo' => 'ASC'])->all();
        $this->set('menus', $menus);
    }

}
