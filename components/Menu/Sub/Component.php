<?php
class Menu_Sub_Component extends Kwc_Menu_Expanded_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['level'] = 2;
        $ret['rootElementClass'] .= ' kwfUp-webListNone';
        return $ret;
    }
}