<?php session_start();
if(isset($_SESSION['form'])){
    if($_SESSION['form'] == 'success'){
        echo "
        <div class=\"form-success\">
            <div class=\"card\">
                <p>Votre inscription a bien été enregistrée, vous recevrez une réponse dans les plus brefs délais.</p>
                <a class=\"btnFormSuccess\">Ok</a>
            </div>
        </div>";
        session_destroy();
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>SI-3D</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/styles.css">    
</head>
<body>
    <section class="grid">
        <div class="container">
            <div class="colonne">
                <div class="light l1"></div>
            </div>
            <div class="colonne">
                <div class="light l2"></div>
            </div>
            <div class="colonne">
                <div class="light l3"></div>
            </div>
            <div class="colonne">
                <div class="light l4"></div>
                <div class="light l5"></div>
            </div>
        </div>
    </section>
    <section class="header">
        <div class="container menubar">
            <ul class="menu">
                <a href="#" class="tab1">
                    <li>Notre technologie</li>
                </a>
                <a href="#" class="tab2">
                    <li>Notre vision</li>
                </a>
                <a href="#" class="tab3">
                    <li>Inscription</li>
                </a>
            </ul>
        </div>
        <video src="assets/videos/header.mp4" class="video" muted autoplay loop>
        </video>
        <div class="container">
            <div class="logo-svg">
                <svg width="700px" height="300px" viewBox="0 0 700 300" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                    <path d="M0.943767256,121.831172 C37.9744576,86.9166598 82.957386,63.5303869 135.892552,51.6723535 C188.827719,39.8143201 243.013354,42.4195308 298.449458,59.4879858 C285.200555,153.24213 237.31738,204.667357 154.799932,213.763668 C72.2824842,222.859979 20.997096,192.215813 0.943767256,121.831172 Z" id="Path" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M346.623375,237.705274 L353.168059,184.731089 C371.10648,171.284449 382.539003,162.904284 387.465629,159.590594 C394.855567,154.620059 411.541109,107.386804 462.063172,113.652664 C487.906589,116.857823 519.643658,143.401228 536.66291,168.706169 C548.009079,185.576129 558.122127,196.098266 567.002055,200.272579 L567.002055,206.940209 C538.627853,234.515262 501.05172,250.386285 454.273659,254.55328 C407.495597,258.720274 371.612169,253.104272 346.623375,237.705274 Z" id="Path-4" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round"></path>
                    <polyline id="Path-5" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round" points="472 96 550.763428 96 550.763428 176.174961 544.13313 176.174961"></polyline>
                    <polyline id="Path-6" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round" points="470.628588 110.893229 470.628588 68.7543667 437.153569 68.7543667 412.353949 83.7486459 412.353949 125.369556"></polyline>
                    <path d="M287.874373,212.99453 L346.486468,212.99453" id="Path-7" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M291.556973,95.8947712 L409.919906,95.8947712" id="Path-8" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M287.338207,138.524607 L401.062913,138.524607" id="Path-9" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round"></path>
                    <polyline id="Path-15" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round" points="451.139561 68.6236077 515.200054 0.349292178 641.034091 34.4864499 653.867732 59.1363219"></polyline>
                    <polyline id="Path-15" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round" transform="translate(552.364085, 232.137158) scale(1, -1) translate(-552.364085, -232.137158) " points="451 266.274316 515.060492 198 640.894529 232.137158 653.728171 256.78703"></polyline>
                    <path d="" id="Path-16" stroke="#6D6D6D"></path>
                    <path d="M568.674174,178.000593 L568.674174,93.9993681" id="Path-17" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round"></path>
                    <polyline id="Path-2" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round" points="30.8818973 178.464578 30.8818973 199.98256 41.5028998 210.603563 75.471009 210.603563"></polyline>
                    <path d="" id="Path-3" stroke="#6D6D6D"></path>
                    <path d="" id="Path-18" stroke="#979797"></path>
                    <polyline id="Path-19" stroke="#6D6D6D" stroke-linecap="round" stroke-linejoin="round" points="75.9494339 210.791685 75.9494339 219.813988 88.5552596 232.419814 274.045146 232.419814 286.525757 219.939203 286.525757 110.460947"></polyline>
                </svg>
            </div>
            <h1>
                Faites le <b>grand saut</b><br>
                vers le <b>futur</b>
            </h1>
            <h3>Découvrir</h3>
            <div class="h3-under"></div>
        </div>
    </section>
    <section class="technologie">
        <div class="container parallax1">
            <h1>NOTRE TECHNOLOGIE</h1>
            <p class="offset-md-2 col-md-8">Le Portal Gun est un dispositif portatif qui a la capacité de créer deux portails liés. Quelque soit la distance qui les sépare, toute chose peut entrer dans un portail avant d’émerger de l’autre côté instantanément. Les portails peuvent être placés sur n’importe quelle surface, à condition que celle-ci soit suffisamment large pour l’accommoder.</p>
        </div>
    </section>
    <section class="demo3d">
        <div class="container">
            <h1>Découvrez-le en 3D</h1>
            <div class="col-md-12 parent-traitbleu">
                <div class="traitbleu"></div>                
            </div>
            
            <div style="align-content: center;text-align: center;padding: 0px 47px;">
                <div class="col-md-12" id="gameContainer" style="width: 1024px; height: 576px"></div>
            </div>

            <div class="appBtns row">
               <div class="portalsColor offset-md-1 col-md-4">
                   <h3>Couleur des portails :</h3>
                   <ul class="colors">
                       <li onclick="changeColor({index: 0})"></li>
                       <li onclick="changeColor({index: 1})"></li>
                       <li onclick="changeColor({index: 2})"></li>
                       <li onclick="changeColor({index: 3})"></li>
                   </ul>
               </div>
               <div class="portalgunColor offset-md-2 col-md-4">
                   <h3>Couleur du Portal Gun :</h3>
                   <ul class="colors">
                       <li onclick="changePortalGunColor({indexPortalGun: 0})"></li>
                       <li onclick="changePortalGunColor({indexPortalGun: 1})"></li>
                       <li onclick="changePortalGunColor({indexPortalGun: 2})"></li>
                       <li onclick="changePortalGunColor({indexPortalGun: 3})"></li>
                   </ul>
               </div>
                
            </div>
        </div>
    </section>
    <section class="videodemo">
       <div class="container">
           <h1>Le fonctionnement des portails</h1>
           <div class="col-md-12 parent-traitbleu">
               <div class="traitbleu"></div>                
           </div>
           <div class="video">
               <video src="assets/videos/demo.mp4" class="video" muted  controls>
               </video>
           </div>
       </div>      
    </section>
    <section class="specs">
       <div class="container">
           <div class="spec1">
               <img src="assets/img/spec_1.png" alt="spec1" class="img1 offset-md-4">
               <img src="assets/img/portalgun_1.png" alt="portalgun_1" class="img2">
               <h3>LA SOURCE D'ENERGIE</h3>
               <p class="offset-md-7 col-md-4">Le mini trou noir est la pièce centrale du Portal Gun. Tous les composants alentours servent à sa stabilisation. Il génère l’énergie négative nécessaire à la création des portails.
               </p>
           </div>
           <div class="spec2">
               <img src="assets/img/spec_2.png" alt="spec2" class="img1">
               <img src="assets/img/portalgun_2.png" alt="portalgun_2" class="img2 offset-md-6">
               <h3 class="offset-md-5">Anneaux de singularité</h3>
               <p class="offset-md-1 col-md-4">En rotation permanence, les anneaux de singularité supérieure et inférieure permettent d’empêcher l’effondrement du trou noir.</p>
           </div>
       </div>
    </section>
    <section class="vision">
        <div class="container">
            <h1>Notre vision</h1>
            <p class="offset-md-2 col-md-8">Notre vocation est de repousser les limites du rationnel, de rendre possible l’impossible. Pour cela, nous recherchons l’innovation partout. Le Portal Gun est notre dernière création et incarne la révolution la plus cruciale de notre génération. Ce dispositif unique nous permet de faire un bond dans le futur, en permettant de donner vie à des idées jusqu’alors réservées aux romans de science-fiction les plus fous.</p>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Il faut le voir<br>pour le croire</h1>
                    <p>Puisque toute révolution suscite l’intérêt des plus curieux, inscrivez-vous dès maintenant afin d’avoir la chance de venir découvrir le Portal Gun une fois notre prototype réalisé.
                    </p>
                </div>
                <form class="col-md-5 offset-md-1" action="back/doadd.php" method="post">
                    <input type="text" name="lastName" placeholder="Nom*"> 

                    <input type="text" name="firstName" placeholder="Prénom*"> 

                    <input type="mail" name="mail" placeholder="Email*"> 

                    <input type="submit" value="Valider" class="formBtn">
                </form>
            </div>
        </div>
    </section>
    <section class="footer">
        <a href="#">Contact</a>
        <a href="#">Plan du site</a>
        <a href="#">Mentions légales</a>
        <a href="#">Carrières</a>
        <i class="fab fa-linkedin" style="width:30px;height:30px"></i>
        <i class="fab fa-facebook-square" style="width:30px;height:30px"></i>
        <i class="fab fa-twitter-square" style="width:30px;height:30px"></i>
    </section>

    <script>
        function changeColor(i) {
            gameInstance.SendMessage("GameInterface", "SetColor", JSON.stringify(i))
        }

        function changePortalGunColor(i) {
            console.log("bonjour" + i)
            gameInstance.SendMessage("GameInterface", "SetPortalGunColor", JSON.stringify(i))
        }
	</script>
</body>
<!-- JS -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="Build/UnityLoader.js"></script>
<script>
    var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Build_Final_Black_1024.json");
    </script>
    <script src="assets/js/fontawesome-all.js"></script>
</html>