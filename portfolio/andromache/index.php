<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Andromache | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Andromache';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/andromache/cover.png" class="retina" alt="Andromache">
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
        <h3>Andromache (2012)</h3>
        <p>For the play called Andromache (an Old-Greek story, which features elements of the Trojan war) which was performed at my school, I made the logo, some posters and a booklet.</p>
        <img src="/media/img/andromache/1.png" class="retina" alt="Logo">
        <img src="/media/img/andromache/2.png" class="retina" alt="Poster music">
        <img src="/media/img/andromache/3.png" class="retina" alt="Poster production">
        <img src="/media/img/andromache/4.png" class="retina" alt="Poster actors">
        <img src="/media/img/andromache/5.png" class="retina" alt="Cover booklet">
        <img src="/media/img/andromache/6.png" class="retina" alt="Poster play">
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
