<?php
/**
 * This file is part of the pokemonlab.com web site.
 * Copyright (C) 2012-2013  Cathy Fitzpatrick <cathy@pokemonlab.com>
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
 * See <http://pokemonlab.com/licence> for more details, including information
 * on how to attribute content to this web site.
 */

$_CURRENT_SECTION = 'advances';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - Advances<?php endblock() ?>

<?php startblock('content') ?>

<h1 id="introduction"><a href="#introduction">&sect;</a> Advances to competitive Pok&eacute;mon</h1>

<p>Shoddy Battle was released by <a href="contributors#Cathy">Cathy</a> and <a href="contributors#bearzly">bearzly</a> on July 7, 2007 and it ushered in a number of significant advances in the Pok&eacute;mon community, changing the face of competitive Pok&eacute;mon in ways that have been continued by subsequent simulators. This page will describe some of Shoddy Battle's contributions to the competitive Pok&eacute;mon community.</p>

<p>
Table of contents:
</p>
<ul>
<li><a href="#free-software">Free, open source, and cross-platform software</a></li>
<li><a href="#scalability">Scalability</a></li>
<li><a href="#extension">Extension and customisation</a></li>
<li><a href="#statistical-data">Statistical data and user ranking</a></li>
<li><a href="#status">Status</a></li>
</ul>

<p>You can click on the <a href="#introduction">&sect;</a> symbols to return to the table of contents.</p>

<p>On another page, you can also read about the <a href="history">history of Shoddy Battle</a>.</p>

<h1 id="free-software"><a href="#introduction">&sect;</a> Free, open source, and cross-platform software</h1>

<p>Shoddy Battle was and is free and open source software, which means that the <a href="licence">source code</a> was and is available for users to review, learn from, modify, and redistribute pursuant to the applicable free software licence.</p>

<p>In July 2007, a free and open source Pok&eacute;mon simulator was a fairly revolutionary idea. NetBattle, which was the main simulator used for many years before Shoddy Battle, was closed source and this led to a number of problems, including the following:</p>
<ul class="detailed-list">
<li>The entire Pok&eacute;mon community was completely dependent on the NetBattle authors to maintain the software. If the authors lost interest, the Pok&eacute;mon community would be helpless (which had in fact happened; NetBattle was no longer being maintained). Similarly, if the NetBattle authors had a philosophical objection to a certain feature, it would not be implemented.</li>
<li>NetBattle had many security flaws stemming from its closed source nature. The authors had assumed the client would not be modified and accordingly had performed game logic in the client that should have been done on the server (i.e. the <a href="https://en.wikipedia.org/wiki/Trusted_client">trusted client</a> problem).</li>
<li>It was not possible to extend NetBattle in order to implement customised Pok&eacute;mon mechanics. Similarly, the NetBattle codebase could not be used as the base for other Pok&eacute;mon projects.</li>
<li>It was difficult to verify whether NetBattle's Pok&eacute;mon game mechanics were accurate because Pok&eacute;mon is a very probabilistic game and the only reliable way to check what probabilities are being used is to inspect the source code.</li>
<li>NetBattle only ran on Microsoft&reg; Windows&reg; and could not be ported because of the lack of source code.</li>
</ul>

<p>Shoddy Battle was free and open source from the start. Users were encouraged to inspect the source code and learn from it. Even users who did not contribute were able to use the source code to better understand the Pok&eacute;mon game mechanics or to detect errors. Additionally, Shoddy Battle was initially coded almost entirely in Java and was able to run on all common operating systems including Microsoft&reg; Windows&reg;, Apple&reg; Mac OS X&reg;, and GNU/Linux.</p>

<p>The fact that Shoddy Battle was free and open source led to a variety of long-lasting positive effects:</p>

