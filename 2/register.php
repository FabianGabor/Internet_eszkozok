<form action="" method="post">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <div class="medium-6 cell">
                <label>Vezetéknév
                    <input type="text" name="vezeteknev" placeholder="Vezetéknév">
                </label>
            </div>

            <div class="medium-6 cell">
                <label>Keresztnév
                    <input type="text" name="keresztnev" placeholder="Keresztnév">
                </label>
            </div>

            <div class="medium-6 cell">
                <label>Születési idő
                    <input type="date" name="szuletes" placeholder="Születési idő">
                </label>
            </div>

            <div class="medium-6 cell">
                <label>E-mail cím
                    <input type="email" name="email" placeholder="E-mail cím">
                </label>
            </div>

            <div class="medium-6 cell">
                <label>Jelszó
                    <input type="password" name="password" placeholder="Jelszó">
                </label>
            </div>

            <div class="medium-6 cell">
                <label>Jelszó újra
                    <input type="password" name="password" placeholder="Jelszó újra">
                </label>
            </div>

            <div class="medium-6 cell">
                <fieldset class="large-12 cell">
                    <legend>Neme</legend>
                    <input type="radio" name="nem" value="ferfi" id="nemFerfi" required><label for="nemFerfi">Férfi</label>
                    <input type="radio" name="nem" value="no" id="nemNo" required><label for="nemNo">Nő</label>
                </fieldset>
            </div>

            <div class="medium-6 cell">
                <label>Rövid leírás
                    <textarea name="leiras" placeholder="Rövid leírás"></textarea>
                </label>
            </div>

            <div class="medium-6 cell">
                <label>GDPR nyilatkozatot elolvastam, elfogadom
                    <input type="checkbox" name="gdpr" placeholder="GDPR nyilatkozatot elolvastam, elfogadom">
                </label>
            </div>

        </div>
    </div>
</form>
<?php