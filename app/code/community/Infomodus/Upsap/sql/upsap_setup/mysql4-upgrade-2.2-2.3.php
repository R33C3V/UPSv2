<?php
$installer = $this;

/* @var $installer Mage_Sales_Model_Entity_Setup */

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('upsapshippingmethod'), 'is_country_all',
    'tinyint(1) NULL DEFAULT 1'
);
$installer->endSetup();