<ul class="detailed-list">
<li>The Pok&eacute;mon community was no longer dependent on any particular person to maintain the simulator. All users were free to learn from the source and <a href="contributors">contribute to it</a>.</li>
<li>Shoddy Battle had a proper client-server network architecture which was secure and did not suffer from obvious flaws. The fact that the source code was open encouraged people to try to find security flaws (and some users did try to do this), which allowed flaws to be found and corrected faster, rather than being undetected until exploited.</li>
<li>Shoddy Battle was a much more accurate simulation than any previous simulator because users could review the source code for errors rather than having to run tests. Additionally, errors could be fixed faster because more users could solve them.</li>
<li>The availability of the source code encouraged users to extend the program to add new features. For example, <a href="contributors#DougJustDoug">DougJustDoug</a> extended Shoddy Battle to support the <a href="http://www.smogon.com/forums/forumdisplay.php?f=66">Create-a-Pok&eacute;mon Project</a>.</li>
<li>Other Pok&eacute;mon projects were able to use the Shoddy Battle codebase to provide Pok&eacute;mon battle mechanics. For example, several Pok&eacute;mon-themed <abbr title="Massive Multiplayer Online Role-Playing Game">MMORPG</abbr>s used the Shoddy Battle codebase. Open source code also made it easier for other projects to interoperate with Shoddy Battle.</li>
</ul>

<p>The open source nature of Shoddy Battle was so beneficial for the Pok&eacute;mon community that all subsequent Pok&eacute;mon simulators have been free and open source. In fact, within weeks of Shoddy Battle's release in July 2007, the developers of upcoming rival simulators, such as <a href="http://www.smogon.com/forums/showthread.php?t=64930">Smogon Competitor</a>, announced that their formerly closed source simulators would instead be open source. As of December 2012, the current most popular simulator, <a href="http://pokemonshowdown.com/">Pok&eacute;mon Showdown!</a>, is also free and open source.</p>


<h1 id="scalability"><a href="#introduction">&sect;</a> Scalability</h1>

<p>The 4th generation of Pok&eacute;mon games began with the release of <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon_Diamond_and_Pearl">Pok&eacute;mon Diamond and Pearl</a> in September 2006 in Japan and April 2007 in North America. Prior to the 4th generation, online competitive Pok&eacute;mon was a relatively niche activity. However, the release of the 4th generation games brought unprecedented levels of traffic into the fold of online competitive Pok&eacute;mon.</p>

<p>Shoddy Battle was prepared to handle the rapid increase in traffic. It supported hundreds of concurrent users (there were typically around 500 users online at a time for most of its life) and it was able to host hundreds of thousands of battles per month. Its high scalability meant it was able to handle ever-increasing traffic, far above what was initially contemplated when the program was written and far above what previous simulators were able to handle.</p>

<p>The following graph shows the number of battles played per month on the Official or Smogon server (the most popular server) between October 2007 and July 2010, inclusive:</p>

<p id="traffic-graph">
<span style="font-size: 80%; margin-left: 150px;">
Battles played per month on the Official/Smogon server (<a href="traffic-data">view data</a>)
</span><br />
<img src="images/battles-per-month.png" alt="Battles per month" />
</p>

<p>As can be seen from the graph, the <a href="traffic-data">amount of traffic</a> increased rapidly to reach over six times the initial levels (which is the level of traffic that was that contemplated during development). At its peak, around 700,000 battles were played per month on the Smogon server &mdash; around one battle starting every four seconds. Shoddy Battle served the community admirably by handling these high levels of traffic. Between October 2007 and July 2010, there were around 12.3 million battles played on the Official/Smogon server.</p>

<p>It is also worth noting that the Official/Smogon server was not the only server. There were a number of other large servers, such as the <a href="http://www.smogon.com/forums/forumdisplay.php?f=66">Create-a-Pok&eacute;mon Project</a> server and the <a href="http://www.pokemonexperte.de/">Pokemonexperte</a> server, as well as a variety of smaller niche servers.</p>

