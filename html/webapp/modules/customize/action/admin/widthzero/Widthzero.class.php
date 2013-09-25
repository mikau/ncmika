<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * 全てのブロックの幅を0に
 *
 * @package     NetCommons
 * @author      Mika UMOTO
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Customize_Action_Admin_Widthzero extends Action
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
		$params = array(
			"min_width_size" => 0
		);
	    	$result = $this->db->updateExecute("blocks", $params);
		if ($result === false) {
			return 'error';
		}
		return 'success';
    }
}
?>