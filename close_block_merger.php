<?php
	/*	
		PHP Web Article Extractor
		A PHP library to extract the primary article content of a web page.
		
		Based on the whitepaper 'Boilerplate detection using Shallow Text Features'
		whitepaper http://www.l3s.de/~kohlschuetter/publications/wsdm187-kohlschuetter.pdf
		and 'boilerpipe' by Dr. Christian Kohlschütter
	
		Code author: Luke Hines
		Licence: PHP Web Article Extractor is licensed under the MIT License.
	*/
	
	class CloseBlockMerger
	{
		const BLOCK_DISTANCE = 1;
	
		public static function Merge(&$textDocument, $onlyContent)
		{
			foreach ($textDocument->textBlocks as $textBlock) 
			{

			}
		}
	}
?>  