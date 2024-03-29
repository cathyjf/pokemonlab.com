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

require_once 'ti.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Pok&eacute;mon Lab &amp; Shoddy Battle<?php emptyblock('title-postfix') ?></title>

<!--
   This HTML was generated by the pokemonlab.com website.
   Copyright (C) 2012-2013  Cathy J. Fitzpatrick <cathy@pokemonlab.com>
   
   This website is free. This HTML is dual licensed under
   
     1) the Creative Commons Attribution-ShareAlike 3.0 Unported License
          <http://creativecommons.org/licenses/by-sa/3.0>, and
   
     2) the GNU Affero General Public License, version 3 or later
          <https://www.gnu.org/licenses/agpl-3.0.html>.
   
   You may use, modify, or redistribute this HTML (including all textual
   content contained therein) pursuant to either one of the above licences,
   whichever is more convenient for you.

   See <http://pokemonlab.com/sources> for more details, including information
   on how to attribute content to this website.
 -->

<link rel="copyright" href="/sources" />
<link rel="stylesheet" href="/content/style.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<meta name="author" content="Cathy J. Fitzpatrick <cathy@cathyjf.com>" />
<?php emptyblock('head-extra') ?>
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9585808-1']);
  _gaq.push(['_setSiteSpeedSampleRate', 100]);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
<div id="container">

<div id="top-bar">

<a href="./"><img src="/images/pokelab-logo.png" title="Pok&eacute;mon Lab" alt="Pok&eacute;mon Lab" class="poke-lab-logo" /> <img src="/images/shoddybattle-logo.png" title="Shoddy Battle" alt="Shoddy Battle" class="shoddybattle-logo" /></a>

</div>

<div id="navigation">
<ul id="navigation-list">

<?php

$nav = array(
        'home' => array('Home', '/'),
        'advances' => array('Advances', '/about'),
        'history' => array('History', '/history'),
        'downloads' => array('Downloads', '/downloads'),
        'contributors' => array('Contributors', '/contributors'),
        );

if (!isset($_CURRENT_SECTION)) {
    die('$_CURRENT_SECTION is not set.');
}

foreach ($nav as $i => &$j) {
    $cls = '';
    if ($i == $_CURRENT_SECTION) {
        $cls = ' class="selected"';
    }
    echo "<li><a href='${j[1]}'$cls>${j[0]}</a></li>";
}

?>

</ul>
</div>

<div id="content">
<?php emptyblock('content') ?>
</div>

<div id="footer">
<p>
Shoddy Battle and Pok&eacute;mon Lab are &copy; 2006&ndash;2013 by <a rel="author" href="https://cathyjf.com">Cathy J. Fitzpatrick</a>, Benjamin Gwin, and others.<br/>
See <a href="/contributors">contributors</a>, <a href="/sources">source code and licensing</a>, and <a href="/privacy-policy">privacy policy</a>.
</p>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function trackLink(category) {
    try {
      var href = $(this).attr('href');
      _gaq.push([ '_trackEvent', category, href ]);
      setTimeout(function() {
            document.location = href;
        }, 125);
      return false;
    } catch (err) { }
  }
  $(function() {
    $('a[href^="http://"],a[href^="https://"]').click(function() {
        return trackLink.call(this, 'Outbound Links');
    });
    $('a[href^="mailto:"]').click(function() {
        return trackLink.call(this, 'Mailto Links');
    });
  });
</script>
<?php emptyblock('jquery-extra') ?>

</body>
</html>
