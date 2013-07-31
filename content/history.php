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

$_CURRENT_SECTION = 'history';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - History<?php endblock() ?>

<?php startblock('head-extra') ?>
<meta name="description" content="Learn the history of Shoddy Battle and Pok&eacute;mon Lab." />
<?php endblock() ?>

<?php startblock('content') ?>

<h1 id="history">History</h1>

<p>
Shoddy Battle was the main Pok&eacute;mon simulator used by the competitive Pok&eacute;mon community from July 2007 until November 2010. This page will provide a brief history of those 3.5 years. On another page, you can read about Shoddy Battle's <a href="about">contributions to competitive Pok&eacute;mon</a>.
</p>

<p>
In order to understand the context of Shoddy Battle, it is useful to understand the purpose of Pok&eacute;mon simulators in general, so this section will provide a brief background on them.
</p>

<h2>About Pok&eacute;mon simulators</h2>

<p>
Pok&eacute;mon is a fairly deep game that involves hundreds of distinct characters, moves, items, abilities, and tactics.
</p>

<p>
Playing competitive Pok&eacute;mon involves creating a team of six Pok&eacute;mon (including picking their statistics, moves, etc.) and then playing against another person and her or his team. There are two levels of strategy involved &mdash; first, creating a team that will do well without knowing what team the opponent will be using; and second, picking the optimal moves during the battle with the opponent itself.
</p>

<p>
The official Pok&eacute;mon games released by Nintendo&reg; are primarily single player games. They include the ability to play against human opponents, but many players find that mode to be suboptimal for competitive play because making changes to one's team requires a large amount of work. Competitive players prefer to be able to make changes at will and try new things easily, which is not possible in the official Nintendo&reg; games.
</p>

<p>
Pok&eacute;mon simulators are computer programs that allow people to play competitive Pok&eacute;mon matches against human opponents. These programs are optimised for competitive play and allow arbitrary teams to be constructed instantly, in order to facilitate trying new strategies easily.
</p>

<h2>History of Shoddy Battle and Pok&eacute;mon Lab</h2>

<h3 id="2007">2006&ndash;2007</h3>

<p>Before Shoddy Battle, the main Pok&eacute;mon simulator was "NetBattle", which was closed source and not actively maintained.</p>

<p>The 4th generation of Pok&eacute;mon began with the release of <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon_Diamond_and_Pearl">Pok&eacute;mon Diamond and Pearl</a> in September 2006 in Japan and April 2007 in North America. The competitive Pok&eacute;mon community was eager to play simulated 4th generation Pok&eacute;mon, but it was not supported by NetBattle.</p>

<p>On July 5, 2007, <a href="contributors#Cathy">Cathy</a> and <a href="contributors#bearzly">bearzly</a> released Shoddy Battle, which was a free and open source 4th generation simulator. (See <a href="about#free-software">here</a> for more information on the significance of Shoddy Battle's free and open source status.) Shoddy Battle quickly became the <em>de facto</em> simulator of the competitive Pok&eacute;mon community. Shoddy Battle remained the main simulator of the competitive Pok&eacute;mon community until the conclusion of the 4th generation in late 2010.</p>

<p>
Shoddy Battle's <a href="about#statistical-data">statatistical data collection and user ranking functionality</a> went live in October 2007 and helped usher in a new era of competitive Pok&eacute;mon based heavily on statistical data. You can read more about Shoddy Battle's statistical functions <a href="about#statistical-data">here</a>.</p>

<h3 id="2008">2008</h3>

<p>In July 2008, <a href="http://smogon.com">Smogon</a> (the largest competitive Pok&eacute;mon community) began hosting a Shoddy Battle server, which almost immediately became the most popular server. Until that point, <a href="contributors#Cathy">Cathy</a> had hosted the most popular server. <a href="contributors#Cathy">Cathy</a> did not originally intend to host a server, but she had done so as a courtesy to the community. Once Smogon began to host a server, <a href="contributors#Cathy">Cathy</a> discontinued her server shortly thereafter.</p>

<p>Smogon also supported a second server running a modified version of the Pok&eacute;mon game (the <a href="http://www.smogon.com/forums/forumdisplay.php?f=66">Create-a-Pok&eacute;mon Project</a>), which was made possible by Shoddy Battle's robust <a href="about#extension">support for extension and customisation</a>.</p>

<p>On September 13, 2008, Nintendo&reg; released <a href="https://en.wikipedia.org/wiki/Pok&eacute;mon_Platinum">Pokémon Platinum</a>. Thanks to <a href="contributors#AmazingAmpharos">Amazing Ampharos</a>, Shoddy Battle was able to support Platinum starting on September 19, 2008 (very shortly after the release), which further enhanced the popularity of the program.</p>

<h3 id="2009">2009</h3>

<p>
In April 2009, Smogon and Shoddy Battle became formally affiliated. The discussion forum for Shoddy Battle was hosted on Smogon from April 2009 to November 2010, and Smogon continues to host an <a href="http://www.smogon.com/forums/forumdisplay.php?f=85">archive</a> of those posts. (From November 2010 to December 2012, the discussion forum was hosted on this web site, and you can visit an archive <a href="forum-archive/">here</a>.)</p>

<p>
<a href="contributors#Cathy">Cathy</a> become an Administrator of the Smogon community in September 2009 and helped administer Smogon's Shoddy Battle server from that point on.
</p>

<h3 id="2010">2010</h3>

<p>
Shoddy Battle reached its peak popularity in 2010, with the Smogon server alone hosting around 700,000 battles per month. More information on Shoddy Battle's scalability is available <a href="about#scalability">here</a>.
</p>

<p>
In September 2010, <a href="contributors#Cathy">Cathy</a> and <a href="contributors#bearzly">bearzly</a> released a major revision to Shoddy Battle, which was called Pok&eacute;mon Lab (it had been called Shoddy Battle 2 during development). Pok&eacute;mon Lab did not get as much use as the previous version because it was released near the end of the 4th generation; however, it still contained some interesting ideas.
</p>

<p>
With the conclusion of the 4th generation, Shoddy Battle has been superseded by other simulators such as <a href="http://pokemonshowdown.com/">Pok&eacute;mon Showdown</a>. Shoddy Battle remains notable for the changes it effected in the Pokémon community.
</p>

<h3 id="2012">2012</h3>

<p>
<a href="contributors#Cathy">Cathy</a> created the present <code>pokemonlab.com</code> web site in December 2012 in order to provide historical information on the significance of Shoddy Battle and Pok&eacute;mon Lab.
</p>

<h3 id="conclusion">Conclusion</h3>

<p>Shoddy Battle significantly changed the landscape of competitive Pok&eacute;mon. On another page, you can read more about Shoddy Battle's <a href="about">contributions to competitive Pok&eacute;mon</a>. If you enjoyed using Shoddy Battle or have questions or comments, please feel free to email <a href="contributors#Cathy">Cathy</a>&nbsp;(<a href="mailto:cathy@pokemonlab.com">cathy@pokemonlab.com</a>) and <a href="contributors#bearzly">bearzly</a>&nbsp;(<a href="mailto:bearzly@pokemonlab.com">bearzly@pokemonlab.com</a>) and let them know. They would appreciate hearing from you.</p>

<?php endblock(); ?>
