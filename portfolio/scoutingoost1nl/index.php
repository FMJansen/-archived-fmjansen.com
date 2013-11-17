<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Scoutingoost1.nl | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Scoutingoost1.nl';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/scoutingoost1nl/cover.png" class="retina" alt="Scoutingoost1.nl">
  </div>

  <div id="overcover">
<?php
  if($_GET['ajax'] !== '1') {
?>
    <div id="content">
<?php
  }
?>

      <section class="item">
        <h3>Scoutingoost1.nl</h3>
        <p>I designed and built a website for a local Scouting-group.</p>
        <img src="/media/img/scoutingoost1nl/1.png" class="retina" alt="Homepage">
        <img src="/media/img/scoutingoost1nl/2.png" class="retina" alt="Homepage">
      </section>
<?php
  if($_GET['ajax'] !== '1') {
?>
    </div>
<?php
  }
?>
  </div>

<?php
  if($_GET['ajax'] !== '1') {
?>

    <footer>
      <p>FMJansen.nl - Floris Jansen</p>
    </footer>

  </body>
</html>
<?php
  }
?>