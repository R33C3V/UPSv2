<?php
/**
 * Created by PhpStorm.
 * User: Vitalij
 * Date: 19.06.15
 * Time: 0:21
 */

class Infomodus_Upsap_Model_Config_Specific
{
    public function toOptionArray()
    {
        return array(
            array('label' => Mage::helper('upsap')->__('All'), 'value' => '0'),
            array('label' => Mage::helper('upsap')->__('Specific'), 'value' => '1'),
        );
    }
}