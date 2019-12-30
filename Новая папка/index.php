<?php
	use ASDRUBAEL\TO_XML;
	require '../phpQuery/phpQuery.php';
	require '../arrXML/arrayToXML.php';
	$catalogHttp = 'http://silca.info/catalog/';
	
	$productsArr = [
		[
			'url' => 'toothpastes/silca/5/',
			'categoryCode' => "SILCA Family",
			'price' => '80',
		],
		[
			'url' => 'toothpastes/silca/6/',
			'categoryCode' => "SILCA Family",
			'price' => '100',
		],
		[
			'url' => 'toothpastes/silca/8/',
			'categoryCode' => "SILCA Whitening",
			'price' => '130',
		],
		[
			'url' => 'toothpastes/silca/9/',
			'categoryCode' => "SILCA Whitening",
			'price' => '130',
		],
		[
			'url' => 'toothpastes/silca/10/',
			'categoryCode' => "SILCA Whitening",
			'price' => '130',
		],
		[
			'url' => 'toothpastes/silca/11/',
			'categoryCode' => "SILCA Complete",
			'price' => '130',
		],
		[
			'url' => 'toothpastes/silca/12/',
			'categoryCode' => "SILCA Complete",
			'price' => '130',
		],
		[
			'url' => 'toothpastes/silca/13/',
			'categoryCode' => "SILCA Complete",
			'price' => '130',
		],
		[
			'url' => 'toothpastes/silca/58/',//нет
			'categoryCode' => "SILCA Complete",
			'price' => '130',
		],
		[
			'url' => 'toothbrushes/silca/47/',
			'categoryCode' => "toothbrushes",
			'price' => '90',
		],
		[
			'url' => 'toothbrushes/silca/48/',
			'categoryCode' => "toothbrushes",
			'price' => '90',
		],
		[
			'url' => 'toothbrushes/silca/79/',
			'categoryCode' => "toothbrushes",
			'price' => '150',
		],
		[
			'url' => 'toothbrushes/silca/49/',
			'categoryCode' => "toothbrushes",
			'price' => '110',
		],
		[
			'url' => 'toothbrushes/silca/50/',//нет
			'categoryCode' => "toothbrushes",
			'price' => '110',
		],
		[
			'url' => 'toothbrushes/silca/52/',//нет
			'categoryCode' => "toothbrushes",
			'price' => '130',
		],
		[
			'url' => 'toothbrushes/silca/59/',
			'categoryCode' => "toothbrushes",
			'price' => '90',
		],
	
		[
			'url' => 'opolaskivatel/silcamed/64/',//нет
			'categoryCode' => "opolaskivatel",
			'price' => '100',
		],
		[
			'url' => 'opolaskivatel/silcamed/65/',//нет
			'categoryCode' => "opolaskivatel",
			'price' => '100',
		],
		[
			'url' => 'opolaskivatel/silcamed/66/',//нет
			'categoryCode' => "opolaskivatel",
			'price' => '100',//100
		],
		[
			'url' => 'opolaskivatel/silcamed/119/',
			'categoryCode' => "opolaskivatel",
			'price' => '80',
		],
		[
			'url' => 'opolaskivatel/silcamed/120/',
			'categoryCode' => "opolaskivatel",
			'price' => '80',
		],
		[
			'url' => 'Osvezhiteli/SILCAMED/74/',
			'categoryCode' => "Osvezhiteli",
			'price' => '100',
		],
		[
			'url' => 'Osvezhiteli/SILCAMED/75/',
			'categoryCode' => "Osvezhiteli",
			'price' => '100',
		],
		[
			'url' => 'Osvezhiteli/SILCAMED/76/',
			'categoryCode' => "Osvezhiteli",
			'price' => '100',
		],
		[
			'url' => 'zubnaya_nitka/SILCAMED/137/',
			'categoryCode' => "zubnaya_nitka",
			'price' => '60',
		],
		[
			'url' => 'v_dorogu/travel_kit/139/',//нет
			'categoryCode' => "v_dorogu",
			'price' => '100',
		],
		[
			'url' => 'v_dorogu/travel_kit/140/',
			'categoryCode' => "v_dorogu",
			'price' => '140',
		],
		[
			'url' => 'v_dorogu/travel_kit/141/',
			'categoryCode' => "v_dorogu",
			'price' => '90',
		],
		[
			'url' => 'kit/Crystal_white/138/',
			'categoryCode' => "kit",
			'price' => '450',
		],
	];
	
	//$categoryId = [
	//	'SILCA Family' => '1',
	//	'SILCA Whitening' => '2',
	//	'SILCA Complete' => '3',
	//	'toothbrushes' => '4'
	//];
	
	$categoriesArr = [
	
		"toothpastes" => [
			"CODE" => "toothpastes",
			"ID" => 1,
			"NAME" => "",
		],
		"SILCA Family" => [
			"CODE" => "SILCA Family",
			"ID" => 2,
			"NAME" => "",
			"PARENT_ID" => 1
		],
		"SILCA Whitening" => [
			"CODE" => "SILCA Whitening",
			"ID" => 3,
			"NAME" => "",
			"PARENT_ID" => 1
		],
		"SILCA Complete" => [
			"CODE" => "SILCA Complete",
			"ID" => 4,
			"NAME" => "",
			"PARENT_ID" => 1
		],
		"toothbrushes" => [
			"CODE" => "toothbrushes",
			"ID" => 5,
			"NAME" => "",
		],
		"opolaskivatel" => [
			"CODE" => "opolaskivatel",
			"ID" => 6,
			"NAME" => "",
		],
		"Osvezhiteli" => [
			"CODE" => "Osvezhiteli",
			"ID" => 7,
			"NAME" => "",
		],
		"zubnaya_nitka" => [
			"CODE" => "zubnaya_nitka",
			"ID" => 8,
			"NAME" => "",
		],
		"v_dorogu" => [
			"CODE" => "v_dorogu",
			"ID" => 9,
			"NAME" => "",
		],
		"kit" => [
			"CODE" => "kit",
			"ID" => 10,
			"NAME" => "",
		],
	];
	
	$counter = 1;
	$offers = array();
	$categoryArr = array();
	$categoryCode = array();
	
	foreach($productsArr as $product){
		
		$content = file_get_contents($catalogHttp . $product['url']);
		
		if(!empty($content)){
			$content = iconv('windows-1251','utf-8',$content);
		}
		
		$doc = phpQuery::newDocumentHTML( $content );
		$query = $doc->find('.catalog-item');
		$name = $query->find('h1')->html();
		$imgSrc = $query->find('.catalog-item__img a:first-child')->attr('href');
		$vendorCode = $query->find('.catalog-item__table tr:nth-child(8) td')->text();
		$barcode = $query->find('.catalog-item__table tr:last-child td')->text();
		$description = $query->find('.catalog-item__text')->text();
		$price = $product['price'];
		
		if(empty($price)){
			echo $catalogHttp . $product['url'] . '<br>';
		}

		$tempArr = [
			"name" => "offer",
			"attr" => ['id' => $vendorCode, "available" => "true"],
			"child" => [
				[
					"name" => "url",
					"text" => $catalogHttp . $product['url'],
				],
				[
					"name" => "price",
					"text" => $price,
				],
				[
					"name" => "name",
					"text" => $name,
				],
				[
					"name" => "currencyId",
					"text" => "RUR",
				],
				[
					"name" => "categoryId",
					"text" => $categoriesArr[$product['categoryCode']]["ID"],
				],
				[
					"name" => "picture",
					"text" => $imgSrc,
				],
				[
					"name" => "vendor",
					"text" => "SILCA",
				],
				[
					"name" => "vendorCode",
					"text" => $vendorCode,
				],
				[
					"name" => "barcode",
					"text" => $barcode,
				],
				[
					"name" => "description",
					"text" => $description,
				],
			]
		];
		
		$offers[] = $tempArr;
		
		if( !in_array($product['categoryCode'], $categoryCode) ){
			$categoryCode[] = $product['categoryCode'];
		}
		
		//$categoryArr[] = $tempCategory;
		$counter++;
	}
	//require "ofrs.php";
	
	$parentStock = [];
	
	foreach( $categoryCode as $item ){
		
		$catAttr = ['id' => $categoriesArr[$item]["ID"]];
		
		if( isset($categoriesArr[$item]["PARENT_ID"]) ){
			$catAttr['parentId'] = $categoriesArr[$item]["PARENT_ID"];
			
			if( !in_array($catAttr['parentId'], $parentStock) ){
				
				$categoryArr[] = [
					"name" => "category",
					"attr" => ["id" => $catAttr['parentId']],
					"text" => getNameById($catAttr['parentId'], $categoriesArr)
				];
				$parentStock[] = $catAttr['parentId'];
			}
		}
		
		$tempCategory = [
			"name" => "category",
			"attr" => $catAttr,
			"text" => empty($categoriesArr[$item]["NAME"]) ? $categoriesArr[$item]["CODE"] : $categoriesArr[$item]["NAME"]
		];
		
		$categoryArr[] = $tempCategory;
	}
	
	$arr = array(
		"name" => "yml_catalog",
		"attr" => ["date" => date('Y-m-d H:i')],
		"text" => "",
		"child" => [
			[
				"name" => "shop",
				"attr" => [],
				"text" => "",
				"child" => [
					[
						"name" => "name",
						"text" => "ООО 'РусДент'",
					],
					[
						"name" => "company",
						"text" => "РусДент",
					],
					[
						"name" => "url",
						"text" => "http://silca.info",
					],
					[
						"name" => "currencies",
						"child" => [
							[
								"name" => "currency",
								"attr" => ["id" => "RUR", "rate" => "1"],
							]
						]
					],
					[
						"name" => "categories",
						"child" => $categoryArr
					],
					[
						"name" => "offers",
						"child" => $offers
					]
				]
			]
		]
	);
	
	$toXml = new TO_XML\ArrayToXML($arr);
	
	function getNameById($id, $categories){
		
		foreach($categories as $cat){
			if($cat["ID"] == $id){
				return empty($cat["NAME"]) ? $cat["CODE"]: $cat["NAME"];
			}
		}
		return "parent";
	}