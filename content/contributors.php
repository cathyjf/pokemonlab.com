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
 * See <http://pokemonlab.com/licence> for more details, including information
 * on how to attribute content to this web site.
 */

$_CURRENT_SECTION = 'contributors';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - Contributors<?php endblock() ?>

<?php startblock('head-extra') ?>
<meta name="description" content="Information on the authors of and contributors to Shoddy Battle and Pok&eacute;mon Lab." />
<?php endblock() ?>

<?php startblock('content') ?>

<h1>Contributors</h1>

<p>
Shoddy Battle and Pok&eacute;mon Lab were created by <a href="#Cathy">Cathy</a> and <a href="#bearzly">bearzly</a>, with some additional contributions from other people. Shoddy Battle was released on July 7, 2007 and actively maintained until late 2010. This page provides information on the authors and contributors to the project.
</p>

<h1 id="main-developers">Main developers</h1>

<p>Cathy and bearzly were the original authors and primary developers of Shoddy Battle and Pok&eacute;mon Lab. If you enjoyed using the software or have questions or comments, please feel free to contact them and let them know. They would appreciate hearing from you.</p>

<h2 id="Cathy">Cathy J. Fitzpatrick (Cathy)</h2>
<div class="main-developer-contact-info">
Visit Cathy's <a href="https://cathyjf.com" title="cathyjf.com">personal web site</a>. Email Cathy at <a href="mailto:cathy@pokemonlab.com">cathy@pokemonlab.com</a>.
</div>

<p>Cathy is a programmer currently living in Edmonton, AB, Canada. She recently graduated from the University of Alberta with a BSc (Hons) in Computing Science in June 2012. She has been programming since before she was 12 years old. She enjoys problem-solving and is an avid player of video games, especially RPGs.</p>

<p>Cathy designed the framework for Shoddy Battle from scratch in 2006 and implemented most of the program, including the battle mechanics, the user skill ranking system, the network infrastructure, the client-side user interface, the moderation tools, the extensibility features, the collection of statistical Pok&eacute;mon data, and more. In addition, she provided a framework that allowed other people to write bots for the software. She also actively provided assistance and technical support to users from 2007&ndash;2010.</p>

<p>Cathy created the present <code>pokemonlab.com</code> web site in December 2012 in order to memorialise the Shoddy Battle project and provide information on its significance to competitive Pok&eacute;mon.</p>

<h2 id="bearzly">Benjamin Gwin (bearzly)</h2>
<div class="main-developer-contact-info">
View bearzly's <a href="http://www.smogon.com/forums/member.php?userid=32540">Smogon profile</a>. Email bearzly at <a href="mailto:bearzly@pokemonlab.com">bearzly@pokemonlab.com</a>.
</div>

<p>As one of the original two authors, bearzly contributed significantly to all aspects of Shoddy Battle. He was originally more familiar with Pok&eacute;mon than Cathy was, and he helped her learn many aspects of the game. He implemented many of the individual Pok&eacute;mon moves, abilities, items, and more. He filled in the details of aspects of the framework as necessary. He made many graphical design improvements with a view to enhacing usability. He designed and implemented the graphical user interface for Pok&eacute;mon Lab. He investigated and fixed countless bugs based on user reports.</p>

<h1>Other contributors</h1>

<p>The following additional people also contributed to the project.</p>

<ul class="detailed-list">

<li><a id="Super" href="http://www.smogon.com/forums/member.php?userid=10558">Super</a>

<div class="detailed-list-info">Significantly contributed to many aspects of Pok&eacute;mon Lab, including the game mechanics and the graphical user interface.</div>

</li>

<li><a id="DougJustDoug" href="http://www.smogon.com/forums/member.php?userid=10787">DougJustDoug</a>

<div class="detailed-list-info">Enhanced Shoddy Battle's customisation functionality to facilitate the <a href="http://www.smogon.com/forums/forumdisplay.php?f=66">Create-a-Pok&eacute;mon Project</a>. Contributed to the admin functionality of Shoddy Battle.</div>

</li>

<li><a id="X-Act" href="http://www.smogon.com/forums/member.php?userid=2412">X-Act</a>

<div class="detailed-list-info">Researched the in-game damage formula. Provided an algorithm to verify the legality of any given combination of IVs, Nature, and Ability.</div>

</li>

<li><a id="Martin" href="http://www.pokemonexperte.de/">Martin</a>

<div class="detailed-list-info">Helped maintain the project after 2010 and continues to host game servers for Shoddy Battle and Pok&eacute;mon Lab.</div>

</li>

<li><a id="Justin8649" href="http://www.smogon.com/forums/member.php?userid=217">Justin8649</a>

<div class="detailed-list-info">Contributed to the admin functionality of Pok&eacute;mon Lab.</div>

</li>

<li><a id="AmazingAmpharos" href="http://www.smogon.com/forums/member.php?userid=930">Amazing Ampharos</a>

<div class="detailed-list-info">Implemented the necessary changes to the Pok&eacute;mon database to support <a href="https://en.wikipedia.org/wiki/Pok&eacute;mon_Platinum">Pok&eacute;mon Platinum</a>.</div>

</li>

<li><a id="Encukou" href="http://www.smogon.com/forums/member.php?userid=55205">Encukou</a>

<div class="detailed-list-info">Fixed several bugs in Pok&eacute;mon Lab.</div>

</li>

<li><a id="Zracknel" href="http://www.smogon.com/forums/member.php?userid=2231">Zracknel</a>

<div class="detailed-list-info">Provided the logo for Pok&eacute;mon Lab.</div>

</li>

</ul>

<p>In addition, many other people helped test the program, report bugs, provide suggestions, and research the correct in-game mechanics. A few people made <a href="donations">financial donations</a>. We thank everybody who assisted with the project.</p>


<?php endblock() ?>
