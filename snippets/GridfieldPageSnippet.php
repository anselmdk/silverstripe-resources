<?php
/**
 * Gridfield Page Snippet
 * Amended example from
 * http://www.silverstriperesources.com/articles/silverstripe-3-many-many-a-comprehensive-example/
 */
class GridfieldPageSnippet extends Page {

	static $singular_name = 'Gridfield Page';
	static $plural_name = 'Gridfield Pages';
	static $description = 'This is an example of a page with a Gridfield';

	public static $many_many = array(
		'Products' => 'BasePageSnippet_Product'
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$gridFieldConfig = GridFieldConfig_RelationEditor::create()->addComponents(
			new GridFieldDeleteAction('unlinkrelation')
		);
	
		$gridfield = new GridField("Products", "Product", $this->Products(), $gridFieldConfig);
		$fields->addFieldToTab('Root.Products', $gridfield);
		return $fields;
	}


}

class BasePageSnippet_Controller extends Page_Controller {

	public static $allowed_actions = array();

	function init() {
		parent::init();
	}

}


class BasePageSnippet_Product extends DataObject {
	
	public static $db = array(
		'Title' => 'Varchar'
	);
	
	public static $has_one = array(
		'Image' => 'Image'
	);
	
	public static $belongs_many_many = array(
		'Pages' => 'GridfieldPageSnippet'
	);
 
	public static $summary_fields = array( 
		'ID' => 'ID',
		'Thumbnail' => 'Thumbnail',
		'Title' => 'Title'
		 
	 );
	
	public function getThumbnail() { 
		return $this->Image()->CMSThumbnail();
	}

 public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$gridFieldConfig = GridFieldConfig_RelationEditor::create()->addComponents(
			new GridFieldDeleteAction('unlinkrelation')
		);
		$gridFieldConfig->removeComponentsByType('GridFieldAddNewButton');
	
		$gridfield = new GridField("Pages", "Pages", $this->Pages(), $gridFieldConfig);
		$fields->addFieldToTab('Root.Pages', $gridfield);
		return $fields;
	}


}
