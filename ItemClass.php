<?php

final class ItemClass
{
    private int $id;
    private string $name;
    private int $status;
    private bool $changed;

    public function __construct($id, $name, $status, $changed)
    {
        $this->id = $id;
        $this->init($name, $status, $changed);
    }

    private function init($name, $status, $changed)
    {
        $this->name = $name;
        $this->status = $status;
        $this->changed = $changed;
    }

    public function __set($property, $value)
    {
        switch ($property) {
            case 'name':
                if (is_string($value) and isset($value)) {
                    $this->$property = $value;
                }
                break;
            case 'status':
                if (is_int($value) and isset($value)) {
                    $this->$property = $value;
                }
                break;
            case 'changed':
                if (is_bool($value)) {
                    $this->$property = $value;
                }
                break;
        }
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function save($name, $status)
    {
        $this->name = $name;
        $this->status = $status;
    }

}
