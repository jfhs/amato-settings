<?php

class Amato_Model_Setting extends ORM {

    protected $_primary_key = 'name';

    public static function g($name) {
        return ORM::factory('Setting')->where('name', '=', $name)
            ->find()->value;
    }

    public function table_fields() {
        return array(
            'title' => array('Настройка', 'link'),
        );
    }

    public function object_title() {
        return 'Настройки';
    }

    public function editable_fields() {
        return array(
            'title' => array('title' => 'Настройка', 'type' => 'echo'),
            'value' => array('title' => 'Содержание', 'type' => $this->type),
        );
    }

    public function allows_add() {
        return false;
    }
}
