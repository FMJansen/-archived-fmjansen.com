<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Freevle | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Freevle';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/freevle/cover.png" class="retina" alt="Freevle">
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
        <h3>Freevle</h3>
        <p><a href="http://freevle.org">Freevle</a> is an open-source VLE which I'm building with three friends. I've made the logo and about half of the design, <a href="http://pimtt.nl/">Pim</a> the other half and Martin and <a href="http://totempaal.tj/">Martijn</a> the backend. What you see below is the 'coming soon'-page.</p>
        <p>At the moment, we've finished a CMS-only version, so without actual VLE-functionality. It's designed specifically for our school and the design can be found <a href="/portfolio/cygnusgymnasiumnl/">here</a>.</p>
        <img src="/media/img/freevle/cover.png" class="retina" alt="Freevle">
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