<p>In the years following Shoddy Battle, the popularity of online competitive Pok&eacute;mon has continued to grow and subsequent simulators have had to continue the tradition of high scalability set by Shoddy Battle.</p>

<h1 id="extension"><a href="#introduction">&sect;</a> Extension and customisation</h1>

<p>Unlike previous simulators, Shoddy Battle was designed from the ground up to be extensible and customisable by users.</p>

<h2 id="modification">Modification of the game</h2>

<p>
In Shoddy Battle, the individual moves, abilities, items, rules (called "clauses"), etc. were implemented using a flexible and intuitive API in order to facilitate modification, extension, and the creation of new moves, etc. The framework also allowed for the creation of entirely new Pok&eacute;mon characters. Some changes could be made with no programming, and even when programming was required, it was simple and within reach of non-programmers. Many users created modified Pok&eacute;mon games. The most popular sub-community centred on modifying on the game was the <a href="http://www.smogon.com/forums/forumdisplay.php?f=66">Create-a-Pok&eacute;mon Project</a>, but there were other groups and individuals as well.
</p>

<p>
The client-server protocol was designed so that the standard client could be used to play on a server running a modified Pok&eacute;mon game. This allowed people who modified the program to share their work without their users having to download any additional software. The standard Team Builder allowed users to build teams designed to work on any modified Pok&eacute;mon game.
</p>

<h2 id="modularity">Modularity</h2>

<p>
Shoddy Battle was designed in a modular fashion so that one part of the program could be used without the others. For example, several other projects used Shoddy Battle's implementation of the Pok&eacute;mon game mechanics, including PokeNet Global, a now-defunct <abbr title="Massive Multiplayer Online Role-Playing Game">MMORPG</abbr>.</p>

<p>The modular nature of Shoddy Battle meant that it was relatively easy to write tools that interoperate with the software. For example, <a href="contributors#Martin">Martin</a> wrote a tool to import teams from a plain text format. <a href="contributors#Cathy">Cathy</a> wrote a tool to <a href="http://www.smogon.com/dp/buildteam/">generate teams</a> based on the information in the <a href="http://www.smogon.com/dp/pokemon/">Smogon Strategy Pok&eacute;dex</a>, a community-maintained repository of information on Pok&eacute;mon game strategy. (Unfortunately, this tool is down as of December 2012.) Users released a number of interesting tools over the years.
</p>

<h2 id="bots">Bots</h2>

<p>
In contrast to previous simulators, the network protocols for Shoddy Battle and Pok&eacute;mon Lab were well-documented (and the source code was available) and simple to use. In addition, Shoddy Battle and Pok&eacute;mon Lab came with a bot framework that allowed users to readily write bots in any one of several languages (Java, Python, etc.) to join the server and interact with users.
</p>

<p>Over the years, users wrote bots to do the following sorts of tasks:</p>

<ul>
<li>automate common moderation tasks, such as delivering warnings;</li>
<li>autonomously moderate the chat, e.g., by removing spammers;</li>
<li>organise tournaments by creating pairings, directing people which matches to play, keeping track of wins (by spectating the matches), and announcing a winner;</li>
<li>provide information to users about a particular server's special features;</li>
<li>play battles with users.</li>
</ul>

<p>One impressive bot is <a href="http://doublewise.net/pokemon/">Technical Machine</a>, an <abbr title="Artificial Intelligence">AI</abbr> project by <a href="http://www.smogon.com/forums/member.php?userid=1098">david stone</a> that plays intelligent Pok&eacute;mon matches on Pok&eacute;mon Lab (and some other simulators) using a minimax-based algorithm.</p>

<h2 id="extensibility-outlook">Outlook</h2>

<p>Shoddy Battle set the bar high for extensibility and customisation features. Later simulators have provided similar facilities in order to satisfy user need; for example, <a href="http://pokemonshowdown.com/">Pok&eacute;mon Showdown!</a> also supports modified Pok&eacute;mon games.</p>

