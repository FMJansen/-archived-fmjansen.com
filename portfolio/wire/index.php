<?php
  if($_GET['ajax'] !== '1') {
    $title = 'WIRE | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;WIRE';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/wire/cover.png" class="retina" alt="WIRE">
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
        <h3>WIRE</h3>
        <p>I was asked by <a href="http://informaticseurope.org">Informatics Europe</a> to design a booklet. I did the illustrations aswell as the layout.</p>
        <img src="/media/img/wire/1.png" class="retina" alt="Cover">
        <img src="/media/img/wire/2.png" class="retina" alt="Illustration">
        <img src="/media/img/wire/3.png" class="retina" alt="Foreword">
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
