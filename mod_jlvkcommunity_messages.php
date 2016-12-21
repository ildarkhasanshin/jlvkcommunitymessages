<?php
/**
 * @package jlvkcommunity_messages
 * @author Kunicin Vadim (vadim@joomline.ru)
 * @version 1.0.1
 * @copyright (C) 2016 by JoomLine (http://www.joomline.net)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__) . '/helper.php';

$group_id                = $params->get('group_id');
$moduleclass_sfx         = $params->get('moduleclass_sfx');
$mode                    = $params->get('mode');
$link                    = $params->get('link');
$linknone                = '';
$disableButtonTooltip    = $params->get('disableButtonTooltip');
$tooltipButtonText       = $params->get('tooltipButtonText');
$disableNewMessagesSound = $params->get('disableNewMessagesSound');
$disableExpandChatSound  = $params->get('disableExpandChatSound');
$disableTitleChange      = $params->get('$disableTitleChange');
$widgetPosition          = $params->get('widgetPosition');
$expanded                = $params->get('expanded');
$addVkApi                = $params->get('addVkApi');

if ($link == 0) {
  $linknone = '<div style="text-align: right;"><a href="http://afisha-msk.ru/" target="_blank" style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt; ">afisha-msk.ru</a></div>';
}

$expandedon                = $expanded == 0 ? '' : ('expandTimeout:' . $expanded . ',');
$disableButtonTooltipon    = $disableButtonTooltip == 0 ? 'disableButtonTooltip: "1",' : '';
$disableNewMessagesSoundon = $disableNewMessagesSound == 0 ? 'disableNewMessagesSound: "1",' : '';
$disableExpandChatSoundon  = $disableExpandChatSound == 0 ? 'disableExpandChatSound: "1",' : '';
$disableTitleChangeon      = $disableTitleChange == 0 ? 'disableTitleChange: "1",' : '';

require JModuleHelper::getLayoutPath('mod_jlvkcommunity_messages', $params->get('layout', 'default'));