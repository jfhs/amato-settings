<?php

$menu = array(
	'link' => 'control/setting',
	'title' => 'Настройки',
	'sub' => array(),
);

try
{
	$settings = DB::select('group')
		->from('settings')
		->distinct(true)
		->execute()
		->as_array(null, 'group');
	foreach($settings as $g) {

		$menu['sub'][] = array(
			'link' => 'control/setting?filters[group]='.urlencode($g),
			'title' => $g,
		);
	}
}
catch (Database_Exception $e)
{

}
Controller_Control::set_menu_item('setting', $menu);

