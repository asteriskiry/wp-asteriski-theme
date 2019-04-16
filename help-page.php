<?php
/**
 * Help page in admin menu
 */
?>

<div class="helppage">
    <h1>Ohjeet sivuston käyttöön</h1>
    <h3>Artikkeleiden kirjoittajille</h3>
    <h4>Kirjoitus</h4>
    <p>Kun painat "Artikkelit"-&gt;"Lisää uusi" pääset kirjoittamaan uutta artikkelia. WordPressin artikkelieditori perustuu ns. lohkoihin. Voit lisätä uusia lohkoja vasemmasta yläkulmasta plus-merkkiä painamalla. Tavalliseen tekstiin "kappale"-lohko on hyvä. Jotta artikkelit näyttäisivät hyvältä nettisivuilla ja sähköposteissa, kannattaa jokainen kappale laittaa omaan lohkoonsa (eli jokaiset tekstinpätkät jotka erottelisit rivinvaihdoilla). Listamaisiin elementteihin kuten TLDR-osioihin (mitä? missä? milloin?) tai viikkotiedotteen osat kannattaa laittaa "lista"-lohkoihin. Kannattaa käyttää esikatseluominaisuutta. Voit editoida artikkelia myös HTML-koodina kun painat oikeasta yläkulmasta kolmea palloa ja valitset "Koodieditori".</p>
    <h4>Artikkelin asetukset</h4>
    <p>Oikealla näet artikkelin asetukset. Välilehtinä on "Asiakirja" ja "Lohko". Aina kun jokin lohko on valittu, siirryt automaattisesti lohkon asetuksiin. Kaikki merkittävä on yleensä koko artikkelin asetuksissa eli "Asiakirja"-välilehdellä.</p><p> "Kiinnitä etusivulle"-valinta tarkoittaa sitä, että artikkeli näkyy etusivulla ensimmäisenä, vaikka ei olisi uusin.</p><p>Valitse aina artikkelillesi tasan yksi kategoria "Kategoriat"-kohdasta (Tämä on se mikä näkyy sähköpostien otsikoissa).</p><p>Avainsanoihin kannattaa laittaa jotain yleisiä artikkelin aiheita.</p><p> Artikkelikuvia kannattaa käyttää aina kun mahdollista, ne tuovat vähän eloa sivustoon. Kun olet lisännyt artikkelikuvan, se kannattaa editoida mahdollisimman laajakulmaiseksi. Tämän voit tehdä kuvanvalintavalikossa valitsemalla haluamasi kuvan ja painamalla oikealta "Muokkaa kuvaa". Tästä välilehdestä kuvan yläpuolella on symboleja. Klikkaa ensimmäistä vasemmalta niin kuvan päälle ilmestyy rajausrajat. Rajaa mukavan kokoiseksi ja paina uudelleen symbolia. Tämän jälkeen paina "Tallenna". Voit nyt sulkea avautuneen välilehden. Avaa kuvanvalitsin uudelleen ja nyt tilalla on muokattu kuva. Voit myös tietysti editoida kuvat etukäteen valitsemallasi kuvanmuokkausohjelmalla. Kuvan tulisi olla ainakin kaksi kertaa niin leveä kuin mitä se on korkea (esim. 600x300px).</p><p>Seuraavana vuorossa "Ote"-kohta. Se tarkoittaa lyhyttä tiivistelmää artikkelista. Tämä näkyy etusivulla artikkelilistassa. Esimerkiksi viikkotiedotteiden kohdalla tämän käyttö on järkevää.</p><p>"Keskustelu"-kohdasta voit valita voiko artikkeliasi kommentoida. Vain rekisteröityneet käyttäjät voivat kommentoida mitään.</p><p>"Riski-info"-kohdasta voit valita lähteekö artikkeli samalla sähköpostilistalle. Sähköposti lähetetään kun painat "Julkaise"-nappia.</p>
    <h3>Opintomateriaalivastaaville</h3>
    <p>Opintomateriaalivastaavan sähköpostiosoitteen voi asettaa kohdasta "Tenttiarkisto"-&gt;"Asetukset". Rekisteröityneet käyttäjät voivat lähettää tenttejä arvioitavaksesi. Tästä tulee sähköposti (kahteen kertaan toistaiseksi), jossa mukana linkki josta pääset julkaisemaan tentin.</p>
    <h3>Ylläpitäjille</h3>
    <p>Ylläpito-oikeudelliset käyttäjät pystyvät muokkaamaan sivustoa aika paljon koskematta koodiin lainkaan. Tässä käydään lähinnä sivuston custom-ominaisuudet, koska WordPressissä vakiona olevia asetuksia on todella suuri määrä ja ohjeita niitten säätämiseen löytyy netistä paljon.</p>
    <h4>Sivuilla näkyvät elementit</h4>
    <p>"Ulkoasu"-&gt;"Mukauta" -kohdasta pääsee muokkaamaan merkittävimpiä sivuilla näkyviä elementtejä.</p><p>Sivu -ja alapaneelissa näkyviä elementtejä eli "vimpaimia" pääsee muokkaamaan kohdasta "Ulkoasu"-&gt;"Vimpaimet". WordPressin mukana tulee melko paljon erillaisia "vimpaimia" (englanniksi "widget") ja ohjeita niiden käyttöön löytyy googlaamalla. Asteriskilla on kuitenkin käytössä muutama itse tehty custom-"vimpain". Custom-vimpaimia ovat mm. "Asteriski Tulevat tapahtumat" joka hakee tapahtumakalenterista tulevat tapahtumat, "Asteriski Muuta" joka näyttää jotakin linkkejä ja "Asteriski Liity Riski-infoon" joka näyttää Riski-infoon liittymisikkunan. Nämä ovat suurimmaksi osaksi aika selkeitä, mutta "Muuta"-vimpaimessa on kohta jossa voi määritellä uusia linkkejä. Nämä tulee määritellä muodossa<code>&lt;a href="https://asteriski.fi/esimerkki"&gt;Esimerkkilinkki&lt;/a&gt;</code>.</p><p>Sivuston yläosassa olevan navigointipalkin linkkejä pääsee säätämään kohdasta "Ulkoasu"-&gt;"Valikot"</p>
    <h4>Käyttäjänhallinta</h4>
    <p>Kirjotan myöhemmin</p>
    <h4>Hallituksen vaihtuminen</h4>
    <p>Hallituksen vaihduttuessa vanhojen hallituslaisten oikeudet tulisi säätää "Tenttiarkisto"-käyttäjäksi. Uusille hallituslaisille uudet tunnukset ja oikeuksiksi "Kirjoittaja". Sivuston kannalta enemmän vastuullisille hallituslaisille (PJ, VPJ, Tiedotusvastaava) rooliksi "Päätoimittaja".</p>
    <h4>Muuta</h4>
    <p>"Lisäosat", "Profile Builder", "Työkalut", "Asetukset" ja "Sähköposti" -valikoiden alta löytyvien asioiden säätämisessä kannattaa konsultoida palvelinvastaavaa.</p>
    <h3>WWW-toimikuntalaiselle</h3>
    <ul>
        <li><a href="https://github.com/asteriskiry">GitHub-organisaatio</a></li>
        <li><a href="https://developer.wordpress.org/">WordPress developer sivut</a></li>
    </ul>
    <h3>Muuta</h3>
    <p>Epäselvissä tilanteissa kannattaa aina kysyä palvelinvastaavalta.</p>
    <h3>Linkkejä</h3>
    <ul>
        <li><a href="https://wordpress.org/support/">WordPressin virallinen dokumentaatio</a></li>
        <li><a href="https://wordpress.org/support/article/wordpress-editor/">Uuden lohkotyylisen artikkelieditorin käyttöohjeet</a></li>
        <li><a href="https://wpopas.fi/videot/">Suomenkielisiä video-ohjeita</a></li>
    </ul>
</div>

<?php
