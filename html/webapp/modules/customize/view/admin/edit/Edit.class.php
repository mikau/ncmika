<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * 祝日の編集の表示
 *
 * @package     NetCommons
 * @author      Noriko Arai,Ryuji Masukawa
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Customize_View_Admin_Edit extends Action
{
    // リクエストパラメータを受け取るため
	var $block_id = null;
	var $customize_id = null;

    // 使用コンポーネントを受け取るため
	var $customizeView = null;

    // 値をセットするため
	var $customize_obj = null;

    /**
     * execute処理
     *
     * @access  public
     */
    function execute()
    {
    	$result = $this->customizeView->getRRule($this->customize_id);
        if ($result === false) {
        	return 'error';
        }
        $this->customize_obj = $result[0];
        $this->customize_obj["rrule"] = $this->customizeView->parseRRule($this->customize_obj["rrule"]);
       	return 'success';
    }
}
?>