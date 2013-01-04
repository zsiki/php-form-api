<?php

/**
  * Field class to generate and fill zipcode fields.
  *
  * @property string $type the type of the field (i.e. text).
  * @property int $label label ID of Field
  * @property int $length number of items in one row, 0 all items in a sigle row
  * @property int $maxlength maximal number of input chars
  *
  * @package formapi
  * @author Zoltan Siki <siki@agt.bme.hu> and Zoltan Koppanyi <zoltan.koppanyi@gmail.com>
  * @version 0.1
  */

class ZipCodeField extends Field {

	protected $label;
	protected $length;
	protected $maxlength;
	
	public function __construct($id, $name, $label, $length=4, $maxlength=4,
		$requested=false, $default=NULL, $regexp="/^[1-9]{1}[0-9]{3}$/", $help=NULL) {

		parent::__construct($id, $name, $requested, $default, $regexp, $help);
		$this->label = $label;
		$this->length = $length;
		$this->maxlength = $maxlength;
		$this->type = "text";
	}
	
	public function generate($form, $lang) {
		$w = "<div class=\"textc\">" . 
			"<input type=\"text\"" .
			" maxlength=\"" . $this->maxlength . "\"" . 
			" size=\"" . $this->length . "\"" .
			" value=\"" . $form->getMsg($this->default, $lang) . "\"" .
			" name=\"" . $this->name . "\"" .
			" title=\"" . $form->getMsg($this->help, $lang) . "\"" .
			" />" .
			"</div>";
		return $w;
	}
}

?>
