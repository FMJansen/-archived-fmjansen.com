<?php
  if($_GET['ajax'] !== '1') {
    $title = 'Portfolio | ';
    $portfolio = ' class="portfolio"';
    include('../header.php');
?>
    <div id="content">
<?php
  }
?>

      <a href="#top" id="up">Up!</a>

      <h2>Portfolio</h2>

      <ul id="portfolio">
        <li>
          <a href="#freevle">Freevle</a>
        </li>
        <li>
          <a href="#andromache">Andromache</a>
        </li>
        <li>
          <a href="#mail-experiment">Mail-experiment</a>
        </li>
        <li>
          <a href="#columnt">Columnt</a>
        </li>
        <li>
          <a href="#apple">Apple SVG's</a>
        </li>
        <li>
          <a href="#diary">Diary</a>
        </li>
        <li>
          <a href="#hamlet">Hamlet</a>
        </li>
        <li>
          <a href="#memory">Memory</a>
        </li>
        <li>
          <a href="#literature">English literature</a>
        </li>
      </ul>

      <section id="freevle" class="item">
        <h3>Freevle</h3>
        <p><a href="http://freevle.org">Freevle</a> is an open-source VLE which I'm building with three friends. I've made the logo and about half of the design, <a href="http://pimtt.nl/">Pim</a> the other half and Martin and <a href="http://totempaal.tj/">Martijn</a> the backend. What you see below is the 'coming soon'-page.</p>
        <img src="/media/img/freevle.png" alt="Freevle">
      </section>

      <section id="andromache" class="item">
        <h3>Andromache</h3>
        <p>For the play called Andromache (an Old-Greek story, which features elements of the Trojan war) which was performed at my school, I made the logo, some posters and a booklet.</p>
        <img src="/media/img/andromache1.png" alt="Andromache - Logo" class="retina">
        <img src="/media/img/andromache2.png" alt="Andromache - Poster for musicians" class="retina">
        <img src="/media/img/andromache3.png" alt="Andromache - Poster for the crew" class="retina">
        <img src="/media/img/andromache4.png" alt="Andromache - Poster for actors" class="retina">
        <img src="/media/img/andromache5.png" alt="Andromache - Cover of the booklet with information about the play" class="retina">
        <img src="/media/img/andromache6.png" alt="Andromache - Poster to promote the play" class="retina">
      </section>

      <section id="mail-experiment" class="item">
        <h3>Mail-experiment</h3>
        <p>I wanted to try some CSS3-effects, so I made this. It's far from user-friendly, but hey, it folds. Chrome (or Safari) renders it better than other browsers.</p>
        <img src="/media/img/mail.png" alt="Mail-experiment">
      </section>

      <section id="columnt" class="item">
        <h3>Columnt</h3>
        <p>I'm trying to build a Twitter-client, but until now nothing but the design is finished. It would have multiple columns, an always-present but unobtrusive compose-field and keyboard-navigation.</p>
        <img src="/media/img/columnt.png" alt="Columnt">
      </section>

      <section id="apple" class="item">
        <h3>Apple SVG's</h3>
        <p>For the sake of practice I made this MacBook Pro Retina and iPhone 4S. You can <a href="/media/downloads/apple.zip">download the .svg's</a>.</p>
        <img src="/media/img/iphone.png" alt="iPhone 4S" class="retina">
        <img src="/media/img/mbpretina.png" alt="MacBook Pro Retina" class="retina">
      </section>

      <section id="diary" class="item">
        <h3>Diary</h3>
        <p>The first-years at my school get a diary. I was asked to design the cover.</p>
        <img src="/media/img/agenda.png" alt="Diary-cover" class="retina">
      </section>

      <section id="hamlet" class="item">
        <h3>Hamlet</h3>
        <p>My school performed the famous play 'Hamlet'. I made a logo, some posters and a booklet.</p>
        <img src="/media/img/hamlet.png" alt="Hamlet" class="retina">
      </section>

      <section id="memory" class="item">
        <h3>Memory</h3>
        <p>An assignment at school was to make a page about memory. I made this simple design. You can see it <a href="/geheugen/">live</a>.</p>
        <img src="/media/img/memory.png" alt="Memory-page">
      </section>

      <section id="literature" class="item">
        <h3>English literature</h3>
        <p>For another assignment at school we had to tell something about a part of the english literature, using a timeline. My part had to be about The Miller's Tale and I made this timeline. You can see it <a href="/englishlit/">live</a>.</p>
        <img src="/media/img/englishlit.png" alt="English literature-page">
      </section>

      <section id="question">
        <h3>Would you like me to make you something?</h3>
        <a href="/contact" class="button">Contact me!</a>
      </section>

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