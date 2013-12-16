# pokemonlab.com

+ Live website: http://pokemonlab.com
+ Canonical repository (hg): http://pokemonlab.com/hg/pokemonlab.com
+ Mirror repository (git): https://github.com/cathyjf/pokemonlab.com

This is the repository for [pokemonlab.com](http://pokemonlab.com), the web
site of Pok&eacute;mon Lab and Shoddy Battle. The present incarnation of the
website was created by [Cathy J. Fitzpatrick][cathyjf] in December 2012. The
website contains lots of interesting information about the history of Shoddy
Battle and the advances it introduced to the competitive Pok&eacute;mon
community.

Like Shoddy Battle and Pok&eacute;mon Lab themselves, the
[pokemonlab.com](http://pokemonlab.com) website is [free][] and
[open source][]. See the [licensing information][licence] for more details.

## Overview

Here is an overview of the website tree:

+ The `.htaccess` file contains various rules for rewriting URIs.

+ The `content` directory contains the main static content served by the web
  site. The `content/layout.php` file defines the main template for the site.

+ The `images` directory contains certain images used on the website.

+ The `clients` directory contains client binaries for Pok&eacute;mon Lab
  and Shoddy Battle. These are served from the [downloads page][] of the web
  site. This directory also contains various resources (such as the
  Pok&eacute;mon sprites) and dependencies of the client software.


The live version of the website also contains a `forum-archive` directory,
which is an archive of the Pok&eacute;mon Lab forum that was open for posting
from November 2010 to December 2012, but has since been closed. This directory
has not been included in the repository because it merely contains an
unmodified version of [phpBB3][], which you can download on your own.

## Credits

+ [Cathy J. Fitzpatrick][cathyjf] wrote all the content for the website and
  designed an initial draft of the layout.

+ [Guangcong Luo][zarel] (Zarel) helped revise the layout.


[cathyjf]: https://cathyjf.com
[free]: https://www.fsf.org/
[open source]: http://opensource.org/
[licence]: http://pokemonlab.com/sources
[downloads page]: http://pokemonlab.com/downloads
[phpBB3]: https://www.phpbb.com/
[zarel]: http://guangcongluo.com/
