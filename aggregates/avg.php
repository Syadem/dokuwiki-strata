<?php
/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     François KAAG <francois.kaag@cardynal.fr>
 */
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die('Meh.');

/**
 * The average aggregator.
 */
class plugin_strata_aggregate_avg extends plugin_strata_aggregate {
    function aggregate($values, $hint = null) {
		$values = array_filter($values, 'is_numeric');
		if (count($values) == 0) {
			return array("DIV#0");
		}
		else
		{
			return array(array_sum($values)/count($values));
		}       
    }

    function getInfo() {
        return array(
            'desc'=>'Average of all numeric items',
            'tags'=>array('numeric')
        );
    }
}
