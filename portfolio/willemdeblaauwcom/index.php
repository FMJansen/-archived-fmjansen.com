<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Willemdeblaauw.com | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Willemdeblaauw.com';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/willemdeblaauwcom/cover.png" class="retina" alt="Willemdeblaauw.com">
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
        <h3>Willemdeblaauw.com (2012)</h3>
        <p>I built a simple Wordpress site for <a href="http://willemdeblaauw.com/">Willem de Blaauw</a>.</p>
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
