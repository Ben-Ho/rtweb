<?php
class Contact_Component extends Kwc_Form_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlStatic('Contactform');
        $ret['placeholder']['submitButton'] = trlStatic('Submit');
        return $ret;
    }
}
