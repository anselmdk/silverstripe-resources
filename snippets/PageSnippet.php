<?php
/**
 * Page Snippet
 * The intention wit this (as of September 2013) is
 * to have a base page containing most used snippets in SS3 development.
 * This is not there yet, but a start.
 */

class PageSnippet extends SiteTree {
	//appearance
	static $icon = 'cms/images/treeicons/page-gold';
	//parents and children in sitetree
	static $allowed_children = array("Blog"); //can also be "none";
	static $default_child = "Blog";
	static $default_parent = "blogs-and-more"; // *URLSegment* of default parent node.
	static $can_be_root = false; //default is true
	//parents and children in classes
	static $hide_ancestor = "MyUselessPage"; //
	//DB
	public static $db = array(
		"SubTitle" => "Varchar(255)",
		"Author" => "Varchar(255)",
		"Date" => "Date",
		"ImagePosition" => "Enum('Top, Left','Left')",
	);
	static $has_one = array (
		'Image' => 'Page_Image',
		'ThumbnailImage' => 'Page_Image',				
	);
	static $has_many = array(
	);
	static $many_many = array();
	static $belongs_many_many = array();


	//only 3 page snippets can be created
	public function canCreate() {
		$pages = DataObject::get("PageSnippet");
		if ($pages) {
			$count = $pages->Count();
			if ($count > 2) {
				return false;
			} else {
				return true;
			}
		} else {
			return true;
		}
	}


	/**
	 * CMS Fields
	 * NOTE: Some of this is still from ss2x - might need updates
	 */
	function getCMSFields() {
		$fields = parent::getCMSFields();
		//
		//Content tab
		$fields->addFieldToTab("Root.Main",
			new TextField("SubTitle", "Subtitle"), "MenuTitle"
		);
		$fields->addFieldToTab("Root.Main",
			new TextField("Author","Author(s)"), "Content"
		);
		$dateField = new DateField("Date","Date");
		$dateField->setConfig("showcalendar", true);
		$fields->addFieldToTab("Root.Main", $dateField, "Content");
		//
		//Metadata tab
		//
		//Image tab
		$fields->addFieldToTab("Root.Image",
			new ImageUploadField('Image')
		);
		$fields->addFieldToTab("Root.Image",
			new ImageUploadField('ThumbnailImage')
		);			
		$fields->addFieldToTab("Root.Image",
			new DropdownField("ImagePosition", "Image Position",
				singleton('Page')->dbObject('ImagePosition')->enumValues()
			)
		);
		//
		//Removing unneccesary settings
		$fields->removeFieldFromTab("Root", "Gallery");
		$fields->removeFieldFromTab("Root", "Sidebar");
		return $fields;
	}

	function FormattedImage(){
		$img = $this->Image();
		$resized = $img->SetHeight(300);
		return $resized;
	}	



}
class Page_Controller extends ContentController{
	function init() {
		parent::init();
	}
	function BodyCssClass(){
		return $this->ClassName;
	}
}
class Page_Image extends Image {
	function generateFeaturelistImageLeft($gd){
		return $gd->resizeByHeight(220);
	}
	function generateFeaturelistImageTop($gd){
		return $gd->croppedResize(390,170);
	}
	function generateAppetizerImage($gd){
		//$img = $gd->croppedResize(130,160);
		//resizing to height = 200
		$img = $gd->resizeByHeight(200);
		$width = $img->getWidth();
		//cropping from left corner, if too wide
		if ($width > 160) {
			$img = $img->crop(0, 5, 150, 200);
		}
		//additional cropping
		$img = $img->croppedResize(120,160);
		//greyscale
		$img = $img->greyscale(50,50,50);
		//return "nothing";
		return $img;
	}
	function generateMiniature($gd){
		return $gd->resizeRatio(110,110);
	}
}