<?php
class AbcParent extends Kwf_Model_Db
{
    protected $_table = 'abc2';

    protected $_dependentModels = array(
            'Abc' => 'Abc'
    );
}

