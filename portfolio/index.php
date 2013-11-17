<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Portfolio | ';
    $bodyclass = ' class="portfolio"';
    include('../header.php');
?>
    <div id="content">
<?php
  }
?>

      <h2>Portfolio</h2>

      <ul id="portfolio">
        <?php
          $items = [
            ["Cygnusgymnasium.nl", "2013", "web"],
            ["Scoutingoost1.nl", "2013", "web"],
            ["WIRE", "2013", "paper"],
            ["Freevle", "2012-2013", "web"],
            ["Careljansen.com", "2012", "web"],
            ["Willemdeblaauw.com", "2012", "web"],
            ["Andromache", "2012", "paper"],
            ["Apple SVG's", "2012", "graphic"],
            ["Diary", "2012", "paper"],
            ["Hamlet", "2011", "paper"]
          ];
          foreach($items as &$item) {
            $url = str_replace(" ", "", str_replace("'", "", str_replace(".", "", strtolower($item[0]))));
        ?>
        <li class="<?php echo $item[2]; ?>">
          <div class="bg">
            <img src="/media/img/<?php echo $url; ?>/cover.png" alt="<?php echo $item[0]; ?>">
          </div>
          <a href="/portfolio/<?php echo $url; ?>/">
            <span class="type"><?php echo $item[2]; ?></span>
            <?php echo $item[0]; ?>
            <span class="year"><?php echo $item[1]; ?></span>
          </a>
        </li>
        <?php
          }
        ?>
      </ul>

      <section id="question">
        <h3>Would you like me to make you something? <a href="mailto:floris@fmjansen.nl">Contact me!</a></h3>
      </section>

<?php
  if($_GET['ajax'] !== '1') {
?>
    </div>

    <footer>
      <p>FMJansen.nl - Floris Jansen</p>
    </footer>

  </body>
</html>
<?php
  }
?>