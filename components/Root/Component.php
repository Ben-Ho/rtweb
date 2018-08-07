<?php
class Root_Component extends Kwc_Root_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);

        $ret['generators']['box']['component']['mainMenu'] = 'Menu_Main_Component';
        $ret['generators']['box']['component']['bottomMenu'] = 'Menu_Bottom_Component';
        $ret['generators']['box']['component']['metaTags'] = 'Kwc_Box_MetaTagsContent_Component';
        $ret['generators']['box']['component']['analytics'] = 'Kwc_Statistics_Analytics_Component';
        $ret['generators']['title']['component'] = 'Kwc_Box_TitleEditable_Component';

        $ret['editComponents'] = array('title', 'metaTags');

        $ret['contentWidth'] = 780;
        $ret['contentWidthBoxSubtract'] = array(
            'mainMenu' => 205,
        );
        return $ret;
    }
}
