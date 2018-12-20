<?php

$content = "

<div class='contact-section'>

    <div class='row'>
    
        <div class='six columns'>
        
            <h5>Contactez nous</h5>
            
            <form action='' method='POST'>
                <input type='email' name='email' id='email' placeholder='Votre adresse email'>
                <textarea name='mail' id='mail' cols='30' rows='50' placeholder='Comment pouvous nous vous aider ?'></textarea>
                <button class='btn' type='submit'>Envoyer</button>
            </form>
        
        </div>
        
        <div class='six columns'>
            <div class='info'>
                <i class='fas fa-map-marker-alt'></i> <h5 style='display: inline-block;'>Addresse</h5>
                <p>Thug Baba Center 9th floor, 379 <br> Hudson St, New York, NY 10018 US</p>
            </div>
            
            <div class='info'>
                <i class='fas fa-phone'></i> <h5 style='display: inline-block;'>Téléphone</h5>
                <a href='tel:237695127550'>+237 695127550</a>
            </div>
            
            <div class='info'>
                <i class='fas fa-envelope'></i> <h5 style='display: inline-block;'>E-mail</h5>
                <a href='mailto:emarc237@gmail.com'>contact@coach-website.com</a>
            </div>
        </div>
    
    </div>

</div>

";

$poison->render('layouts/page', ['title' => "Coach - Contact", 'page_title' => "Contact", 'subtitle' => "Envoyez nous vos commentaires", 'content' => $content]);

