<?php
class Abc_AbcFormController extends Kwf_Controller_Action_Auto_Form
{
    protected $_model = 'Abc';
    protected $_permissions = array('add', 'save', 'edit');

    protected function _initFields()
    {
        $this->_form->add(new Kwf_Form_Field_TextField('text', 'Text'));
    }

    protected function _beforeInsert(Kwf_Model_Row_Interface $row)
    {
        $row->parent_id = $this->_getParam('parent_id');
    }
}

