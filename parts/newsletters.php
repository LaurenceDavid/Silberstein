<div class="flex justify-around align-center section newsletters">
    <div class="large-50 small-100">
        <p class="moyen-titre">Recevez nos</p>
        <p class="second-font">Dernières actualités</p>
        <p>Soyez les premiers à recevoir les dernières actualités de la marque, les nouveautés produits et les évènements à venir.</p>
    </div>
    <div class="large-50 small-100 ">
        <form method="POST"  action="traitement.php" onsubmit="return verification()" id="newsletters">
            <input type="email" placeholder="Courriel" class="form" name="email-nwsl" onchange="verifEmail()"/>
            <span class="btn-submit btn-center"><input type="submit" value="S'abonner" class="btn-submit"/></span>
        </form>
    </div>
</div>