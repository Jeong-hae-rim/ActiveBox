<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 9/29/2015
 * Time: 12:52 AM
 */

namespace Diress\Module\Work;


use Diress\Module\Base;

class Work extends Base{
	public function __construct() {
		$this->id = 'work';
		$this->init_settings();
	}
	public function run() {
		add_action( 'diress_render_work_module', array( $this, 'renderSection' ) );
		add_filter('diress_header_menu_items', array($this,'addMenuItem'));
		add_image_size( 'work-thumbnail', 650, 350, array('center', 'center'));
	}

	/**
	 * add menu item go main
	 * @param $items
	 *
	 * @return string[]
	 */
	public function addMenuItem($items){
		$items['works'] = 'works';
		return $items;
	}

	/**
	 * Render module section
	 */
	public function renderSection(){
		$this->get_template('section.php');
	}
}