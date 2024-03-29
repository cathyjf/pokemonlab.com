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

<?php startblock('title-postfix') ?> - File not found<?php endblock() ?>

<?php startblock('content') ?>
<h1>File not found</h1>
<p>The file <code><?php echo htmlentities(getenv('REQUEST_URI')) ?></code> could not be found on this website.</p>
<p>In December 2012, this website was significantly revised, and some previous links may no longer work. We apologise for the inconvenience. Please proceed to the <a href="/">home page</a> and locate the document you are interested in.</p>
<?php endblock() ?>
