<?php

/**

 * Plugin Name: DEMO 

 * Plugin URI: http://demo.net 

 * Description: Đây là plugin đầu tiên của quỳnh

 * Version: 1.0 

 * Author: Quỳnh chứ ai 

 * Author URI: http://quynh.com 

 * License: GPLv2 or later 

 */
function change($str)
{
$str = "Thay đổi nội dung Nguyễn Thị Quỳnh";
return $str;
}
add_filter('Quynh','change');

?>