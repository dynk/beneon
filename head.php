<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <base href="/">
    <?php
      $title = (trim($post['postTitulo']) != '' ? $post['postTitulo'] : "PLANEJECONQUISTE");
      $desc = (trim($post['postResumo']) != '' ? nl2br($post['postResumo']) : "PLANEJE E CONQUISTE A SUA INDEPENDÊNCIA FINANCEIRA.");
      $img = "http://planejeconquiste.com.br/img/Logo.png";
      $page = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:image" content="<?=$img?>"/>
    <meta property="og:description" content="<?=$desc?>"/>
    <meta property="og:url" content="<?=$page?>"/>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <title><?=$title?></title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90726734-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
