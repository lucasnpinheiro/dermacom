<?php

namespace App\Model\Rule;

use Cake\Datasource\EntityInterface;

class CustomRule {

    /**
     * The list of fields to check
     *
     * @var array
     */
    protected $_fields;

    /**
     * Constructor.
     *
     * @param array $fields The list of fields to check uniqueness for
     */
    public function __construct(array $fields) {
        $this->_fields = $fields;
    }

    public function __invoke(EntityInterface $entity, array $options) {
        if (!$entity->extract($this->_fields, true)) {
            return true;
        }

        $alias = $options['repository']->alias();
        $conditions = $this->_alias($alias, $entity->extract($this->_fields));
        if ($entity->isNew() === false) {
            $keys = (array) $options['repository']->primaryKey();
            $keys = $this->_alias($alias, $entity->extract($keys));
            if (array_filter($keys, 'strlen')) {
                $conditions['NOT'] = $keys;
            }
        }
        $conditions[$alias.'.status !='] = 9;
        return !$options['repository']->exists($conditions);
    }

    /**
     * Add a model alias to all the keys in a set of conditions.
     *
     * @param string $alias The alias to add.
     * @param array $conditions The conditions to alias.
     * @return array
     */
    protected function _alias($alias, $conditions) {
        $aliased = [];
        foreach ($conditions as $key => $value) {
            $aliased["$alias.$key"] = $value;
        }
        return $aliased;
    }

}
