<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        $title= (isset($global['title'])) ? $global['title'] : $global['site.title'];
        echo $global['site.name'] .' | '. $title;
      ?>
    </title>
    <meta name="description" content="">
    <meta name="author" content="<?php echo $global['author.name']; ?>">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo $global['assets.prefix'];?>/themes/thy/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/thy/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/thy/assets/css/main.css" rel="stylesheet">

    <!-- Le fav and touch icons -->

    <?php if($global['google.analytics']){?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $global['google.analytics']; ?>']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      $(function(){
        $('.dropdown-toggle').dropdown()
      })
  </script>
  <?php }?>
  </head>

  <body>
    <div style="background:#0a777d; width:100%; height:5px;"></div>
    <div class="header">
      <div class="container-narrow">
        <div class="masthead text-center">
          <h1 class="muted">ThYpHoOn.org</h1>
          <ul class="nav nav-pills">
            <li class="active"><a href="/">Home</a></li>
            <li class="dropdown <?php if($global["route"] == "category") echo "active";?>">
              <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Categories <b class="caret"></b></b></a>
              <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                <?php
                  foreach ($global['categories'] as $slug => $category) {
                    echo '<li><a tabindex="-1" href="/category/'.$slug.'">'. $category .'</a></li>';
                  }
                ?>
              </ul>
            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/archives">Archives</a></li>
          </ul>
        </div>
        <div class="jumbotron">
          <h1>Welcome</h1>
          <p class="lead">Choose wisely...</p>
          <a class="btn btn-large btn-info" href="/category/programming"><i style="margin-top: 8px;" class="icon-random icon-white"></i> Programming</a> &nbsp;
          <a class="btn btn-large btn-info" href="/category/music"><i style="margin-top: 8px;" class="icon-music icon-white"></i> Music</a> &nbsp;
          <a class="btn btn-large btn-info" href="/category/politics"><i style="margin-top: 8px;" class="icon-globe icon-white"></i> Politics</a>
        </div>
      </div>
    </div>
    <div class="container-narrow">
      <div class="row-fluid">
        <div class="span10 offset1">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
    <hr>
    <footer id="site-footer">
        <p>Powered by <a href="http://textpress.shameerc.com" target="_blank">TextPress</a>. &copy; <a href="http://blog.thyphoon.org" target="_blank">Nik'ThYpHoOn'Grebe </a> 2013.</p>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/js/bootstrap.min.js"></script>
  </body>
</html>