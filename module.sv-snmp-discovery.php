<?php
/*
 * @copyright   2023 Super-Visions BVBA
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sv-snmp-discovery/1.0.0',
	array(
		// Identification
		//
		'label' => 'SNMP Discovery',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-network-mgmt-extended/3.1.1',
            'teemip-ip-discovery/3.1.0',
			'teemip-ipv6-mgmt/3.1.1',
		),
		'mandatory' => false,
		'visible' => true,
		
		// Components
		//
		'datamodel' => array(
			'model.sv-snmp-discovery.php',
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => 'https://github.com/Super-Visions/sv-snmp-discovery',
		
		// Default settings
		//
		'settings' => array(
		),
	)
);
