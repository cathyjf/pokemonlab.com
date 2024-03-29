<?php
/**
 * This file is part of the pokemonlab.com website.
 * Copyright (C) 2012-2013  Cathy J. Fitzpatrick <cathy@pokemonlab.com>
 *
 * This website is free. This file is dual licensed under
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
 * on how to attribute content to this website.
 */


/**
 * Notes about this file:
 *
 *   1) This file is old and predates the December 2012 site. It was written
 *      in 2007 and was part of the original shoddybattle.com website.
 *
 *   2) In the unlikely event you want to reuse this code, you must provide
 *      your own setup-database.php file to set up a database connection.
 */

include_once('setup-database.php');

$month = mysql_real_escape_string($_GET['month']);
$type = mysql_real_escape_string($_GET['type']);
$ubers = isset($_GET['ubers']) ? 1 : 0;

if ($type == 'unweighted') {
    $desc = 'usages';
} else if ($type == 'weighted') {
    $desc = 'points';
} else if ($type == 'leads') {
    $desc = 'leads';
} else {
    echo 'Invalid type.';
    die;
}

$q = mysql_query("SELECT pokemon, value
                    FROM stats
                        WHERE month='$month'
                            AND type='$type'
                            AND ubers=$ubers
                    ORDER BY value DESC");

while (list($pokemon, $v) = mysql_fetch_row($q)) {
    echo "<li>$pokemon ($v $desc)</li>";
}

?>
