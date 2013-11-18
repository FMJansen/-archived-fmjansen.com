<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Diary | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Diary';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/diary/cover.png" class="retina" alt="Diary">
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
        <h3>Diary (2012)</h3>
        <p>The first-years at my school get a diary. I was asked to design the cover.</p>
        <p>For the sake of practice I made this MacBook Pro Retina and iPhone 4S. You can <a href="/media/downloads/apple.zip">download the .svg's</a>.</p>
        <img src="/media/img/diary/cover.png" class="retina" alt="Cover">
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
