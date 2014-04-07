<?php
class Abc extends Kwf_Model_Db
{
    protected $_table = 'abc';

    protected $_referenceMap = array(
        'AbcParent' => array(
            'refModelClass' => 'AbcParent',
            'column' => 'parent_id'
        )
    );
}

