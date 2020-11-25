<?php

final class item {

    private $id;
    private $name;
    private $status;
    private $changed;


    public function __construct($id) {
        $this->id = $id;
    }

    private function init($name, $status) {
	$this->name = $name;
	$this->status = $status;
    }    

    public function __get($name) {	    
        if (property_exists($this, $name)) {
		return $this->$name;
	}
    }

    public function __set($name, $valueName) {
        if (property_exists($this, $name) and (is_string($name)) ) {
	    $this->$name = $valueName;
	}

    }

 //???
    public function save($named, $status) {
    
    }

}   
