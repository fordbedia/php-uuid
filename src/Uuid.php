<?php
namespace Security;

use Security\UuidRepository;

class UUID extends UuidRepository {

    private $char;
    
    public function __construct(Int $char = null)
    {
        if ($char !== null) {
            $this->char = $char;
        }
    }

}