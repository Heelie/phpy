<?php
namespace python\ast;

/**
*/
class Store
{
    private $_self;

    public function __construct()
    {
        $this->_self = \PyCore::import('ast')->Store();
    }

}
