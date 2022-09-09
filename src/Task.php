<?php

namespace PHP;

class Task{

    protected $description;
    public $completed = false;

    public function __construct( $description )
    {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}

