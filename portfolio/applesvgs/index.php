<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Apple SVG\'s | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Apple SVG\'s';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/applesvgs/cover.png" class="retina no-shadow" alt="Apple SVG's">
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
        <h3>Apple SVG's (2012)</h3>
        <p>For the sake of practice I made this MacBook Pro Retina and iPhone 4S. You can <a href="/media/downloads/apple.zip">download the .svg's</a>.</p>
        <img src="/media/img/applesvgs/1.png" class="retina" alt="iPhone">
        <img src="/media/img/applesvgs/2.png" class="retina" alt="MacBook Pro Retina">
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
