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

$_CURRENT_SECTION = 'downloads';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - Downloads<?php endblock() ?>

<?php startblock('head-extra') ?>
<meta name="description" content="Download Shoddy Battle and Pok&eacute;mon Lab here." />
<script>
if (document.referrer && (document.referrer.substr(0, 22) !== 'https://pokemonlab.com') &&
		(document.referrer.substr(0, 21) !== 'http://pokemonlab.com')) {
	document.location.replace('https://pokemonlab.com');
}
</script>
<?php endblock() ?>

<?php startblock('content') ?>

<h1>Downloads</h1>

<p>As of December 2012, Shoddy Battle and Pok&eacute;mon Lab are primarily of historical interest. You can read more about their <a href="about">advances to competitive Pok&eacute;mon</a> as well as the <a href="history">history of Shoddy Battle</a> and the program's <a href="contributors">authors and contributors</a>. In the event you would like to try the programs, they are still available to play.</p>

<h2>Pok&eacute;mon Lab</h2>

<p>Pok&eacute;mon Lab (originally known as Shoddy Battle 2) can be downloaded <a href="clients/pokemonlab" onclick="return trackLink.call(this, 'Pok\xE9mon Lab Download')">here</a>. The downloaded file should be opened with Java Web Start (<code>javaws</code>).</p>

<p>For the source code of Pok&eacute;mon Lab, please see <a href="sources">this page</a>.</p>

<h2>Shoddy Battle</h2>

<p>Shoddy Battle (the original version of the simulator, before the release of Pok&eacute;mon Lab) can be downloaded <a href="clients/shoddybattle" onclick="return trackLink.call(this, 'Shoddy Battle Download')">here</a>. The downloaded file should be opened with Java Web Start (<code>javaws</code>).</p>

<?php endblock(); ?>

