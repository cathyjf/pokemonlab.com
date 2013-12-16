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

$_CURRENT_SECTION = 'home';
require 'layout.php';
?>

<?php startblock('head-extra') ?>
<meta name="description" content="Pok&eacute;mon Lab (formerly Shoddy Battle) is a free and open source Pok&eacute;mon simulator created by Cathy J. Fitzpatrick and Benjamin Gwin." />
<?php endblock() ?>

<?php startblock('content') ?>

<h1>Welcome</h1>

<p>
<em>Shoddy Battle</em> (later known as <em>Pok&eacute;mon Lab</em>) is a <a href="sources">free and open source</a> <a href="history">Pok&eacute;mon simulator</a> created by <a href="contributors#Cathy" title="Cathy">Cathy&nbsp;J.&nbsp;Fitzpatrick</a> and <a href="contributors#bearzly" title="bearzly">Benjamin&nbsp;Gwin</a> and first released in July 2007. It allows users to play Pok&eacute;mon matches against other people online.</p>

<p>Shoddy Battle simulates the 4th generation of Pok&eacute;mon games, which began with the release of <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon_Diamond_and_Pearl">Pok&eacute;mon Diamond and Pearl</a> in September 2006 in Japan and April 2007 in North America. During the 4th generation (roughly 2007&ndash;2010), Shoddy Battle was the main Pok&eacute;mon simulator used by the competitive Pok&eacute;mon community.
</p>

<p>On this website, you can learn about Shoddy Battle and its <a href="about">contributions to competitive Pok&eacute;mon</a>. You can also read about the <a href="history">history of Shoddy Battle</a>. The program itself is also still available to <a href="downloads">play</a>.</p>

<h1>Advances</h1>

<p>Shoddy Battle ushered in a number of significant advances to the Pok&eacute;mon community.<br />You can read the full details <a href="about">here</a>. A summary appears below.</p>

<ul class="detailed-list">

<li><a href="about#free-software">Free, open source, and cross-platform software</a>
<div class="detailed-list-info">

<p>Before Shoddy Battle, previous simulators had been closed source and controlled by particular individuals. By contrast, Shoddy Battle was truly a community project &mdash; its open design led to improved security, greater sense of community ownership, enhanced understanding of Pok&eacute;mon mechanics (because interested users could and did read the <a href="sources">source code</a>), and made possible <a href="contributors">contributions</a> by anyone who wanted to help. The Shoddy Battle codebase was also re-used by several other Pok&eacute;mon projects.</p>

<p>Shoddy Battle's open source nature and the benefits that flowed from it effected a significant shift in the Pok&eacute;mon community and all subsequent simulators have continued to be free and open source.</p>

</div>
</li>

<li><a href="about#scalability">Scalability</a>
<div class="detailed-list-info">

<p>Shoddy Battle arrived during an era of unprecedented growth in the size of the competitive Pok&eacute;mon community. It supported hundreds of concurrent users and hosted around 700,000 battles per month at its peak &mdash; about one battle starting every four seconds.</p>

</div>
</li>

<li><a href="about#extension">Extension and customisation</a>
<div class="detailed-list-info">

<p>
Shoddy Battle was designed from the ground up to be extensible; it included features that allowed users to design and play modified versions of the Pok&eacute;mon game. Customised games could include modified Pok&eacute;mon or even entirely new Pok&eacute;mon characters, as well as new moves, items, abilities, and rules. The creation of custom games proved popular and was the focus of a particular subset of the community (the <a href="http://www.smogon.com/forums/forumdisplay.php?f=66" rel="nofollow">Create-a-Pok&eacute;mon Project</a>).
</p>
<p>
Shoddy Battle and Pok&eacute;mon Lab also supported extension through bots &mdash; that is, programs that joined the server and interacted with other users. Some bots helped with moderation tasks, whereas others included <abbr title="Artificial Intelligence">AI</abbr> code and could challenge human players to matches, such as <a href="http://doublewise.net/pokemon/">Technical Machine</a>.
</p>

</div>
</li>

<li><a href="about#statistical-data">Statistical data and user ranking</a>
<div class="detailed-list-info">

<p>
Shoddy Battle was the beginning of a new era of Pok&eacute;mon based heavily on statistical data.
</p>

<p>Shoddy Battle was the first simulator to provide statistical information on what Pok&eacute;mon and strategies were used by players. This information facilitated sophisticated analyses of the game and informed tiering debates. The presence of statistical data also changed the game itself by providing players with information that could help them in their battles against other people, which also paved the way for sophisticated <abbr title="Artificial Intelligence">AI</abbr> code. Statistics also made it possible to observe shifts in the metagame over time and to evaluate the consequences of changes in the rules.
</p>

<p>Shoddy Battle applied the same statistical philosophy to ranking players. It was the first simulator to include a match-making facility (the "ladder") and a rating system. Together with the statistics on in-game trends, the ranking data helped understand the differences in Pok&eacute;mon play between better and worse players.</p>

</div>
</li>

</ul>

<p>Later Pok&eacute;mon simulators have followed the path set by Shoddy Battle and continue to expand on the above advances. You can read the full details <a href="about">here</a>.</p>

<p>You can also learn about the history of Shoddy Battle <a href="history">here</a>.</p>

<h1>Status</h1>

<p>
With the conclusion of the 4th generation, Shoddy Battle has been superseded by other simulators such as <a href="http://pokemonshowdown.com/">Pok&eacute;mon Showdown</a>. Shoddy Battle remains notable for the changes it effected in the Pok&eacute;mon community.
</p>

<?php require_once('status-footer.php') ?>

<?php endblock() ?>

