<?php

	/**
	 * Elgg default layout
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.org/
	 */

	$entities = $vars['entities'];
	if (is_array($entities) && sizeof($entities) > 0) {
		foreach($entities as $entity)
			echo elgg_view_entity($entity);
	}

?>