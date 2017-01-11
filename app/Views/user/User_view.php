<?php $this->layout('layout', ['title' => 'Accueil Utilisateur']) ?>

<?php $this->start('main_content') ?>

 <?php echo "<h3>Inscription Utilisateur</h3>" ?>

 <form>
   <div >
       <p<<label for="nom">Nom</label>
       <input type="nom" id="nom_user" name="nom" placeholder="votre nom"></p>
   </div>

   <div >
       <p><label for="nom">Prenom</label>
       <input type="Prenom" id="prenom_user" name=prenom placeholder="votre prenom"></p>
   </div>

     <div >
         <p><label for="login_email">Email</label>
         <input type="email" id="login_email" name="login_email" placeholder="Email"></p>
     </div>

     <div >
         <p><label for="pseudo">pseudo</label>
         <input type="text" id="pseudo_user" name=speudo placeholder="votre pseudo"></p>
     </div>

     <div>
         <p><label for="login_password">Mot-de-Passe</label>
         <input type="password" id="login_password" name="login_password" placeholder="Password"></p>
     </div>

     <input type="submit" name="event_user_create" value="Inscription">
 </form>

 <?php $this->stop('main_content') ?>
