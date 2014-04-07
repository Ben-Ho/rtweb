<?php
class Root_Component extends Kwc_Root_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();

        $ret['generators']['box']['component']['mainMenu'] = 'Menu_Main_Component';
        $ret['generators']['box']['component']['bottomMenu'] = 'Menu_Bottom_Component';
        $ret['generators']['box']['component']['metaTags'] = 'Kwc_Box_MetaTagsContent_Component';
        $ret['generators']['title']['component'] = 'Kwc_Box_TitleEditable_Component';

        $ret['editComponents'] = array('title', 'metaTags');

        $ret['generators']['googledrive'] = array(
            'class' => 'Kwf_Component_Generator_Page_Static',
            'component' => 'GoogleDrive_Component',
            'filename' => 'googledriveopenurl',
            'name' => trl('GoogleDrive')
        );

        $ret['contentWidth'] = 780;
        $ret['contentWidthBoxSubtract'] = array(
            'mainMenu' => 205,
        );
        return $ret;
    }
}
