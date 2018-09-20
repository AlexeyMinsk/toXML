<?php
namespace ASDRUBAEL\TO_XML;

class ArrayToXML{
	
	private $struct = [];
	private $path = null;
	private $xml = null;
	
	function __construct(array $arr){
	
		$this->path = $_SERVER["DOCUMENT_ROOT"] . "/my_dir/arrXML/log.xml";
		
		$this->struct = $arr;
		$this->xml = new \XMLWriter();
		$this->xml->openMemory();
		$this->xml->startDocument("1.0", "UTF-8");
		$this->addStruct();
		$this->log = $this->xml->outputMemory();
		
		$this->writeToFile();
	}
	
	private function addStruct(){
		
		$elem = $this->struct;
		var_dump($elem['child'][0]);
		do{
			if(!$this->checkParam($elem)){
				break;
			}
			
			$this->xml->startElement($elem['name']);
				$this->xml->text($elem['text']);
			$this->xml->endElement();
			$elem = $elem['child'];
		}while($elem);
	}
	
	public function writeToFile(){
		
		if( !empty($this->log) ){
			$writeRes = file_put_contents($this->path, $this->log);
			
			if($writeRes === false){
				return false;
			}
			return true;
		}
		return false;
	}
	
	private function checkParam($elem){
		
		if(empty($elem['name'])){
			return false;
		}
		return true;
	}
}