<h1 id="statistical-data"><a href="#introduction">&sect;</a> Statistical data and user ranking</h1>

<p>
Shoddy Battle was the beginning of a new era of Pok&eacute;mon based heavily on statistical data.
</p>

<p>
Shoddy Battle was the first simulator to provide statistical information on what Pok&eacute;mon and strategies were used by players. Before Shoddy Battle, there was no statistical data of this nature available. Shoddy Battle was also the first simulator to provide players with a rated matchmaking facility (the "ladder").
</p>

<p>
Shoddy Battle's focus on statistics had some significant and long-lasting effects on the community.
</p>

<h2 id="matchmaking">Matchmaking and user rating</h2>

<p>
Previous simulators had included basic mechanisms to keep track of how many matches a person had won or lost. However, Shoddy Battle was the first simulator to take a systematic and statistical approach to user rating. The Shoddy Battle matchmaking and rating system included the following features, all of which were novel for competitive Pok&eacute;mon at the time.
</p>


<h3>Rating system</h3>

<p>
Rather than a simple count of wins and losses, Shoddy Battle kept track of player skill using the <a href="http://www.glicko.net/glicko.html">Glicko2 rating system</a>. Rather than conceptualising a player's skill as a particular number, each player was assigned a probability distribution; a player's "played skill" realised in any particular game was understood as a random variable distributed according to a <a href="https://en.wikipedia.org/wiki/Logistic_distribution">logistic distribution</a> characterised by two parameters: &mu; (mean) and &sigma; (standard deviation).
</p>
<p>The value of these parameters was adjusted based on game outcomes to reflect both the player's average "played skill" in a particular match (&mu;) as well as the level of uncertainty in that value (&sigma;). For the purpose of ranking players, Shoddy Battle used a conservative estimate of the player's average "played skill" (defined as &mu;&nbsp;-&nbsp;4&nbsp;*&nbsp;&sigma;). The value of &sigma; also increased with player inactivity, reflecting an increased uncertainty in the average rating, but also serving to encourage people to play regularly, increasing activity on the server.</p>
<p>The sophisticated rating system provided for a more competitive environment and contributed to the popularity of the ladder system.</p>

<h3>Selection of opponents</h3>

<p>
Shoddy Battle did not allow players to select their own opponents for rated matches. Rather, match pairings were made "randomly" based on the relative ratings of players.
</p>

<p>
Ideally, people would be matched to somebody of similar skill to them because the game outcome of such a pairing provides more information about the skill of each player than does a match between unequal opponents. In a match between unequal opponents, the result gives very little information because it is already known that one player is much better than the other and the outcome does not help determine the degree to which that is the case (without attempting to quantify "how badly" somebody lost, which has a variety of practical and theoretical flaws, and which Shoddy Battle did not attempt to do).
</p>
<p>
Aside from the rating-theoretic benefit of matching players "randomly" based on relative ratings, the system also produced matches that would hopefully be more fun for the players. In addition, the system prevented cheating by way of fixing match outcomes because a player would not be able to guarantee a match against the collaborator in such a scheme.
</p>

<h3>Uniformity of ruleset</h3>

<p>
In Shoddy Battle, rating statistics were "local" to a particular ruleset. In other words, for each ruleset, a player had a different set of rating statistics. The purpose of this was to avoid the effect that playing under different rules might have on a player's "played skill". In theory, we might imagine that there is some underlying notion of "skill" which is predictive of skill in any ruleset; however, measuring such an underlying notion of skill has many pitfalls and typically results in meaningless ratings. Accordingly, Shoddy Battle localised rating statistics to a particular ruleset.
</p>

<p>
This system also helped players find matches quickly because it reduced the variation in rulesets being played. In Pok&eacute;mon, a team tends to be designed for a specific ruleset, and the ladder system made it much easier to find a match under the desired ruleset.
</p>

