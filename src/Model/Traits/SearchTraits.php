<?php

namespace App\Model\Traits;

trait SearchTraits {

    public function _searchConfigurationDynamic($search) {
        $c = $this->schema()->columns();
        foreach ($c as $key => $value) {
            $t = $this->schema()->columnType($value);
            if ($t != 'string' AND $t != 'text') {
                $search->value($value, ['field' => $this->aliasField($value)]);
            } else if ($t === 'date') {
                $search->callback($value, [
                    'callback' => function ($query, $args, $manager) use($value) {
                        if (stripos($args[$value], '/') !== FALSE) {
                            $d = implode('-', array_reverse(explode('/', $args[$value])));
                        } else {
                            $d = $args[$value];
                        }
                        return $query->where([$this->aliasField($value) => $d]);
                    }
                        ]);
                    } else if ($t === 'datetime') {
                        $search->callback($value, [
                            'callback' => function ($query, $args, $manager) use($value) {
                                if (stripos($args[$value], '/') !== FALSE) {
                                    $t = explode(' ', $args[$value]);
                                    $d = implode('-', array_reverse(explode('/', $t[0])));
                                    if (isset($t[1])) {
                                        $d .= ' ' . $t[1];
                                    }
                                } else {
                                    $d = $args[$value];
                                }
                                return $query->where([$this->aliasField($value) => $d]);
                            }
                                ]);
                            } else {
                                $search->like($value, ['before' => true, 'after' => true, 'field' => $this->aliasField($value)]);
                            }
                        }
                        return $search;
                    }

                }
                