<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
* [[機能説明]]
 *
 * @package     NetCommons
 * @author      Noriko Arai,Ryuji Masukawa
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Customize_View_Main_Init extends Action
{

// 追加
	var $customize_value_2 = null;

    /**
     * [[機能説明]]
     *
     * @access  public
     */
    function execute()
    {
// 表示する文字列を設定する
		$this->customize_value_2 = CUSTOMIZE_VALUE_2 ;

        return 'success';
    }
}
?>
