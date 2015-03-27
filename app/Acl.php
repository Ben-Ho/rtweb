<?php
class Acl extends Kwf_Acl_Component
{
    public function __construct()
    {
        parent::__construct();

	$this->add(new Kwf_Acl_Resource_MenuUrl('abc_abc-parent', array('text'=>'DEMO', 'icon'=>'user.png'), '/admin/abc/abc-parent'));
            $this->add(new Zend_Acl_Resource('abc_abc'), 'abc_abc-parent');
            $this->add(new Zend_Acl_Resource('abc_abc-form'), 'abc_abc-parent');
        $this->allow('admin', 'abc_abc-parent');

        $this->addRole(new Kwf_Acl_Role('myrole', trlStatic('My Role')));
        $this->add(new Kwf_Acl_Resource_EditRole('edit_role_myrole', 'myrole'), 'edit_role');
        $this->allow('admin', 'edit_role_myrole');
	$this->allow('admin', 'abc_abc-parent');
        $this->allow('myrole', 'abc_abc-parent');
        $this->allow('admin', 'kwf_user_users');
        $this->allow('admin', 'kwf_user_changeuser');
    }
}
