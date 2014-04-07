<?php
class Abc_AbcController extends Kwf_Controller_Action_Auto_Grid
{
    protected $_model = 'Abc';
    protected $_buttons = array('add', 'save', 'delete');
    protected $_editDialog =  array(
        'controllerUrl' => '/admin/abc/abc-form',
        'width' => 400,
        'height' => 200
    );

    public function _getSelect()
    {
        $ret = parent::_getSelect();
        $ret->whereEquals('parent_id', $this->_getParam('parent_id'));
        return $ret;
    }

    public function _initColumns()
    {
        $this->_columns->add(new Kwf_Grid_Column('id', trl('ID'), 200));
        $this->_columns->add(new Kwf_Grid_Column('text', trl('Text'), 50));
        $this->_columns->add(new Kwf_Grid_Column('parent_id', trl('ParentID'), 300));
    }

    public function _beforeInsert(Kwf_Model_Row_Interface $row, $submitRow)
    {
        parent::_beforeInsert($row, $submitRow);
//         $row->key_id = $this->_getParam('key_id');
    }
}

