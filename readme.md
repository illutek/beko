##BEKO bvba

###Article
Dit inhoudstype gebruikt voor alle core teksten, welcome, schrijnwerkerij, 
industrië en koeltorens, de welkome tekst is gepubliseerd op de homepage en
is daardoor een teaser (link op titel en readmore verwijdert)
Andere zijn volledige nodes (blokken met views).  
Op node--article.tpl.php de h1 en h2 op teaser controle (SEO h1 als eerst met
verschillende h2)

####Sub articles
Deze worden via een tab systeem onderaan de artcles getoond, na lang overdenken deze op een 
eenvoudige manier via een inhoudstype bv 'subArticle' en dan de juiste tonen via de array plaats.  
Een simple oplossing, dit omdat we verwachten dat er niet onmiddelijk nood is aan een uitbreiding
van het aantal subartikelen.

###Schrijnwerkerij
Onder de tekst 2 onderverdelingen Binnen- en buiten schrijnwerkerij, niet in een tabel
maar 2 extra div's, in het inhoudstype uiteraard ook 2 extra tekstvakken of misschien een
tekstveld (aantal bv 10)

Probleem kan op de home pagina geen bootstrap accordion of tabs gebruiken omdat deze
een manier van ankerpunten gebruikt dat de onepage gebruikt.
Proberen te laten scrollen met de code van Koen Timmers, dit is uiteindelijk de oplossing geweest.


wow effect op de section-content op 20151213 het fadeIn effect


###Form
De ```input[type='submit']``` op het webform display none, via form_alter een ```button[type='submit']``
aangemaakt om de arrow van font-awesome te kunnen plaatsen.  
De online versie heeft 'webform_client_form_4' hier wordt op gecontroleerd.  

Het formulier wordt sticky wanneer het de top van de page bereikt, het bestand sticky.js zorgt hiervoor, 
het aanroepen van dit bestand gebeurde in eerste instantie in het .info bestand, maar dit gaf dan weer 
problemen op de page.tpl.php omdat daar geen form getoond wordt en ook de link naar de modal 
(copyright en voorwaarden) werkt niet.  
Het aanroepen van sticky.js gebeurt nu op template.php onder voorwaarde if (drupal_is_front_page()){} 
als ook een weight moeten meegeven om ervoor te zorgen dat deze later (sticky.js) komt dan jquery.min.js




