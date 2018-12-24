<footer>

    <div class="row container">
        <div class="four columns">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="@url('services')">Services</a></li>
                <li><a href="@url('products')">Produits</a></li>
                <li><a href="https://medium.com/@heatherpicken">Blog</a></li>
                <li><a href="@url('contact')">Contact</a></li>
            </ul>
        </div>

        <div class="four columns">
            <h5>CONTACTEZ NOUS</h5>
            <p>Des questions ? Faites le nous savoir au 8th floor, 379 Hudson St, New York, NY 10018 ou appellez au (+1) 96 716 6879</p>

            <div class="socials row u-full-width">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#" id="last-social"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="four columns">
            <h5>NEWSLETTER</h5>
            <form action="@url('newsletter.add')" method="POST">
                <input type="email" name="email" id="email" placeholder="email@example.com">
                <button class="btn" type="submit">S'INSCRIRE</button>
            </form>
        </div>
    </div>

</footer>
