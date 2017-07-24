    <footer>
      <blockquote class="lyric">
        <p>Op een ochtend was alles af</p>
        <cite class="lyric__artist">– Spinvis, in <em class="lyric__song">Op een ochtend in het heelal</em></cite>
      </blockquote>
    </footer>

    <script type="text/javascript">
      var workLink = document.querySelector('a[href="/work"]');
      workLink.addEventListener("click", openWork, false);

      function openWork(event) {
        // history.pushState(null, null, 'work');
        event.preventDefault();

        document.body.classList.add('noscroll');

        let backgroundShapes = document.querySelectorAll('.work__part');
        let index = 0;
        for( index = 0; index < backgroundShapes.length; index++ ) {
          backgroundShapes[index].classList.add('open');
        }
      }

      document.addEventListener("keyup", closeWork, false);

      function closeWork(event) {
        if (event.keyCode !== 27) return;

        // history.pushState(null, null, '/');
        event.preventDefault();

        document.body.classList.remove('noscroll');

        let backgroundShapes = document.querySelectorAll('.work__part');
        let index = 0;
        for( index = 0; index < backgroundShapes.length; index++ ) {
          backgroundShapes[index].classList.remove('open');
        }
      }
    </script>

    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </body>
</html>
