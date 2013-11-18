<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Careljansen.com | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Careljansen.com';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/careljansencom/cover.png" class="retina" alt="Careljansen.com">
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
        <h3>Careljansen.com (2012)</h3>
        <p>I built a simple Wordpress site for <a href="http://careljansen.com/">Carel Jansen</a>.</p>
        <img src="/media/img/careljansencom/cover.png" class="retina" alt="Home">
        <img src="/media/img/careljansencom/2.png" class="retina" alt="Clients">
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
