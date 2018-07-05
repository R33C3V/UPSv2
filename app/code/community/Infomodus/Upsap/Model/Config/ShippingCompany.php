<?php
class Infomodus_Upsap_Model_Config_ShippingCompany
{
    public function toOptionArray()
    {
        $arr = array();
        $arr[] = array('value' => 'ups', 'label' => Mage::helper('upsap')->__('Default Magento UPS module'));
        if(Mage::helper('core')->isModuleOutputEnabled("Infomodus_Upslabel")) {
            $arr[] = array('value' => 'upsinfomodus', 'label' => Mage::helper('upsap')->__('UPS Shipping Manager Pro'));
        }
        return $arr;
    }
}