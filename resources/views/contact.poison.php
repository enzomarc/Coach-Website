@extend('layouts/page', ['title' => "Coach - Contact", 'page_title' => "Contact", 'id' => "contact-header"])

@content

<div class='contact-section'>

    <div class='row'>
    
        <div class='six columns'>
        
            <h5>Laissez nous un message</h5>
            
            <form action="@url('message.add')" method='POST'>
                <input type='email' name='email' id='email' placeholder='Votre adresse email'>
                <textarea name='message' id='message' cols='30' rows='50' placeholder='Comment pouvons nous vous aider ?'></textarea>
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
    
    <div class='row'>
    
        <div id='googleMap' style='width:100%;'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8377322307197!2d9.728557614437365!3d4.053495648058607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d8268055463%3A0x25188da31dfb0017!2zNMKwMDMnMDkuOCJOIDnCsDQzJzUxLjIiRQ!5e0!3m2!1sfr!2scm!4v1523054031934" width="100%" height="500" frameborder="0"></iframe>
        </div>
    
    </div>

</div>

@endcontent