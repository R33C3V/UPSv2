<?php
/*
 * Author Rudyuk Vitalij Anatolievich
 * Email rvansp@gmail.com
 * Blog www.cervic.info
 */
?>
<?php

class Infomodus_Upsap_Model_Mysql4_Errorlog extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('upsap/errorlog', 'aperr_id');
    }
}