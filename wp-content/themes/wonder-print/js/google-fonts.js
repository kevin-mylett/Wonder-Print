/*
* Load Google Web Fonts via Web Font Loader
* https://github.com/typekit/webfontloader
*/

WebFontConfig = {
  google: {
    families: [ 'Pacifico', 'Source Sans Pro:300', 'Montserrat:400,700', 'Fjalla One', 'Hind']
  }
   };

   (function(d) {
      var wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
      s.parentNode.insertBefore(wf, s);
   })(document);