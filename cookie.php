<!DOCTYPE html>
<html>

<head>

  <title></title>
  <meta charset="UTF-8" />
</head>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<!-- Fonts & Fonticons -->
<!--   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<style type="text/css">
body {
  font-family: "Poppins", Arial, sans-serif;
}

</style>
 -->
<body>
  <div id="app"></div>
  <div id="cookieconsent"></div>



<script>
  window.cookieconsent.initialise({
    container: document.getElementById("cookieconsent"),
    palette:{
     popup: {background: "black"},
     button: {background: "#e0e0e0"},
    },
    revokable: true,
    onStatusChange: function(status) {
     console.log(this.hasConsented() ?
      'enable cookies' : 'disable cookies');
    },
    "position": "bottom-right",
    "theme": "classic",
    "domain": "",
    "secure": true,
    "content": {
      "header": '<center><img src="https://i.imgur.com/Tl8ZBUe.png" width="40"></center>Ce site utilise des cookies',
      "message": '<center><img src="https://i.imgur.com/Tl8ZBUe.png" width="40"></center>Ce site utilise des cookies',
      "allow": 'Accepter',
      "dismiss": 'Accepter',
      "deny": 'Decline',
      "link": 'En savoir plus',
      "href": 'privacyPolicy.html',
      "close": '<span style="color: #fff">&#x274c</span>',
      "policy": 'Politique de cookies',
      "target": '_blank',
      }
   });

</script>

<script type="text/javascript">
$.getJSON('mydata.json', function(data) {
    {
      "name": "parcel-sandbox",
      "version": "1.0.0",
      "description": "Simple Parcel Sandbox",
      "main": "index.html",
      "scripts": {
        "start": "parcel index.html --open",
        "build": "parcel build index.html"
      },
      "dependencies": {
        "cookieconsent": "3.1.1"
      },
      "devDependencies": {
        "@babel/core": "7.2.0",
        "parcel-bundler": "^1.6.1"
      }
    }
});
</script>

<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript">
 document.getElementById("app").innerHTML = ``;
</script>

</body>

</html>
