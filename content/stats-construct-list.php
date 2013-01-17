<?php
/**
 * This file is part of the pokemonlab.com web site.
 * Copyright (C) 2012-2013  Cathy J. Fitzpatrick <cathy@pokemonlab.com>
 *
 * This web site is free. This file is dual licensed under
 *
 *   1) the Creative Commons Attribution-ShareAlike 3.0 Unported License
 *        <http://creativecommons.org/licenses/by-sa/3.0>, and
 *
 *   2) the GNU Affero General Public License, version 3 or later
 *        <https://www.gnu.org/licenses/agpl-3.0.html>.
 *
 * You may use, modify, or redistribute this file pursuant to either one of the
 * above licences, whichever is more convenient for you.
 *
 * See <http://pokemonlab.com/sources> for more details, including information
 * on how to attribute content to this web site.
 */


/**
 * Notes about this file:
 *
 *   1) This file is old and predates the December 2012 site. It was written
 *      in 2007 and was part of the original shoddybattle.com web site.
 *
 *   2) In the unlikely event you want to reuse this code, you must provide
 *      your own setup-database.php file to set up a database connection.
 */

include_once('setup-database.php');

$q = mysql_query('SELECT DISTINCT month FROM stats ORDER BY month DESC');
while (list($month) = mysql_fetch_row($q)) {
    echo "<li>$month (<a 
        onmousedown=\"toggleSection('stats_$month', this);\" 
        href=\"javascript:void(0);\">+</a>)<ul id=\"stats_$month\">";
    $ubers = mysql_num_rows(mysql_query("SELECT 
        DISTINCT ubers 
        FROM stats WHERE month='$month'"));
    $qq = mysql_query("SELECT DISTINCT type FROM 
        stats WHERE month='$month' ORDER BY type");
    $types = array();
    while (list($type) = mysql_fetch_row($qq)) {
        $type{0} = strtoupper($type{0});
        $types[] = $type;
    }
    for ($i = 0; $i < $ubers; ++$i) {
        $t = ($i == 0) ? 'Standard' : 'Ubers';
        echo "<li>$t (<a
            onmousedown=\"toggleSection('stats_$month-$t', this);\"
            href=\"javascript:void(0);\">+</a>)<ul id=\"stats_$month-$t\">";
        foreach ($types as $j) {
            $x = 'stats_' . $month . '_' . $t . '_' . strtolower($j);
            echo "<li>$j (<a
                onmousedown=\"loadSection('$x', this);\"
                href=\"javascript:void(0);\">+</a>)<ol id=\"$x\">";
            echo '<li></li>'; // XHTML does not allow empty lists
            echo '</ol></li>';
        }
        echo '</ul></li>';
    }
    echo '</ul></li>';
}
?>
