<!DOCTYPE html>
<html>
<!---
                ⟡ ◦ ◌°
              ◦° ◌ ◯ ◦ ⟡
    GRUPO SMART TEC SAC - Todos los derechos reservados

    Deja de mirar nuestro código y escribe uno ^_^
    Visita http://www.smartec.la/posiciones-abiertas

    ╭──────────────────────────────────────────╮
    │ ≡ Diseño & Front-end                     │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ Nicolás Mendoza del Solar Lozada         │
    ├──────────┬───────────────────────────────┤
    │ Email    │ nicolas@smartec.la            │
    ├──────────┼───────────────────────────────┤
    │ Twitter  │ @nicomendozadels              │
    ├──────────┼───────────────────────────────┤
    │ Location │ Lima, Perú                    │
    ╰──────────┴───────────────────────────────╯

    Colaboración: @martinmds
-->
<head>
    <meta charset="utf-8">
    <title>URL Builder PRO para marketeros - Smartec.la </title>
    <meta name="description" content="URL Builder PRO te permite crear masivamente URLs taggeadas para ser reconocidas correctamente por las herramientas de analítica">
    <meta name="robots" content="index, nofollow">
    <link rel="canonical" href="#" />
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" rel="stylesheet" href="materialize/css/materialize-tags.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="http://cdn2.hubspot.net/hub/310443/file-519647983-png/favicon-smarttec.png?t=1441053799411">

</head>
<body>
<div class="wrapper">
   <div class="row">
     <div class="col s12">
       <h3 class="center-align">URL Builder PRO for marketers</h3>
       <h6 class="center-align">Powered by <a href="http://www.smartec.la">Smartec.la</a></h6>
     </div>
   </div>
<!--Inicio de contenedor principal-->
   <div class="container">
<!--Inicio de contenedor de texto-->
     <div class="row">
       <div class="col s12">
         <p class="float">
           As marketers, <b><i>we have to create lots of trackable URL´s for each source and medium of
           our campaigns.</i></b> Sometimes can be a pain in the ass if you have to create them massively. <br><br>
           URL Builder PRO is a tool that <b><i>helps you create easily massive trackable URLS
           for your campaigns.</i></b> Just fill out this form :D <br><br>
           In the "Source-medium-name" field, create a tag for the parameters you want to generate in the URL.
           Example:Facebook-RHS-example. This wil create a trackable URL where Facebook is the source,
           RHS is the medium and example is the name of the campaign.
         </p>
       </div>
     </div>
<!--Fin de contenedor de texto-->
<!--Inicio de formulario-->
   <div class="row">
    
 


       <form class="col s12" action="accion.php" method="post">
         <div class="row">
           <div class="input-field col s12">
             <input placeholder="URL del sitio web*" value="http://" type="text" class="validate" name="url" required>
             <label for="URL"> YOUR DOMAIN - URL* </label>
           </div>
           <div class="input-field col s12">
             <input placeholder="" type="text" class="validate" required data-role="materialtags" name="tags">
             <label for="Fuente de campaña">SOURCE-MEDIUM-NAME* (USE TAB OR RIGHT CLICK TO SEPARATE THE TAGS) </label>
           </div>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <div class="center">
           <a href="resultados2.html" class="waves-effect waves-light btn-large center-align #0d47a1 blue darken-1" type="submit" name="action"> Create URLs</a>
           </div>
           <div class="right-align">
           <label>
             *Required fields
           </label>
           </div>
          <p><input type="submit" /></p>
       </form>
    </div>
   </div>
<!--Fin de formulario-->
   </div>
<!--Fin de contenedor principal-->
<!--Inicio del footer-->
        <footer class="page-footer white">
            <div class="container">
            © 2015 Copyright - Made with love by <a href="https://twitter.com/NicoMendozadelS" target="_blank"> @NicomendozadelS </a>
            <a class="right" href="https://github.com/Nicomendozadels/Url_builder" target="_blank">Help me improve the code!</a>
            </div>
        </footer>
<!--fin del footer-->
<!--Importando jQuery antes de materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="materialize/js/materialize-tags.min.js"></script>
<!--Fin de scripts-->
</div>
</body>
</html>