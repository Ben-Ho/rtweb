<?php
class Contact_Component extends Kwc_Form_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Contactform');
        $ret['placeholder']['submitButton'] = trlStatic('Submit');
        return $ret;
    }
}