<h2 id="type-of-statistics">Type of Pok&eacute;mon statistics collected and reported</h2>

<p>Shoddy Battle collected statistics on what Pok&eacute;mon and strategies players were using in their battles. The presence of the matchmaking and rating system meant that usage statistics for ladder games could be assumed to be representative of competitive play, because all players had an incentive to play to win.</p>

<p>At first, the statistics collected and reported were fairly basic and consisted of information on how often each Pok&eacute;mon was used in each ruleset as a team-member and as a lead (initial Pok&eacute;mon). Even these basic statistics were unprecedented in the competitive Pok&eacute;mon community and had immediate practical applications and theoretical consequences (discussed below). As time went on, the statistics collected and reported became increasingly detailed and informative.</p>

<p>The statistics for <a href="contributors#Cathy">Cathy</a>'s server from October 2007 to July 2008 are <a href="stats-archive">archived on this web site</a>.<br />The statistics for <a href="history#2008">Smogon Server</a> from July 2008 to July 2010 are <a href="http://www.smogon.com/forums/forumdisplay.php?f=114">archived on Smogon</a>.</p>

<p>In addition to the basic statistics on the popularity of each species of Pok&eacute;mon, the statistics collected and reported over the years included the following:</p>

<ul class="detailed-list">
<li>detailed statistics on the popular choices of stat distribution, nature, item, ability, and moves for each individual Pok&eacute;mon;</li>
<li>teammate statistics providing information on which other Pok&eacute;mon were likely to be on the same team as a given Pok&eacute;mon;</li>
<li>typical movesets (groups of moves appearing together) for each Pok&eacute;mon;</li>
<li>centralisation and diversity statistics providing information on how varied the gameplay in a particular ruleset was;</li>
<li><a href="https://github.com/cathyjf/PokemonSwitchStats">switching statistics</a> providing information on which Pok&eacute;mon were likely to switch into or be switched into particular other Pok&eacute;mon.</li>
</ul>

<p>Various other Pok&eacute;mon statistics were computed from these and reported for further analysis.</p>

<h2 id="statistics-tiering">Statistics and tiering</h2>

<p>One of the major applications of the statistics collected by Shoddy Battle (both the user rating statistics and the Pok&eacute;mon statistics) was tiering. In the context of competitive Pok&eacute;mon, "tiering" refers to the creation of different several rulesets by banning particular Pok&eacute;mon from each ruleset.</p>

<h3>Construction of a mode of play featuring less commonly seen Pok&eacute;mon</h3>

<p>One problem that tiering solves is the fact that there are hundreds of Pok&eacute;mon, but most of them are not usable in the standard game because they are too weak to be effective. By removing the most commonly seen Pok&eacute;mon ("OU" or Overused Pok&eacute;mon) from the game, a different game is created ("UU" or Underused) which provides an alternative mode of play.</p>

<p>Prior to the advent of Pok&eacute;mon statistics, the construction of tiers had been based on intuition rather than any sort of mathematical metric. The introduction of usage statistics allowed the construction of tiers based on actual usage data, so that the UU ruleset would actually feature less commonly seen Pok&eacute;mon, which was the intent.</p>

<h3>Banning of exceedingly strong Pok&eacute;mon</h3>

<p>A second function of tiering is to remove Pok&eacute;mon that are deemed "too strong" for a particular ruleset. Pok&eacute;mon removed from the standard game for this reason were referred to as "Ubers", whereas Pok&eacute;mon removed from the UU game for this reason were referred to as "BL".</p>

<p>Shoddy Battle's  statistics helped in the determination of which Pok&eacute;mon were "too strong" in a couple ways:</p>

<ul class="detailed-list">

<li>Uncommonly used Pok&eacute;mon
<div class="detailed-list-info">
<p>
If a Pok&eacute;mon was alleged to be "too strong", one would expect that it would be commonly used because people would be taking advantage of it. If an allegedly too strong Pok&eacute;mon was not being used very much, it would cast doubt on the claim that it was in fact too strong, subject to any explanation that might be proffered for this discrepancy.
</p>
</div>
</li>

