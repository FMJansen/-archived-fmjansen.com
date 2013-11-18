<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Cygnusgymnasium.nl | Portfolio | ';
    $bodyclass = ' class="portfolioitem"';
    $breadcrumb = '&ensp;>&ensp;Cygnusgymnasium.nl';
    include('../../header.php');
  }
?>

  <div id="cover">
    <img src="/media/img/cygnusgymnasiumnl/cover.png" class="retina" alt="Cygnusgymnasium.nl">
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
        <h3>Cygnusgymnasium.nl (2013)</h3>
        <p>For a CMS-only version of <a href="/portfolio/freevle">Freevle</a> I've designed a site specifically for our school. A demo can be found at <a href="http://demo.freevle.org/">demo.freevle.org</a>.</p>
        <p>The concept was thought of by <a href="http://pimtt.nl">Pim</a> and me, I coded the design and Martin made the backend.</p>
        <p>Together with Pim we've thought of quite a few solutions to keep the huge amount of information accessible easily. For example, we've kept the main navigation as simple as possible and we've categorized all the available info-pages. These categories all got an own colour. For pages with subheadings there is an in-page navigation menu, inspired by <a href="http://theverge.com">The Verge</a>. Thereby, all pages got the ability to link to relevant pages.</p>
        <img src="/media/img/cygnusgymnasiumnl/1.png" class="retina" alt="Homepage">
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