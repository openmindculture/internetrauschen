<?php global /* @var {String} */ $get_the_title; ?>
<?php $get_the_title = 'Kontakt - Impressum'; ?>
<?php include_once('includes/header.php') ?>
  <p>Kontaktdaten und E-Mail-Adressen der Reaktion und freier Mitarbeitenden am Internetrauschen.</p>
<h2>Impressum</h2>
Herausgeber ist Ingo Steinke aus Berlin. Kontakt: siehe Kontakt.
Weitere Informationen siehe: https://www.ingo-steinke.de/#imprint</p>
Hinweis: dies ist ein parodierendes Kunstprojekt. wir machen uns weder externe Inhalte noch Zitate zu eigen.
Inhaltliche und technische Fehler sind vielleicht beabsichtigt. Alles ist ohne Gewähr. Änderungen vorbehalten.
<p>

    <p><strong>Kontakt<br><br></strong>
    <ul>
    <li>Info Kontakt &lt;<a href="mailto:info.kontakt@internetrauschen.de">info.kontakt@internetrauschen.de</a>&gt;</li>
    <li>Ingo Steinke &lt;<a href="mailto:ingo.steinke@internetrauschen.de">ingo.steinke@internetrauschen.de</a>&gt;</li>
    <li>Honey Pot &lt;<a href="mailto:honey.pot@internetrauschen.de">honey.pot@internetrauschen.de</a>&gt;</li>
    <li>Tar Pit &lt;<a href="mailto:tar.pit@internetrauschen.de">tar.pit@internetrauschen.de</a>&gt;</li>
    <li>Tel. 12 34 56 78 - 9</li>
    <li><a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A40688370&keywords=kontakt&origin=RICH_QUERY_SUGGESTION" target="_blank" rel="noopener">Kontakt bei LinkedIn</a></li>
</ul>

<form action="https://internetrauschen.de/kontakt.php" method="POST" onSubmit="return ">
<input type="hidden" name="form-name" value="contact" />
    <input type="hidden" name="captcha" value="false" />
    <input type="hidden" name="csrf-token" value="randomUUID()" />
    <label for="name">Name:<input type="text" name="name" placeholder="Name" required></input></label><br>
    <label for="email">E-Mail:<input type="email" name="email" placeholder="E-Mail" required></input></label><br>
    <label for="message">Nachricht:<textarea name="message" placeholder="Nachricht" required></textarea></label><br></br>
    <label for="url">Website URL (optional):<input type="text" name="url" placeholder="https://www."></input></label><br>
    <label for="captcha2">Sicherheitsfrage:<input type="text" name="captcha2" placeholder="2+2="></input></label><br>
    <input type="submit" value="Absenden"></input>
    Deine Nachricht wurde noch nicht gelesen. Fehler: validateForm() ist nicht definiert.
</form>

</div>
<?php include_once('includes/footer.php') ?>