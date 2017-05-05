<?php
/*
 * This class is just to setup the header and footers for each web pages.
 *
 *  @author austincoat
 */ ?>
<DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <title>CatBook</title>
    <style>
      div.background {
        background: url(klematis.jpg) repeat;
        border: 2px solid black;
      }

      button.button {
        background-color: #FF0000;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
      }

      div.transbox {
        margin: 30px;
        background-color: #ffffff;
        border: 1px solid black;
        opacity: 0.6;
        filter: alpha(opacity=60); /* For IE8 and earlier */
      }

      div.transbox p {
        margin: 5%;
        font-weight: bold;
        color: red;
      }
      body {background-color: black;}
      a {background-color: red;
        padding: 16px 25px;
        text-align: center;
        display: inline-block;
          color:black;}
      a:hover {
        color: hotpink;
      }
      h1 {color: white;}
      h2 {color: white;}
      p {color: red;}
    </style>
</head>
  <body>
        <div id="list" class="content">
          <?php
          if ($_SESSION['authorized'] !== 1)
          {
          }
          if ($_SESSION['authorized'] == 1)
          {
          echo "<a href='/cinf301-spr17-project-04/?controller=main&action=home'>Home</a>
          <a href='/cinf301-spr17-project-04/?controller=Cats&action=cats'>Cats</a>
          <a href='/cinf301-spr17-project-04/?controller=Cuteness&action=cuteness'>Cuteness</a>
          <a href='/cinf301-spr17-project-04/?controller=Images&action=images'>Images</a>
          <a href='/cinf301-spr17-project-04/?controller=main&action=logout'>Logout</a>";
          }
        ?>
        </div>


            <?php require_once('routes.php'); ?>
  <body>
<html>
