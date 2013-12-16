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

$_CURRENT_SECTION = '';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - Source code and licensing information<?php endblock() ?>

<?php startblock('head-extra') ?>
<meta name="description" content="Access the source code of Pok&eacute;mon Lab." />
<style>
table.borderless, table.borderless td, table.borderless tr {
    border-collapse: collapse;
    margin: 0;
    padding: 0;
}
</style>
<?php endblock() ?>

<?php startblock('content') ?>

<h1>Source code and licensing information</h1>

<p>This page provides access to the source code and information on the copyright licences applicable to this project.</p>

<h2>Shoddy Battle and Pok&eacute;mon Lab</h2>
<div class="heading-subtitle">
Browse source on GitHub (mirror): <a href="https://github.com/cathyjf/PokemonLab">Pok&eacute;mon engine (server)</a>, <a href="https://github.com/cathyjf/PokemonLabClient">client</a>, <a href="https://github.com/cathyjf/PokemonLabBot">bot framework</a>.<br />
Browse source on SourceForge (canonical): <a href="http://shoddybattle.hg.sf.net/hgweb/shoddybattle/">hg index</a>.
</div>

<p>Shoddy Battle and Pok&eacute;mon Lab are &copy; 2006&ndash;2012 by <a href="https://cathyjf.com">Cathy J. Fitzpatrick</a>, Benjamin Gwin, and others. See information on <a href="contributors">authors and contributors</a>.</p>

<table class="borderless">
<tr>
<td>
Shoddy Battle and Pok&eacute;mon Lab are <a href="http://www.gnu.org/philosophy/free-sw.html">free software</a> and open source; all of the source code is licensed under the 
terms of the <a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html">GNU Affero General Public License</a>, version 3 or later, unless otherwise indicated. The 
Pok&eacute;mon Lab source code is available in the <a href="http://shoddybattle.hg.sf.net/hgweb/shoddybattle/">hg repositories</a> and is also mirrored on GitHub, which has
a nicer source browser (see links above). See the licence notice at the top of each individual file for details on the licence applicable to that file.
</td>
<td style="padding-left: 10px;">
<a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html"><img src="/images/agplv3-88x31.png" alt="GNU Affero General Public License v3" style="border-width: 0;" /></a>
</td>
</tr>
</table>

<h2>pokemonlab.com</h2>
<div class="heading-subtitle">
Browse source on GitHub (mirror): <a href="https://github.com/cathyjf/pokemonlab.com">git repository</a>.<br />
Browse source on SourceForge (canonical): <a href="http://shoddybattle.hg.sf.net/hgweb/shoddybattle/pokemonlab.com/">hg repository</a>.
</div>

<p>The <code>pokemonlab.com</code> website is &copy; 2012&ndash;2013 by <a href="https://cathyjf.com">Cathy J. Fitzpatrick</a>.</p>

<p>In December 2012, Cathy wrote all the content for the present <code>pokemonlab.com</code> website and designed an initial draft of the new layout. <a href="http://guangcongluo.com/">Zarel</a> helped revise the layout.</p>

<table class="borderless">
<tr>
<td>
This website is free. The source code for this website is available in the <a href="http://shoddybattle.hg.sf.net/hgweb/shoddybattle/pokemonlab.com/"><code>pokemonlab.com</code>
hg repository</a> and is also mirrored on GitHub (see links above). See the licence notice at the top of each individual file for information on the licence applicable to that 
file. Most content on this website is dual licensed under (1) the <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported 
License</a> ("CC-BY-SA-3U"), and (2) the <a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html">GNU Affero General Public License</a>, version 3 or later ("AGPLv3+"). You may use, modify, or redistribute files dual licensed in this manner pursuant to either the CC-BY-SA-3U or the AGPLv3+, whichever licence is more convenient for you. If you use content from this website pursuant to the CC-BY-SA-3U, you must attribute it to <code>pokemonlab.com</code>.
</td>
<td style="padding-left: 10px;">
<a href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width: 0;" src="/images/ccbysa3-88x31.png" /></a>
<br />
<a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html"><img src="/images/agplv3-88x31.png" alt="GNU Affero General Public License v3" style="border-width: 0; margin-top: 5px;" /></a>
</td>
</tr>
</table>

<p>The <code>pokemonlab.com</code> website is also accessible under the domains <code>poke-lab.com</code> and <code>shoddybattle.com</code>.</p>

<?php endblock(); ?>

