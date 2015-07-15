<?php
    
?>
<!DOCTYPE html>
<!--
 * Copyright (C) 2014 brun
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="приймальна комісія, рейтинг, абітурієнт, вступ, 2014, єдебо, єдбо, івано-франківськ" />
        <meta name="author" content="Ігор Броновський" />
        <link rel="author" href="https://plus.google.com/+ІгорБроновський/posts"/>
        <link href="lib/twitter/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="lib/twitter/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="lib/datatables/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="lib/datatables/datatables/media/js/jquery.js" type="text/javascript"></script>
        <script src="lib/datatables/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="lib/twitter/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <title>Рейтинг вступників ІФНТУНГ 2014</title>
        
    </head>
    <body class="container-fluid">
        <h3 class="text-center">Інформація про подання документів до<br />
        Івано-Франківського національного технічного університету нафти і газу у 2014 </h3>
        <?php
        require_once 'entrant.php';
       
        showNavbar();
        showTableWrapper();
        
        
        ?>
        
        <footer class="container">
            &copy; <a href="http://brun.if.ua/" title="Розробка сайтів">Ігор Броновський</a> 2014. Пропозиції/побажання залишайте <a href="http://brun.if.ua/contact">тут</a>. <br />
            Допомогти чи приєднатись до розробки <a href="https://github.com/NUOG/Admiss-rating">Github::Admiss-rating</a>
        </footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-560938-12', 'auto');
  ga('send', 'pageview');

</script>

    </body>
</html>
