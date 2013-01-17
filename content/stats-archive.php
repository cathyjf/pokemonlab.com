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

<?php startblock('title-postfix') ?> - Stats archive<?php endblock() ?>

<?php startblock('head-extra') ?>
<meta name="description" content="Pok&eacute;mon usage statistics from October 2007 to July 2008." />
<style type="text/css">
#stats, #stats li ul, #stats li ol {
    display: none;
}
</style>
<?php endblock() ?>

<?php startblock('content') ?>

<h1>Stats archive</h1>

<p>This page archives the <a href="about#type-of-statistics">statistics</a> collected from <a href="contributors#Cathy">Cathy</a>'s server during October 2007 to July 2008.<br />The statistics for <a href="history#2008">Smogon Server</a> from July 2008 to July 2010 are <a href="http://www.smogon.com/forums/forumdisplay.php?f=114">archived on Smogon</a>.</p>

<p>The following explanation of these stats is from the original "Pok&eacute;mon Usage Statistics" page and was written by <a href="contributors#Cathy">Cathy</a> in October 2007:</p>

<div class="detailed-list-info">

<p>For the purposes of these statistics, a "usage" is defined as one party in a battle sending out that Pok&eacute;mon at least once (but if it is sent out more than once by the same player in the same battle, it is still just one usage). This means that players who play more battles will count for more usages, which is desired because you are more likely to encounter these players, since all matches are random.</p>

<p>For the <strong>weighted statistics</strong>, rather than ranking by usage, we rank by "points". Each usage scores the Pok&eacute;mon a number of points equal to its trainer's conservative estimated rating at the point when this list was compiled, with a minimum of one point per usage (so a person with a -300 rating using a Pok&eacute;mon still scores it one point).</p>

<p>The list of <strong>most popular leads</strong> is simply a usage list that only counts Pok&eacute;mon who were sent out at the start of a battle (i.e. leads).</p>

</div>

<p>Here are the archived statistics:</p>

<ul id="stats">
<?php require_once('stats-construct-list.php') ?>
</ul>

<p>You can go back to reading about the <a href="about#type-of-statistics">type of statistics collected by Shoddy Battle</a>.</p>

<script type="text/javascript">
function loadSection(month, ubers, type, link) {
    if (!toggleSection(link)) {
        return;
    }
    var list = link.siblings().first();
    list.html("<li><img src=\"images/progress.gif\" alt=\"Loading...\" /></li>");
    var url = "stats-load-data?month=" + month + "&type=" + type;
    if (ubers) {
        url += "&ubers";
    }
    list.load(url);
    _gaq.push([ '_trackEvent', 'Stats Load Data', url ]);
}
function toggleSection(link) {
    var s = (link.text() == "+");
    link.text(s ? "-" : "+");
    link.siblings().first().toggle();
    return s;
}
$('#stats').show();
</script>

<?php endblock() ?>

