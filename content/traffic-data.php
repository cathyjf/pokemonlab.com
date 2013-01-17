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

$_CURRENT_SECTION = '';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - Traffic data<?php endblock() ?>

<?php startblock('content') ?>

<h1>Traffic data</h1>

<p>The following data shows the traffic (measured in number of battles played per month) on the Official/Smogon server between October 2007 and July 2010. A graph of this data is shown <a href="about#traffic-graph">here</a>.</p>

<table>
<tr>
<td class="traffic-table-cell">
<table>
<thead>
    <tr>
        <th scope="col">Month</th>
        <th scope="col">Battles</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">2007-10</th>
        <td>113855</td>
    </tr>
    <tr>
        <th scope="row">2007-11</th>
        <td>117084</td>
    </tr>
    <tr>
        <th scope="row">2007-12</th>
        <td>160163</td>
    </tr>
    <tr>
        <th scope="row">2008-01</th>
        <td>169251</td>
    </tr>
    <tr>
        <th scope="row">2008-02</th>
        <td>163375</td>
    </tr>
    <tr>
        <th scope="row">2008-03</th>
        <td>170240</td>
    </tr>
    <tr>
        <th scope="row">2008-04</th>
        <td>139374</td>
    </tr>
    <tr>
        <th scope="row">2008-05</th>
        <td>152103</td>
    </tr>
    <tr>
        <th scope="row">2008-06</th>
        <td>184475</td>
    </tr>
    <tr>
        <th scope="row">2008-07</th>
        <td>287956</td>
    </tr>
    <tr>
        <th scope="row">2008-08</th>
        <td>248774</td>
    </tr>
    <tr>
        <th scope="row">2008-09</th>
        <td>250527</td>
    </tr>
</tbody>
</table>
</td>
<td class="traffic-table-cell">
<table>
<thead>
    <tr>
        <th scope="col">Month</th>
        <th scope="col">Battles</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">2008-10</th>
        <td>235565</td>
    </tr>
    <tr>
        <th scope="row">2008-11</th>
        <td>257808</td>
    </tr>
    <tr>
        <th scope="row">2008-12</th>
        <td>264825</td>
    </tr>
    <tr>
        <th scope="row">2009-01</th>
        <td>324533</td>
    </tr>
    <tr>
        <th scope="row">2009-02</th>
        <td>305669</td>
    </tr>
    <tr>
        <th scope="row">2009-03</th>
        <td>345124</td>
    </tr>
    <tr>
        <th scope="row">2009-04</th>
        <td>386110</td>
    </tr>
    <tr>
        <th scope="row">2009-05</th>
        <td>456457</td>
    </tr>
    <tr>
        <th scope="row">2009-06</th>
        <td>448598</td>
    </tr>
    <tr>
        <th scope="row">2009-07</th>
        <td>524240</td>
    </tr>
    <tr>
        <th scope="row">2009-08</th>
        <td>537447</td>
    </tr>
    <tr>
        <th scope="row">2009-09</th>
        <td>485335</td>
    </tr>
</tbody>
</table>
</td>
<td class="traffic-table-cell">
<table>
<thead>
    <tr>
        <th scope="col">Month</th>
        <th scope="col">Battles</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">2009-10</th>
        <td>526463</td>
    </tr>
    <tr>
        <th scope="row">2009-11</th>
        <td>476798</td>
    </tr>
    <tr>
        <th scope="row">2009-12</th>
        <td>531307</td>
    </tr>
    <tr>
        <th scope="row">2010-01</th>
        <td>500442</td>
    </tr>
    <tr>
        <th scope="row">2010-02</th>
        <td>447633</td>
    </tr>
    <tr>
        <th scope="row">2010-03</th>
        <td>503375</td>
    </tr>
    <tr>
        <th scope="row">2010-04</th>
        <td>632398</td>
    </tr>
    <tr>
        <th scope="row">2010-05</th>
        <td>689709</td>
    </tr>
    <tr>
        <th scope="row">2010-06</th>
        <td>644192</td>
    </tr>
    <tr>
        <th scope="row">2010-07</th>
        <td>605971</td>
    </tr>
</tbody>
</table>
</td>
</tr>
</table>

<p>
Notes:
</p>

<ul class="detailed-list">

<li>
From 2007-10 to 2008-06, inclusive, the data is from <a href="contributors#Cathy">Cathy</a>'s "Official Server", which was the most popular server for that period.
</li>

<li>
From 2008-08 to 2010-07, inclusive, the data is from the <a href="history#2008">Smogon Server</a>, which was the most popular server for that period.
</li>

<li>For 2008-07, the month in which the Smogon Server was established, the figure includes both the number of battles played on the Official Server (118998) and the number of battles played on the Smogon Server (168958), for a total of 287956 battles played that month.</li>

</ul>

<p>You can return to reading about <a href="about#traffic-graph">Shoddy Battle's scalability</a>.</p>

<?php endblock(); ?>