<li>Analysis of the challenged Pok&eacute;mon
<div class="detailed-list-info">
<p>
The Pok&eacute;mon statistics provided detailed information on how the challenged Pok&eacute;mon was actually being used, which was valuable information for determining whether that Pok&eacute;mon was "too strong".
</p>
</div>
</li>

<li>Determination of qualified users
<div class="detailed-list-info">
<p>
Ultimately, the question of whether a Pok&eacute;mon was "too strong" and ought to be banned had to be resolved by some form of vote. In the past, the question of who should be allowed to vote on such a thing was resolved by the community leaders hand-picking people they considered skilled. However, this system excluded a lot of skilled players. The advent of the Shoddy Battle rating system allowed the voter pool to be based on players who had proven themselves skilled through the ladder system, as opposed to through social connections. This made the decision-making process more transparent and fair.
</p>
</div>
</li>

</ul>

<h2 id="statistics-strategy">Statistics and strategy</h2>

<p>
The statistics provided by Shoddy Battle also affected strategy in the Pok&eacute;mon game itself.
</p>

<p>
One of the major skills involved in the game of Pok&eacute;mon is "prediction"; that is, determining what the opponent is going to do based on imperfect and incomplete information. The existence of a treasure trove of statistical information about what people commonly do in a similar situation provides useful information to assist in predicting what one's opponent is likely to do in a particular battle. Of course, the opponent is also aware of the statistical data and as such may alter her strategy accordingly, which must be taken into account as well. David Sirlin refers to this phenomenon as <a href="http://www.sirlin.net/articles/yomi-layer-3-knowing-the-mind-of-the-opponent.html">Yomi Layers</a> and it is a hallmark of complex competitive games.
</p>

<p>
Moving beyond human players, the statistical information also made it possible to write sophisticated Pok&eacute;mon-playing <abbr title="Artificial Intelligence">AI</abbr> bots whose decisions of what moves to make were informed by the Pok&eacute;mon statistics. The most sophisticated <abbr title="Artificial Intelligence">AI</abbr> bot to date is <a href="http://doublewise.net/pokemon/">Technical Machine</a>, which relies heavily on a variety of different Pok&eacute;mon statistics in order to predict teams, evaluate game states, and so on.
</p>

<h2 id="statistics-outlook">Outlook</h2>

<p>
Shoddy Battle significantly changed the landscape of the competitive Pok&eacute;mon community by providing player ratings and Pok&eacute;mon statistics. Statistics have become a central aspect of the competitive Pok&eacute;mon community and now figure prominently in all manner of competitive Pok&eacute;mon discussions and in the formulation of strategy. All subsequent simulators have continued to provide statistical facilities, inspired by the features in Shoddy Battle.
</p>

<h1 id="status"><a href="#introduction">&sect;</a> Status</h1>

<p>
With the conclusion of the 4th generation, Shoddy Battle has been superseded by other simulators such as <a href="http://pokemonshowdown.com/">Pok&eacute;mon Showdown!</a>. Shoddy Battle remains notable for the changes it effected in the Pok&eacute;mon community. Later Pok&eacute;mon simulators have followed the path set by Shoddy Battle and continue to expand on the above advances. On another page, you can also read about the <a href="history">history of Shoddy Battle</a>.
</p>

<p>If you enjoyed using Shoddy Battle or have questions or comments, please feel free to email <a href="contributors#Cathy">Cathy</a>&nbsp;(<a href="mailto:cathy@pokemonlab.com">cathy@pokemonlab.com</a>) and <a href="contributors#bearzly">bearzly</a>&nbsp;(<a href="mailto:bearzly@pokemonlab.com">bearzly@pokemonlab.com</a>) and let them know. They would appreciate hearing from you.</p>

<?php endblock(); ?>
