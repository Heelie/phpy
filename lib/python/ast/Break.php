<?php
namespace python\ast;

/**
*/
class Break
{
    private $_self;

    public function __construct()
    {
        $this->_self = \PyCore::import('ast')->Break();
    }

}
