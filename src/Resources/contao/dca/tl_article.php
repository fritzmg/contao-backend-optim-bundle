<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   BackendOptimBundle
 * @author    Rory Zünd, Media Motion AG
 */

if (TL_MODE == 'BE') {
    if($objUser = BackendUser::getInstance()){
        if($objUser->admin == 1){
            if(strpos($_SERVER['REQUEST_URI'],'table=') === false) {
                $GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'] = array('title', 'inColumn', 'id');
                $GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color: #fd9828; padding-left: 3px;"><span style="color: #b7b7b7;">%s</span> (ID: %s)</span>';
            }
        }
    }
}
