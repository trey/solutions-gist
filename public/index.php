<?php
date_default_timezone_set('America/Chicago');
require_once('../simplepie.inc');
$feed = new SimplePie();
$feed->set_feed_url('http://feeds.pinboard.in/rss/secret%3Ad2eb5ef4f7bb90a90d31/u%3Atrey/t%3Asolutions/');
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
  <link rel="stylesheet" href="/css/html5bp.css">
  <link rel="stylesheet" href="/css/solutions.css">
</head>
<body>
  
  <h1><a href="http://treypiepmeier.com">Trey Piepmeier</a>'s [Solutions Log](https://github.com/trey/solutions-gist)</h1>

  <?php foreach ($feed->get_items() as $item): ?>
    <?php $title = htmlentities(preg_replace('/— Gist/', '', $item->get_title())); ?>
    
    <ul>
      <li><a href="<?php echo $item->get_permalink(); ?>"><?php echo $title; ?></a> <span class="date"><?php echo $item->get_date('F j, Y'); ?></span></li>
    </ul>

  <?php endforeach; ?>

  <?php require_once('../_tracking.php'); ?>
</body>
</html>
