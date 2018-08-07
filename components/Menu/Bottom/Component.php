<?php
class Menu_Bottom_Component extends Kwc_Menu_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['level'] = 'bottom';
        $ret['rootElementClass'] .= ' kwfUp-webListNone';
        return $ret;
    }
}
