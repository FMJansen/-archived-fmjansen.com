<?php
  if($_GET['ajax'] !== '1') {
    $home = 'class="here"';
    include('header.php');
?>
    <div id="content">
<?php
  }
?>
      <p>Hi, I'm Floris. I live in The Netherlands, near Amsterdam. While listening to all kinds of music and drinking tea, I design websites, logos and other graphical stuff. Please take a look at what I've made at my <a href="/portfolio">portfolio</a> and feel free to <a href="mailto:floris@fmjansen.nl">email</a> me if you want to. I'm also on <a href="http://twitter.com/fmjansen" id="twitter">Twitter</a>, <a href="http://dribbble.com/fmjansen" id="dribbble">Dribbble</a> and <a href="http://instagram.com/fmjansennl" id="instagram">Instagram</a>.</p>

<?php
  if($_GET['ajax'] !== '1') {
?>
    </div>

    <footer>
      <p>FMJansen.nl - Floris Jansen</p>
    </footer>

  </body>
</html>
<?php
  }
?>