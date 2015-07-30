<?php
  $templateDirectoryUri = get_template_directory_uri();
  $posts = get_posts();
  $heroesEpisodesArray = array(
    array(
        'name' => 'Noah',
        'date' => '26 July 2015'
    ), 
    array(
        'name' => 'Abraham',
        'date' => '2 August 2015'
    ), 
    array(
        'name' => 'David',
        'date' => '9 August 2015'
    ), 
    array(
        'name' => 'Esther',
        'date' => '16 August 2015'
    ), 
    array(
        'name' => 'Joseph',
        'date' => '13 September 2015'
    ), 
    array(
        'name' => 'Joshua',
        'date' => '20 September 2015'
    ), 
    array(
        'name' => 'Elijah',
        'date' => '4 October 2015'
    ), 
    array(
        'name' => 'Moses',
        'date' => '11 October 2015'
    ), 
    array(
        'name' => 'Daniel',
        'date' => '18 October 2015'
    ), 
    array(
        'name' => 'Job',
        'date' => '1 November 2015'
    ), 
    array(
        'name' => 'Ruth',
        'date' => '22 November 2015'
    ), 
    array(
        'name' => 'Jonah',
        'date' => '29 November 2015'
    ), 
    array(
        'name' => 'Gideon',
        'date' => '13 December 2015'
    ), 
    array(
        'name' => 'Jesus',
        'date' => '20 December 2015'
    )
  );
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Heroes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $templateDirectoryUri ?>/assets/css/main.css">
  </head>
  <body><!--[if lt IE 8]>
    <p class="browsehappy">
      You are using an <strong>outdated</strong> browser.
      Please <a href="http://browsehappy.com/">upgrade your browser</a>
      to improve your experience.
    </p><![endif]-->
    <div class="rock-menu rock-menu__wrapper">
      <div class="rock-menu__container">
        <div class="rock-menu__logo"><a href="http://rocksydney.org.au/" title="Go to main website"><img src="http://rocksydney.org.au/wp-content/themes/rocksydney/images/logo.png" alt="ROCK Sydney"></a></div>
        <div id="mobile-button"><a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a></div>
        <div id="rock-menu">
          <ul class="main-menu first">
            <li id="menu-item-538" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-538 nav"><a href="#">About</a>
              <div class="navmenu">
                <div class="navtop"> </div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-67" class="star menu-item menu-item-type-post_type menu-item-object-page menu-item-67 nav"><a href="http://rocksydney.org.au/about/">About ROCK Sydney</a></li>
                    <li id="menu-item-66" class="buddy menu-item menu-item-type-post_type menu-item-object-page menu-item-66 nav"><a href="http://rocksydney.org.au/pastors-and-family/">Pastors and Family</a></li>
                    <li id="menu-item-597" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-597 nav"><a href="http://rocksydney.org.au/seed">SEED</a></li>
                    <li id="menu-item-539" class="hart menu-item menu-item-type-post_type menu-item-object-page menu-item-539 nav"><a href="http://rocksydney.org.au/give/">Give</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="menu-item-250" class="sermon menu-item menu-item-type-custom menu-item-object-custom menu-item-250 nav"><a href="http://rocksydney.org.au/sermon">Sermons</a>
              <div class="navmenu">
                <div class="navtop"> </div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-422" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-422 nav"><a href="http://rocksydney.org.au/sermon">Latest Sermons</a></li>
                    <li id="menu-item-4170" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4170 nav"><a href="http://rocksydney.org.au/sermon/year/2013">2013 Sermons</a></li>
                    <li id="menu-item-4169" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4169 nav"><a href="http://rocksydney.org.au/sermon/year/2012">2012 Sermons</a></li>
                    <li id="menu-item-423" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423 nav"><a href="http://rocksydney.org.au/sermon/year/2011">2011 Sermons</a></li>
                    <li id="menu-item-424" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-424 nav"><a href="http://rocksydney.org.au/sermon/year/2010">2010 Sermons</a></li>
                    <li id="menu-item-425" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-425 nav"><a href="http://rocksydney.org.au/sermon/year/2009">2009 Sermons</a></li>
                    <li id="menu-item-426" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-426 nav"><a href="http://rocksydney.org.au/sermon/year/2008">2008 Sermons</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="menu-item-1752" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1752 nav"><a href="http://rocksydney.org.au/article">Articles</a>
              <div class="navmenu">
                <div class="navtop"></div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-1985" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1985 nav"><a href="http://rocksydney.org.au/article/category/pastor-desk">Pastor Desk</a></li>
                    <li id="menu-item-1753" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1753 nav"><a href="http://rocksydney.org.au/article/category/rock-revelation">Revelation</a></li>
                    <li id="menu-item-1754" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1754 nav"><a href="http://rocksydney.org.au/article/category/rock-interactive">Interactive</a></li>
                    <li id="menu-item-1755" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1755 nav"><a href="http://rocksydney.org.au/article/category/rock-family">Family</a></li>
                    <li id="menu-item-1756" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1756 nav"><a href="http://rocksydney.org.au/article/category/rock-easy-digest">Easy Digest</a></li>
                    <li id="menu-item-1757" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1757 nav"><a href="http://rocksydney.org.au/article/category/rock-komunitas-mesianik">KM</a></li>
                    <li id="menu-item-1758" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1758 nav"><a href="http://rocksydney.org.au/article/category/rock-praise">Praise</a></li>
                    <li id="menu-item-1759" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1759 nav"><a href="http://rocksydney.org.au/article/category/rock-sydney-ministries">Ministries</a></li>
                    <li id="menu-item-1760" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1760 nav"><a href="http://rocksydney.org.au/article/category/campus-career">Campus & Career</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="menu-item-312" class="meetings menu-item menu-item-type-custom menu-item-object-custom menu-item-312 nav"><a href="#">Locations</a>
              <div class="navmenu">
                <div class="navtop"> </div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-310" class="circle-icon menu-item menu-item-type-post_type menu-item-object-page menu-item-310 nav"><a href="http://rocksydney.org.au/services/">Locations & Services</a></li>
                    <li id="menu-item-309" class="home-icon menu-item menu-item-type-post_type menu-item-object-page menu-item-309 nav"><a href="http://rocksydney.org.au/komunitas-mesianik/">Komunitas Mesianik</a></li>
                    <li id="menu-item-249" class="file menu-item menu-item-type-custom menu-item-object-custom menu-item-249 nav"><a href="http://rocksydney.org.au/event">Events</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="menu-item-540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-540 nav"><a href="#">Contact</a>
              <div class="navmenu">
                <div class="navtop"> </div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-123" class="envelope menu-item menu-item-type-post_type menu-item-object-page menu-item-123 nav"><a href="http://rocksydney.org.au/contact-us/">Contact Us</a></li>
                    <li id="menu-item-246" class="hart menu-item menu-item-type-post_type menu-item-object-page menu-item-246 nav"><a href="http://rocksydney.org.au/prayer-request/">Prayer Request</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="menu-item-251" class="ministries menu-item menu-item-type-custom menu-item-object-custom menu-item-251 nav"><a href="#">Ministries</a>
              <div class="navmenu">
                <div class="navtop"> </div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-724 nav"><a href="http://rocksydney.org.au/ministries/big">BIG</a></li>
                    <li id="menu-item-306" class="mask menu-item menu-item-type-post_type menu-item-object-page menu-item-306 nav"><a href="http://rocksydney.org.au/ministries/creative">Creative Ministry</a></li>
                    <li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722 nav"><a href="http://rocksydney.org.au/ministries/extraordinary-teenagers">ET</a></li>
                    <li id="menu-item-307" class="cloud menu-item menu-item-type-post_type menu-item-object-page menu-item-307 nav"><a href="http://rocksydney.org.au/ministries/intercessor-apostolic">Intercessor & Apostolic</a></li>
                    <li id="menu-item-723" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-723 nav"><a href="http://rocksydney.org.au/ministries/kids-church">Kids Church</a></li>
                    <li id="menu-item-302" class="slate menu-item menu-item-type-post_type menu-item-object-page menu-item-302 nav"><a href="http://rocksydney.org.au/ministries/motion-pictures">Motion Pictures</a></li>
                    <li id="menu-item-305" class="monitor menu-item menu-item-type-post_type menu-item-object-page menu-item-305 nav"><a href="http://rocksydney.org.au/ministries/multimedia">Multimedia</a></li>
                    <li id="menu-item-308" class="tune menu-item menu-item-type-post_type menu-item-object-page menu-item-308 nav"><a href="http://rocksydney.org.au/ministries/praise-worship">Praise & Worship</a></li>
                    <li id="menu-item-1326" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1326 nav"><a href="http://rocksydney.org.au/ministries/ryi">ROCK Youth Intl</a></li>
                    <li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721 nav"><a href="http://rocksydney.org.au/ministries/som">SOM</a></li>
                    <li id="menu-item-304" class="mic menu-item menu-item-type-post_type menu-item-object-page menu-item-304 nav"><a href="http://rocksydney.org.au/ministries/sound-equipment">Sound & Equipment</a></li>
                    <li id="menu-item-699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-699 nav"><a href="http://rocksydney.org.au/ministries/website">Website</a></li>
                    <li id="menu-item-303" class="user menu-item menu-item-type-post_type menu-item-object-page menu-item-303 nav"><a href="http://rocksydney.org.au/ministries/usher">Ushering</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="menu-item-541" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-541 nav"><a href="#">Members</a>
              <div class="navmenu">
                <div class="navtop"> </div>
                <div class="navmiddle">
                  <ul class="navsub">
                    <li id="menu-item-1357" class="log_off menu-item menu-item-type-custom menu-item-object-custom menu-item-1357 nav"><a href="http://rocksydney.org.au/register">Register</a></li>
                    <li id="menu-item-1358" class="log_off menu-item menu-item-type-custom menu-item-object-custom menu-item-1358 nav"><a href="http://rocksydney.org.au/user?action=login">Login</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div id="search">
          <form id="searchform" method="get" action="http://rocksydney.org.au/">
            <input id="search-field" type="text" name="s" size="23" class="field">
            <input type="submit" name="submit" value="" class="submit">
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12"><img src="<?php echo $templateDirectoryUri ?>/assets/img/heroes-title.png" alt="Heroes" class="logo"></div>
      </div>
      <div class="row heroes-container">
        <?php
          for($i=0; $i<14; $i++) : 
            $post = $posts[$i];  
            $imgSrc = get_field('heroImage');
            $audioUrl = get_field('heroUrl');
            $episodeDate = get_field('episodeDate');
            $itemClass= 'open';
            $post_title = $post->post_title;
            if(!$post){
              $imgSrc = $templateDirectoryUri . '/assets/img/hero-placeholder-contentonly.jpg';
              $itemClass = '';
              $post_title = 'Coming soon';
              $episodeDate = $heroesEpisodesArray[$i]['date'];
            }
          ?>
          <div class="col-xs-12 col-sm-4 col-lg-1 item--container <?php echo $itemClass?>">
            <?php if($audioUrl) : ?><a href="<?php echo $audioUrl ?>"><?php endif; ?>
              <div class="item <?php echo $itemClass ?>">
                <div class="item--content">
                  <img src="<?php echo $imgSrc ?>" class="img-responsive">
                  <div class="item--content--overlay">
                    <div class="episode--number">Ep.<span><?php echo $i+1 ?></span></div>
                    <div class="episode--title"><?php echo $post_title ?></div>
                    <div class="episode--date"><?php echo date('d M Y', strtotime($episodeDate)) ?></div>
                  </div>
                </div>
              </div>
            <?php if($audioUrl) : ?></a><?php endif; ?>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $templateDirectoryUri ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo $templateDirectoryUri ?>/assets/js/global.min.js"></script>
  </body>
</html>