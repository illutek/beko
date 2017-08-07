# BEKO bvba

### Article
Dit inhoudstype gebruikt voor alle core teksten, welcome, schrijnwerkerij, 
industrië en koeltorens, de welkome tekst is gepubliseerd op de homepage en
is daardoor een teaser (link op titel en readmore verwijdert)
Andere zijn volledige nodes (blokken met views).  
Op node--article.tpl.php de h1 en h2 op teaser controle (SEO h1 als eerst met
verschillende h2)  

#### Sub articles
Deze worden via een tab systeem onderaan de artcles getoond, na lang overdenken deze op een 
eenvoudige manier via een inhoudstype bv 'subArticle' en dan de juiste tonen via de array plaats.  
Een simple oplossing, dit omdat we verwachten dat er niet onmiddelijk nood is aan een uitbreiding
van het aantal subartikelen.  
Bovenstaande niet kunnen uitvoeren, dus gaan we voor de module quicktabs, na het opzetten
gemerkt dat dit niet lukt als we meerdere quicktabs regions op een onepage willen instellen.  
  
Voor een minder profesionele oplossing gegaan, één inhoudstype subArticlesQuicktabs  
(niet geweldig is nog een overblijfsel van het vorige experiment), bij views voor elk subarticle
een block aangemaakt (paginering 1 item en skip) om het juiste article te tonen. Het item, skip ook
niet toegepast de waarde van skip wijzigt na toevoeging van een extra subartikel, geen oplossing
als in de toekomst de vraag komt om één subartikel toe te voegen, dan maar voor het taxonomiesysteem
gegaan en in views hier op gefilterd dit tag veld, met de module field permissions, verborgen voor
de editor.

### Schrijnwerkerij
Onder de tekst 2 onderverdelingen Binnen- en buiten schrijnwerkerij, niet in een tabel
maar 2 extra div's, in het inhoudstype uiteraard ook 2 extra tekstvakken of misschien een
tekstveld (aantal bv 10)

Probleem kan op de home pagina geen bootstrap accordion of tabs gebruiken omdat deze
een manier van ankerpunten gebruikt dat de onepage gebruikt.
Proberen te laten scrollen met de code van Koen Timmers, dit is uiteindelijk de oplossing geweest.  


wow effect op de section-content op 20151213 het fadeIn effect  


### Form
De ```input[type='submit']``` op het webform display none, via form_alter een ```button[type='submit']``
aangemaakt om de arrow van font-awesome te kunnen plaatsen.  
De online versie heeft 'webform_client_form_4' hier wordt op gecontroleerd.  

Het formulier wordt sticky wanneer het de top van de page bereikt, het bestand sticky.js zorgt hiervoor, 
het aanroepen van dit bestand gebeurde in eerste instantie in het .info bestand, maar dit gaf dan weer 
problemen op de page.tpl.php omdat daar geen form getoond wordt en ook de link naar de modal 
(copyright en voorwaarden) werkt niet.  
Het aanroepen van sticky.js gebeurt nu op template.php onder voorwaarde if (drupal_is_front_page()){} 
als ook een weight moeten meegeven om ervoor te zorgen dat deze later (sticky.js) komt dan jquery.min.js

### Realisaties
De 4 onderdelen onmiddelijk op de page-front tonen zonder tussen pagina zoals nu op 2016-11-21 het geval is.
TODO Eerste idee is om een sub-block onder te brengen in de Realisatie Tekst block 'Realisaties Fotos'

### Copyright and Algemene voorwaarden
Modal tonen met js 'custom-modal.js'

#### Opmerkingen
Het oproepen van externe files zoals 'font-awesome.min.css' en 'jquery.min.js' geeft een aantal meldingen bij  
Google Speedtest dus beide files in het theme opgenomen, fontawesome.min.css wordt op het info bestand opgeroepen en  
de jquery.min.js op template.php  

##### Opmerking
Onder opmerkingen van mail 2017-08-07 gevraagd om titel op een bepaald 
tabblad aan te passen, dit zit op de tpl.php files templates/layout/subarticles/




