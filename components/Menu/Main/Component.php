<?php
class Menu_Main_Component extends Kwc_Menu_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['level'] = 'main';
        $ret['rootElementClass'] .= ' kwfUp-webListNone';
        $ret['generators']['subMenu'] = array(
            'class' => 'Kwc_Menu_Generator',
            'component' => 'Menu_Sub_Component'
        );
        return $ret;
    }
}
