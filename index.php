<?php
	use ASDRUBAEL\TO_XML;
	require __DIR__ . "/arrayToXML.php";

	$arr = array(
		"name" => "parent",
		"attr" => ["ID" => 22, "color" => "black"],
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quidem, ducimus, at sed possimus sapiente asperiores amet architecto similique fugiat iste dicta incidunt itaque ratione eligendi. Aspernatur, neque laborum accusamus.",
		"child" => [
			[
				"name" => "children",
				"attr" => ["IDs" => 44, "color" => "red"],
				//"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quidem, ducimus, at sed possimus sapiente asperiores amet architecto similique fugiat iste dicta incidunt itaque ratione eligendi. Aspernatur, neque laborum accusamus.",
				"child" => [
					[
						"name" => "kids",
						"attr" => ["ID" => 66, "color" => "rode"],
						"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quidem, ducimus, at sed possimus sapiente asperiores amet architecto similique fugiat iste dicta incidunt itaque ratione eligendi. Aspernatur, neque laborum accusamus.",
						"child" => []
					],
					[
						"name" => "kids",
						"attr" => ["ID" => 88, "color" => "rode"],
						"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quidem, ducimus, at sed possimus sapiente asperiores amet architecto similique fugiat iste dicta incidunt itaque ratione eligendi. Aspernatur, neque laborum accusamus.",
						"child" => []
					],
					[
						"name" => "kids",
						"attr" => ["ID" => 112, "color" => "rode"],
						"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quidem, ducimus, at sed possimus sapiente asperiores amet architecto similique fugiat iste dicta incidunt itaque ratione eligendi. Aspernatur, neque laborum accusamus.",
						"child" => []
					]
				]
			]
		]
	);
	
	$toXml = new TO_XML\ArrayToXML($arr);
	
	