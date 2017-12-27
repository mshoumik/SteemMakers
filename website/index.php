<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdn.steemjs.com/lib/latest/steem.min.js"></script>

    <script src="https://cdn.jsdelivr.net/remarkable/1.7.1/remarkable.min.js"></script>

    <script type="text/javascript" src="js/script.js?t=12345"></script> 
    <script type="text/javascript" src="js/image.js"></script>
    <script type="text/javascript" src="js/body.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet"> 

  </head>

  <body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SteemMakers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <center>
        <img src="https://i544.photobucket.com/albums/hh355/rdw4352/Buttons%20Name/funny-animation-1.gif" width="182" height=169"">
        <h1 class="my-4 text-primary">We're working hard to MAKE this happen</h1>
      </center>
<?php
  require_once('./src/database.php'); 
  $database = new Database();
  $rows = $database -> select("SELECT name, p.permlink FROM (SELECT * FROM approved_posts ORDER BY voted_on limit 5) p INNER JOIN users u ON p.author_id = u.id");
  
  $length = count($rows);
  for ($i = 0; $i < $length; $i++)
  {
    echo '<div class="row" id="article',$i,'">';
    echo '<div class="spinner" id="spinner',$i,'" style="float: none; margin: 0 auto;"></div>';
    echo '<script>';
    echo '  storyPreview(',$i,', \'',$rows[$i]['name'],'\', \'',$rows[$i]['permlink'],'\');';
    echo '</script>';
    echo '</div>';
  }
?>
      <!-- <div class="row" id="article14">
        <div class="spinner" id="spinner14" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(14, 'fat-elvis', 'barn-door-project-my-wife-s-closet-part-2');
        </script>
      </div>
      <div class="row" id="article13">
        <div class="spinner" id="spinner13" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(13, 'rpsreal', 'ads1015-the-adc-with-i2c-interface');
        </script>
      </div>
      <div class="row" id="article12">
        <div class="spinner" id="spinner12" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(12, 'makerhacks', 'designing-up-a-dust-collection-mod-for-the-sienci-mill-one');
        </script>
      </div>
      <div class="row" id="article11">
        <div class="spinner" id="spinner11" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(11, 'brownsgreens', 'essential-guidelines-for-installing-raised-beds');
        </script>
      </div>
      <div class="row" id="article10">
        <div class="spinner" id="spinner10" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(10, 'fathin-shihab', 'free-3d-printed-steemit-items');
        </script>
      </div>
      <div class="row" id="article9">
        <div class="spinner" id="spinner9" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(9, 'hansjurgen', 'building-project-6-for-2017-solar-array-and-wind-tubine');
        </script>
      </div>
      <div class="row" id="article8">
          <div class="spinner" id="spinner8" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(8, 'mnhomesteader', 'attic-remodel-progress-and-diy-shiplap');
        </script>
      </div>
      <div class="row" id="article7">
          <div class="spinner" id="spinner7" style="float: none; margin: 0 auto;"></div>
        <script>
          storyPreview(7, 'papa-pepper', 'the-blessing-of-being-around-and-avaiable');
        </script>
      </div>
      <div class="row" id="article1">
          <div class="spinner" id="spinner1" style="float: none; margin: 0 auto;"></div>
          <script>
            storyPreview(1, 'fathin-shihab', '3d-printed-princess-broken-heart-duo-lip-balm-container-homemade-lip-balm');
          </script>
      </div>
      <div class="row" id="article2">
          <div class="spinner" id="spinner2" style="float: none; margin: 0 auto;"></div>
          <script>
            storyPreview(2, 'pbock', 'steemit-themed-christmas-decoration');
          </script>
      </div>
      <div class="row" id="article3">
          <div class="spinner" id="spinner3" style="float: none; margin: 0 auto;"></div>
          <script>
            storyPreview(3, 'fixedbydoc', 'installing-my-new-solar-panels');
          </script>
      </div>
      <div class="row" id="article4">
          <div class="spinner" id="spinner4" style="float: none; margin: 0 auto;"></div>
          <script>
            storyPreview(4, 'xtetrahedron', 'building-a-synthesizer-from-scratch-part-1-reverse-avalanche-oscillator');
          </script>
      </div>
      <div class="row" id="article5">
          <div class="spinner" id="spinner5" style="float: none; margin: 0 auto;"></div>
          <script>
            storyPreview(5, 'fat-elvis', 'barn-door-project-my-wife-s-closet-part-1');
          </script>
      </div>
      <div class="row" id="article6">
          <div class="spinner" id="spinner6" style="float: none; margin: 0 auto;"></div>
          <script>
            storyPreview(6, 'alohaoy', 'd-i-y-domino-table');
          </script>
      </div> -->
    </div>
   
    <footer class="navbar-dark bg-primary fixed-bottom">
      <div class="container">
        <p class="text-center text-light">Copyright &copy; SteemMakers 2017 - A community driven project founded by <a href="http://www.steemit.com/@jefpatat" class="text-white" style="text-decoration: underline;">@jefpatat</a>.<br/>
          Our gratitude goes to of <a href="courtesy.html" class="text-white" style="text-decoration: underline;">all these nice people</a>.
        </p>
      </div>
    </footer>

  </body>

</html>