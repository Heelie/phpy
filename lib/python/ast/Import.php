<?php
namespace python\ast;

/**
*/
class Import
{
    private $_self;

    public function __construct()
    {
        $this->_self = \PyCore::import('ast')->Import();
    }

}
