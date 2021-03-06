<?php
date_default_timezone_set('America/Chicago');
require_once('../simplepie.inc');
$feed = new SimplePie();
$feed->set_feed_url('http://feeds.pinboard.in/rss/u:trey/t:solutions/');
$feed->init();
$feed->handle_content_type();
?><!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Trey Piepmeier's Solutions Log</title>
  <meta name="description" content="Solutions to little development problems. Welcome, Google visitor.">
  <meta name="viewport" content="width=device-width">
  <link rel="alternate" type="application/rss+xml" title="Pinboard RSS feed for trey/solutions" href="http://feeds.pinboard.in/rss/u:trey/t:solutions/">
  <link rel="shortcut icon" href="/favicon.png">
  <link rel="stylesheet" href="/css/html5bp.css">
  <link rel="stylesheet" href="/css/solutions.css">
</head>
<body>

  <h1><a href="http://treypiepmeier.com">Trey Piepmeier</a>'s <a href="https://github.com/trey/solutions-gist">Solutions Log</a> <a class="rss" href="http://feeds.pinboard.in/rss/u:trey/t:solutions/">RSS</a></h1>

  <ul>
  <?php foreach ($feed->get_items() as $item): ?>
    <?php $title = htmlentities(preg_replace('/— Gist/', '', $item->get_title())); ?>
    <li><a href="<?php echo $item->get_permalink(); ?>"><?php echo $title; ?></a> <span class="date"><?php echo $item->get_date('F j, Y'); ?></span></li>
  <?php endforeach; ?>
  </ul>

  <script>
    var _gauges = _gauges || [];
    (function() {
      var t   = document.createElement('script');
      t.type  = 'text/javascript';
      t.async = true;
      t.id    = 'gauges-tracker';
      t.setAttribute('data-site-id', '4e36125f613f5d557e000001');
      t.src = '//secure.gaug.es/track.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(t, s);
    })();
  </script>
</body>
</html>
