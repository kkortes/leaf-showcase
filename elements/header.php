<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaf BETA 1.0 - CSS Framework</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?=$app->url?>favicon.ico?v=4" />

  <link rel="stylesheet" type="text/css" href="<?=$app->url?>bower_components/leaf-css-framework/css/base.css?v=<?=date('hm')?>" />
  <link rel="stylesheet" type="text/css" href="<?=$app->url?>assets/css/style.css?v=<?=date('hm')?>" />

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500,500italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css' />
</head>
<body class="page-<?=(isset($_GET['page']) ? $_GET['page'] : 'index')?>">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52663932-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=522665991192560&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?=$app->get('parts/top')?>
<div id="wrapper">
<?
  if($app->env == 'live') {
    echo $app->get('parts/social-share');
  }
?>