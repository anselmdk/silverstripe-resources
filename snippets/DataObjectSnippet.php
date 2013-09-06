<?
/**
 * Data Object Snippet
 * TODO This needs to be updated with some SS3 specific code and a getcms field
 * TODO add some getters using the various data model methods to show how to use the datamoel
 */
class DataObjectSnippet extends DataObject {

	public static $singular_name = '';
	public static $plural_name = '';

	//database
	public static $db = array(
		'Name" => "Varchar(255)',
		'Test' => 'Boolean',
		'SortOrder' => 'Int',
		'Type' => "Enum('Homework, Assignment')"
	);

	public static $has_one = array(
		'Thumbnail' => 'Image',
		'Parent' => 'Page'
	);
	public static $has_many = array();
	public static $many_many = array();
	public static $belongs_many_many = array();
	public static $many_many_extraFields = array();
	

	public static $field_labels = array(
		"Name" => "Name Description"
	);
	public static $summary_fields = array(
		'Name' => 'Name', 
		'Parent.Title', 
		'TinyThumbPhoto' => 'Thumbnail'
	); 

	//CRUD settings
	static $can_create = Boolean;
	public function canCreate($member = null) {
		return false;
	}
	public function canView($member = null) {
		return false;
	}
	public function canEdit($member = null) {
		return false;
	}
	public function canDelete($member = null) {
		return false;
	}
	//defaults
	public static $default_sort = "Sort ASC, Name ASC";
	public static $defaults = array();//use fieldName => Default Value
	public function populateDefaults() {
		parent::populateDefaults();
	}
	public function TinyThumbPhoto() {
		return $this->Thumbnail()->CroppedImage(100,100);
	}


	/**
	 * Getter examples:
	 */
	function getFieldAsValue($fieldName) {
		return $this->getField($fieldName);
	}

	function getFieldAsDbObject($fieldName) {
		return $this->dbObject($fieldName);
	}

	function getFieldAsObject($fieldName) {
		return $this->obj($fieldName);
	}

	function getCustomField() {
		$myUsefullField = DBField::create($className = "Currency", $value = 1111.11);
		$formattedField = $myUsefullField->Nice();
		//
		//conversions
		$newValue = Convert::$functionName($oldValue);
		//examples are: raw2att, raw2xml, raw2json, raw2sql, json2obj,  json2array, linkIfMatch
	}


	/**
	 * Saving
	 */
	function onBeforeWrite() {
		parent::onBeforeWrite();
	} 
	function onAfterWrite() {
		parent::onAfterWrite();
		$fields = $this->getChangedFields();
		if (isset ($fields['MyField']['before'])) {
			die("My field used to be: ".$fields['MyField']['before']);
		}
	}
	function requireDefaultRecords(){
		parent::requireDefaultRecords();	
	}
	function populateDefaults(){
		parent::populateDefaults();
	}



	/**
	 * Relations
	 */

  //static $many_many = array("Categories" => "Category");
 
  function addCategories($additionalCategories) {
    $existingCategories = $this->Categories();
    // method 1: Add many by iteration
    foreach($additionalCategories as $category) {
      $existingCategories->add($category);
    }
    // method 2: Add many by ID-List
    $existingCategories->addMany(array(1,2,45,745));
  }



}