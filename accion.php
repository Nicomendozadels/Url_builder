
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
    <header>
     <div class="row">
       <div class="col s12">
         <h3 class="center-align">URL Builder PRO for marketers</h3>
         <h6 class="center-align">Powered by <a href="http://www.smartec.la">Smartec.la</a></h6>
       </div>
     </div>
     </header>
<!--Inicio de contenedor principal-->
   <main class="container">
     <div class="row">
       <div class="col s12">
         <p class="float">
           Here are your results!<b><i>  Click on the tagged URLs so you can easily copied them.</i></b></p>
			<?php $tags=$_POST['tags']; 
				echo implode(", ", $tags);
			?>
       </div>
     </div>
    <div class="row">
      <div class="col s12 hoverable"> <h5 class="left-align"><?php echo htmlspecialchars($_POST['url']); ?>...</h5> </div>
    </div>
<!--Inicio de Colección de resultados-->
      <table class="hoverable centered responsive-table">
        <thead>
          <tr>
              <th data-field="URL">SOURCE-MEDIUM-CAMPAIGN</th>
              <th data-field="URL">TAGGED URLs (Click to copy)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">facebook - rhs - products</a>
            </td>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">
            <i class="blue-text text-darken-1">.../utm_source=facebook&utm_medium=rhs&utm_campaign=products</i>
            </a>
            </td>
          </tr>
          <tr>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">facebook - rhs - interaction</a>
            </td>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">
            <i class="blue-text text-darken-1">.../utm_source=facebook&utm_medium=rhs&utm_campaign=interaction</i>
            </a>
            </td>
          </tr>
          <tr>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">facebook - up - interaction</a>
            </td>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">
            <i class="blue-text text-darken-1">.../utm_source=facebook&utm_medium=up&utm_campaign=interaction</i>
            </a>
            </td>
          </tr>
          <tr>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">facebook - up - products</a>
            </td>
            <td><a href="#!" onclick="Materialize.toast('URL Copied!', 800)" title="Click to Copy">
            <i class="blue-text text-darken-1">.../utm_source=facebook&utm_medium=up&utm_campaign=products</i>
            </a>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <div class="row"> <div class="col s12 right-align">
      <a href="index.php" class="waves-effect waves-light btn-large right-align blue darken-1" type="submit" name="action">&#8592; Go Back</a>
      </div>
      </div>
<!--Fin de Colección de resultados-->
  </div>
  </main>
<!--Fin del contenedor principal-->
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