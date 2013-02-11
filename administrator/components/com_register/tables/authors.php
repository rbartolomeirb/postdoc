<?php
/**
 * Joomla! 1.5 component Register
 *
 * @version $Id: register.php 2009-07-07 09:14:21 svn $
 * @author
 * @package Joomla
 * @subpackage register
 * @license GNU/GPL
 *
 * Manages the registration in congresses.
 *
 * This component file was created using the Joomla Component Creator by Not Web Design
 * http://www.notwebdesign.com/joomla_component_creator/
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include library dependencies
jimport('joomla.filter.input');

/**
 * Table class
 *
 * @package          Joomla
 * @subpackage		Register
 */
class TableAuthors extends JTable {

	var $id = null;
	var $paper_id = null;
	var $name = null;
	var $initials = null;
	var $order = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__reg_authors', 'id', $db);
	}

	/**
	 * Overloaded check method to ensure data integrity
	 *
	 * @access public
	 * @return boolean True on success
	 */
	function check() {
		return true;
	}

}
?>