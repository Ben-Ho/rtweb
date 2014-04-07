<?php
class GoogleDrive_Component extends Kwc_Abstract
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['flags']['processInput'] = true;
        return $ret;
    }

    public function processInput()
    {
        /*
         * Check to see if the 'state' parameter exists, with
         * the mode and specified file IDs (on open) or a folder parentId
         * (on create).
        */

        /*
         * State should always be defined
        */
        if (isset($_GET['state'])) {
            $state = json_decode(stripslashes($_GET['state']));
            $_SESSION['mode'] = $state->action;

            if (isset($state->ids)){
                $_SESSION['fileIds'] = $state->ids;
            } else {
                $_SESSION['fileIds'] = array();
            }
            if (isset($state->parentId)) {
                $_SESSION['parentId'] = $state->parentId;
            } else {
                $_SESSION['parentId'] = null;
            }
        } else {
           $error = 'Code defined, but no state.  Condition shouldn\'t exist.';
           throw new Exception($error);
        }
    }
}

