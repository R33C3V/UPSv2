<?php
$installer = $this;

/* @var $installer Mage_Sales_Model_Entity_Setup */

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('upsapshippingmethod'), 'company_type',
    'varchar(30) NULL DEFAULT "ups"'
);
$installer->endSetup();

