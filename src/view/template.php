<!DOCTYPE html>
<html lang="fi">
  <head >
  <link href="styles/styles.css" rel="stylesheet">
    <title>lanify - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
  </head>
  <body>
  <header>
      <h1><a href="<?=BASEURL?>">lanify</a></h1>
      <div class="profile">
        <?php
          if (isset($_SESSION['user'])) {
            echo "<div>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          }
        ?>
      </div>
    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>lanify by Kurpitsa</div>
    </footer>
  </body>
</html>