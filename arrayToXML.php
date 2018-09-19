<?php
namespace ASDRUBAEL\TO_XML;

class ArrayToXML{
	
	$struct = [];
	function __construct(array $arr){
		
		$this->struct = $arr;
		$this->xml = new \XMLWriter();
		$this->xml->openMemory();
		$this->xml->startDocument("1.0", "UTF-8");
		$this->addStruct();
		$this->log = $this->xml->outputMemory();
	}
	
	private function addStruct(){
		
	}
}