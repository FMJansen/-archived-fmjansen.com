FMJansen.nl
===========

Dit is de repository van mijn [http://fmjansen.nl](persoonlijke site). Het is vooral voor mijzelf, maar als je iets hebt gevonden dat verbeterd kan worden, zou het tof zijn als je een Issue of pull request toevoegt. De Engelse versie is te vinden in de `master`-branch.

Voor CSS, JS en images gebruik ik Grunt;

1. Installeer `grunt-cli` (en Node.JS als je dat nog niet hebt)
2. Run `sh setup.sh` en zet koffie voor jezelf (of niet, als je snel internet hebt)
3. Run `grunt`
4. Run `grunt watch` iedere keer dat je eraan werkt om CSS and JS te updaten wanneer er veranderingen worden waargenomen
5. Voor productie, run `grunt prod`

Grunt gebruik ik om de map `static` leeg te maken; voor SASS, in productie autoprefixer en vervolgens minify ik het resultaat; uglify JS; minify images. Waar mogelijk gebeurt dit concurrent.
