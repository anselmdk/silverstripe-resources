<?php
/**
 * Base Page
 */
class BasePageSnippet extends Page {

	static $singular_name = '';
	static $plural_name = '';
	static $description = '';

}

class BasePageSnippet_Controller extends Page_Controller {

	public static $allowed_actions = array();

	function init() {
		parent::init();
	}

}