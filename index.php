<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tableau de bord - MAACONDUITE</title>
   <meta name="description" content="Application de suivi de conduite accompagnée">
   <meta name="keywords" content="TP, HTML, CSS, JavaScript, JSON, Alexandre EHRHARD">
   <meta name="author" content="Alexandre EHRHARD">
   <!-- Polices d'écritures -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <!-- Icônes Bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <!-- Styles -->
   <link rel="stylesheet" href="src/styles/style.css">
   <link rel="stylesheet" href="src/styles/tableauBord.css">
</head>
<body>
   <?php 
      include("src/backend/navigation_element.php");
      createNavigation(1);
   ?>
   <main>
      <?php 
         include("src/backend/header_element.php");
         createHeader();
      ?>

      <div id="content-wrapper">
         <div id="cta-add-experience-wrapper">
            <a id="cta-add-experience" class="cta cta-primary" href="ajouter_experience.php">Ajouter une expérience</a>
         </div>

         <div class="element-wrapper cellule-grid-triple">
            <h3>Objectif</h3>
            <div class="element-content-wrapper element-content-wrapper-padding">
               <div id="slider-background">
                  <div id="slider-value"></div>
               </div>
               <div id="objectif-axe-label-wrapper">
                  <p class="distance-km-counter-unit" id="objectif-km-zero"><span class="distance-km-counter">0</span> km</p>
                  <p class="distance-km-counter-unit" id="objectif-km-count"></p>
               </div>
            </div>
         </div>

         <div class="element-wrapper cellule-grid-double">
            <h3>Distance parcourue</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-distance-parcourue"></canvas>
            </div>
         </div>

         <div class="element-wrapper">
            <h3>Voiture</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-voiture"></canvas>
            </div>
         </div>

         <div class="element-wrapper">
            <h3>Accompagnateur</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-accompagnateur"></canvas>
            </div>
         </div>

         <div class="element-wrapper cellule-grid-double">
            <h3>Manœuvres effectuées</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-manoeuvre"></canvas>
            </div>
         </div>

         <div class="element-wrapper">
            <h3>Météo</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-meteo"></canvas>
            </div>
         </div>

         <div class="element-wrapper">
            <h3>Itinéraire fréquenté</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-itineraire"></canvas>
            </div>
         </div>

         <div class="element-wrapper">
            <h3>Traffic</h3>
            <div class="element-content-wrapper">
               <canvas id="canvas-traffic"></canvas>
            </div>
         </div>
      </div>
   </main>

   <script src="src/scripts/navBarManager.js"></script>
   <script src="src/scripts/dataForConduite.js"></script>
   <script src="src/scripts/dataManager.js"></script>
   <!-- Importer le module Chart.js pour les graphiques -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js"></script>
   
   <script src="src/scripts/createGraphique.js"></script>
   <script src="src/scripts/tableauBordManager.js"></script>
</body>
</html>