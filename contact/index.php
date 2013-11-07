<!DOCTYPE html>
<html>
  <head>

    <title>Contact | FMJansen.nl</title>

    <link rel="stylesheet" href="/media/css/style.css">
    <link rel="shortcut icon" href="/media/img/favicon.png">

    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="floris, jansen, fmjansen, design, webdesign, amsterdam, netherlands, holland, contact, twitter">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <script src="/media/js/jquery.min.js"></script>
    <script src="/media/js/scripts.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44992699-1', 'fmjansen.nl');
      ga('send', 'pageview');

    </script>

  </head>
  <body>

    <header>
      <h1>FMJansen.nl</h1>
    </header>

    <nav>
      <ul>
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/portfolio/">Portfolio</a>
        </li>
        <li>
          <a href="/contact/" id="here">Contact</a>
        </li>
      </ul>
    </nav>

    <div id="content">
      <h2>Contact</h2>
      <p>In for a little chit-chat? Mention me on <a id="twitter" href="http://twitter.com/fmjansen">Twitter</a>, mail me using your email client (<a href="mailto:info@fmjansen.nl">info@fmjansen.nl</a>) or send me an email using the form below.</p>
      <div id="slidedown">
        <p id="notify">Sending...</p>
      </div>
      <form method="POST" action="/send.php">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message" rows="5"></textarea>
        <button>Send</button>
      </form>
    </div>

    <footer>
      <p>FMJansen.nl - Floris Jansen</p>
    </footer>

  </body>
</html>
