<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

//$corePath = $modx->getOption('contentblocks.core_path',null,$modx->getOption('core_path').'components/contentblocks/');
//$modx->getService('contentblocks', 'ContentBlocks', $corePath . 'model/contentblocks/');
//$modx->lexicon->load('contentblocks:default');


/* handle request */
$path = '/Users/mhamstra/Sites/premium.local/MagicPreview/core/components/magicpreview/processors/'; //$modx->getOption('processorsPath',$modx->contentblocks->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));