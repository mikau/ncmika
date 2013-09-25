<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * 祝日設定インストール時アクション
 * 祝日を登録する
 *
 * @package     NetCommons
 * @author      Noriko Arai,Ryuji Masukawa
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Customize_Action_Admin_Install extends Action
{
	// パラメータを受け取るため
	var $module_id = null;
	
	
	// コンポーネントを受け取るため
	var $db = null;
	var $databaseSqlutility = null;
	
	function execute()
	{
    	}
    	
}
?>