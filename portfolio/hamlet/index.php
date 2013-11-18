<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Hamlet | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Hamlet';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/hamlet/cover.png" class="retina" alt="Hamlet">
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
        <h3>Hamlet (2011)</h3>
        <p>My school performed the famous play 'Hamlet'. I made a logo, some posters and a booklet.</p>
        <img src="/media/img/hamlet/cover.png" class="retina" alt="Cover booklet">
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
