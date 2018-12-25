@extend('layouts/page', ['title' => "Coach - Réservation", 'page_title' => "Réservation", 'id' => "reservation-header"])

@content

<div class='reservation-section'>

    <div class="row" id="form_row">

        <form action="@url('reservation.send')" method="POST">

            <div class="row u-full-width">
                <div class="row">
                    <div class="six columns">
                        <label for="email">Adresse e-mail</label>
                        <input class="u-full-width" type="email" name="email" id="email" placeholder="email@example.com">
                    </div>
                    <div class="six columns">
                        <label for="phone">Numéro de téléphone</label>
                        <input type="number" name="phone" id="phone" placeholder="+237" class="u-full-width">
                    </div>
                </div>

            </div>

            <div class="row u-full-width">
                <label for="date">Date de rendez-vous</label>
                <input class="u-full-width" type="date" name="date" id="date">
            </div>

            <div class="row u-full-width">
                <label for="from">Interval de - à</label>
                <div class="row">
                    <input type="time" class="six columns" name="from" id="from">
                    <input type="time" name="to" id="to" class="six columns">
                </div>
            </div>

            <div class="row u-full-width">
                <label for="message">Message (facultatif)</label>
                <textarea class="u-full-width" name='message' id='message' cols='30' rows='50'></textarea>
            </div>

            <input type="hidden" name="type" id="type" value="{{ $slug }}">

            <div class="row u-full-width">
                <button class="btn">Envoyer</button>
            </div>

        </form>

    </div>

</div>

@endcontent
