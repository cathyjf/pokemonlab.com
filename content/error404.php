<?php
/**
 * This file is part of the pokemonlab.com web site.
 * Copyright (C) 2012-2013  Cathy Fitzpatrick
 *
 * This web site is free. This file is licensed under the Creative Commons
 * Attribution-ShareAlike 3.0 Unported License. To view a copy of this
 * licence, visit http://creativecommons.org/licenses/by-sa/3.0
 *
 * See http://pokemonlab.com/licence for more details, including information
 * on how to attribute content to this web site.
 */

$_CURRENT_SECTION = '';
require 'layout.php';
?>

<?php startblock('title-postfix') ?> - File not found<?php endblock() ?>

<?php startblock('content') ?>
<h1>File not found</h1>
<p>The file <code><?php echo getenv('REQUEST_URI') ?></code> could not be found on this web site.</p>
<p>In December 2012, this web site was significantly revised, and some previous links may no longer work. We apologise for the inconvenience. Please proceed to the <a href="/">home page</a> and locate the document you are interested in.</p>
<?php endblock() ?>
