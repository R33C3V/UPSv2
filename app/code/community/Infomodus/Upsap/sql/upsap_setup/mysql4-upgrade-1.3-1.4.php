<?php
$installer = $this;

/* @var $installer Mage_Sales_Model_Entity_Setup */

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('upsapshippingmethod'), 'negotiated_amount_from',
    'INT(11) DEFAULT 0', 0
);
$installer->endSetup();

