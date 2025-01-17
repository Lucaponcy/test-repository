<?php

class OPML {
	var $file;
	var $feeds;
	var $template_file;
	var $_links = array();

	function OPML($file) {
		$this->file   = $file;
	}

	function parseOPMLtoArray() {
		$parser = xml_parser_create();
		$data = implode('', file($this->file));
		xml_parse_into_struct($parser,$data,$d_ar,$i_ar);

		foreach($d_ar as $element) {
			if($element['tag'] == 'OUTLINE') {
				$feeds[] = $element['attributes'];
			} 
		}
		$this->feeds = $feeds;
	}

	function load() {
		echo "<a href=\"$path_to_opml/". basename($this->file) . "\">Download OPML File</a>";
	}
}
?>