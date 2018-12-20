<?php

$content = "

<div class='product-section' style='padding: 4%'>

    <div class='row'>
        
        <div class='six columns'>
            <h4>Digitaux</h4>
            <p>Retrouvez ici nos programmes pour vous permettre, selon votre emploi de temps, de découvrir votre talent à
            votre rythme, partout dans le monde. <br>Abonnez-vous pour recevoir de nouveaux produits de xxx aussitôt qu'ils sont disponibles.</p>
            
            <div class='socials row u-full-width'>
                <a href='#'><i class='fab fa-facebook-f'></i></a>
                <a href='#'><i class='fab fa-twitter'></i></a>
                <a href='#'><i class='fab fa-linkedin-in'></i></a>
                <a href='#'><i class='fab fa-instagram'></i></a>
                <a href='#' id='last-social'><i class='fab fa-youtube'></i></a>
            </div>
            
            <a class='btn' href='#'>Consultez notre boutique</a>
        </div>
        
        <div class='six columns'>
            <iframe id='player' type='text/html' width='640' height='360' src='http://www.youtube.com/embed/g7cPJu42IEM?enablejsapi=1&origin=http://coachwebsite.com' frameborder='0'></iframe>
        </div>
        
    </div>

</div>

";

$poison->render('layouts/page', ['title' => "Coach - Produits", 'page_title' => "Produits", 'id' => "products-header", 'content' => $content]);

