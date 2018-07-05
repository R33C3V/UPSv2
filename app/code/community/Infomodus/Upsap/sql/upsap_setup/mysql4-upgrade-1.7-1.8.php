<?php
$installer = $this;

/* @var $installer Mage_Sales_Model_Entity_Setup */

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('upsapshippingmethod'), 'weight_min',
    'double(5,2) DEFAULT 0', 0
);
$installer->getConnection()->addColumn($installer->getTable('upsapshippingmethod'), 'weight_max',
    'double(5,2) DEFAULT 0', 0
);
$installer->endSetup();

