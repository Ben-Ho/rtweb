<?php
class Abc_AbcParentController extends Kwf_Controller_Action_Auto_Grid
{
    protected $_model = 'AbcParent';
    protected $_buttons = array('add', 'save', 'delete');

    public function indexAction()
    {
        parent::indexAction();
        $this->view->xtype = 'abc.abc';
    }

    public function preDispatch()
    {
        parent::preDispatch();
        $this->_filters['text'] = array(
                'type' => 'TextField',
                'label' => 'Filter:',
                'width' => 100,
                'queryFields' => array('key')
        );
    }

    public function _getSelect()
    {
        $ret = parent::_getSelect();
        return $ret;
    }

    public function _initColumns()
    {
        parent::_initColumns();
        $this->_columns->add(new Kwf_Grid_Column('id', trl('ID'), 200));

        $this->_columns->add(new Kwf_Grid_Column('text', trl('Text')))
            ->setEditor(new Kwf_Form_Field_TextField());
    }
}

