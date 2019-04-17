<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <body>
     <header>
       <div class="header-up">
           <div class="header-up-img">
               <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png">
           </div>
           <h2>Privacy e termini</h2>
       </div>
       <div class="header-down">
           <div class="header-down-left">
               <span>Introduzione</span>
               <span>Norme sulla privacy</span>
               <span>Termini di servizio</span>
               <span>Tecnologie</span>
               <span>Domande frequenti</span>
           </div>
           <div class="header-down-right">
               <span>Account Google</span>
           </div>
       </div>
     </header>
     <?php
     include  "vars4.php";

     function googleFaq($arr) {

       foreach ($arr as $value) {
         $question = $value["Domande"];
         $answer = $value["Risposte"];

         echo "<h2>$question</h2>";
         echo "<p>$answer<p>";
       }
     }
     googleFaq($faq);
      ?>
   </body>
 </html>
  </body>
</html>
