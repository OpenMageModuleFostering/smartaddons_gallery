<?php
/*------------------------------------------------------------------------
 # SM Gallery - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Gallery_Model_System_Config_Source_ListEffect
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'slide',	'label' => Mage::helper('gallery')->__('Slide')),
			array('value' => 'fade', 		'label' => Mage::helper('gallery')->__('Fade')),
		);
	}
}
