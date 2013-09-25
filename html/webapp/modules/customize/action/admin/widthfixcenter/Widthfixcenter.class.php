<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * 全てのブロックの幅を0に
 *
 * @package	 NetCommons
 * @author	  Mika UMOTO
 * @copyright   2006-2007 NetCommons Project
 * @license	 http://www.netcommons.org/license.txt  NetCommons License
 * @project	 NetCommons Project, supported by National Institute of Informatics
 * @access	  public
 */
class Customize_Action_Admin_Widthfixcenter extends Action
{
	// リクエストパラメータを受け取るため

	// 使用コンポーネントを受け取るため
	var $db = null;
	var $request = null;

	/**
	 * execute実行
	 *
	 * @access  public
	 */
	function execute()
	{
		$fp = fopen(STYLE_DIR."\css\page_style.css", "a");
		fwrite($fp, "
/* customize fix&centering */
.container {
	border-collapse:collapse;
	table-layout:fixed;
	width:980px;
	margin: 0 auto;
}
.leftcolumn {
	border: 0px none;
	width:20%;
}
.centercolumn {
	border: 0px none;
	width:auto;
}
.rightcolumn {
	border: 0px none;
	width:20%;
}");
		fclose($fp);
		$result = true;
		if ($result === false) {
			return 'error';
		}
		return 'success';
	}
}
?>