# Referencie na predchadzajúce projekty

# *Projekt 1 – Január 2021 – Január 2022*

Bol vytvorený na správu klientských portfólií spoločnosti.
Web obsahuje funkcie autentifikácie - knižnica ion-auth nám to zabezpečila po nakonfigurovaní.
Celý projekt je naviazaný na MariaDB databázu, z ktorej vyťahujeme údaje na web. 
Web má za úlohu zobraziť klientovi po prihlásení jeho dashboard a informácie viazané k jeho účtu, može robiť operácie s jeho účtom tak aby mohol všetko pohodlne vyriešiť pár klikmi – skontaktovať sa s podporou, urobiť deposit/withdrawal request, zvoliť si produkt a zároveň vidieť kompletný prehľad jeho portfólia online – transakcie, requesty, hodnotu a rozloženie portfólia.

Admin dashboard obsahuje údaje o klientoch, kde s nimi môže interagovať. Každý krok ktorý vykoná klient musí byť schválený adminom alebo prípadne má viac krokov, ktoré admin/klient robia – výber/vklad, vytvorenie/zrušenie účtu, rovnako produktu.  
Zároveň sme riešili emailovú Automatickú konverzáciu, formuláre a bežné veci ako login logout, register, forgot pwd... 
Prikladám Vám ukážku controllerov : Admin (dashboard admina), Dashboard(klientský dashboard) s dvoma statmi, a Finance(výber produktu pri založení účtu a interakcia výber/vklad)
Taktiež prikladám modely s queries do dtb, a views ktoré pripadajú adminovi/klientovi

Link na github : https://github.com/TaTraja/referencie/tree/main/Projekt%201

# *Projekt 2 – https://TaTraja.art – október 2021 – Marec 2021, (bude sa trochu pokračovať s vývojom)*

Zatiaľ jednoduchši projekt, zatiaľ jediná funkcionalita je vyplnenie formulára od klienta a odoslanie mailu na admin mail, zamerali sme sa skôr na obsah a development dalšieho projektu, stále je to WIP a len jedna časť z viacerých.
Formuláre aj takmer celý web je už v dvoch jazykoch a hádam sa bude napájať aj na databázu.

Do projektu pridám formulár s controllerom s funkciou odoslania na mail. View ktoré k tomu prislúcha. 

Link na github : https://github.com/TaTraja/referencie/tree/main/Projekt%202

# *Projekt 3 – https://srg.tatraja.art + Demo videohra na itch.io – Júl/August 2021*

Pripravoval som web pre prípad herného štúdia, nie je to tip top ale učil som sa trochu CSS a JS a Bootstrap a jQeuery .
Venoval som sa aj gamedesignu v Unity 3D a trochu C# .
Spravené boli v podstate 3 hry – Tahova strategia User vs. AI , tá istá hra ale online s API na našom serveri (nedokončené), Hrateľné demo Hit and Run – Zombie.
API a Multiplayer už mal zabezpečený setup, matchmaking a gameplay, dalo sa matchnut cez QR kód a mali sme funkčný user management - prikldám ukážku zo strany serveru, ktorý sme budovali na Codeigniteri, taktiež aj stranu klienta z Unity/samotnej hry v prehliadači ktorý bežal na UnityGL.
K hrateľnej hre prikladám tiež kod na ukážku - dropovanie itemov, enemy controller a gameplay manager.

Link na github : https://github.com/TaTraja/referencie/tree/main/Projekt%203
Link na hru : https://smallrobotgames.itch.io/hit-and-run-demo

# *Projekt 4 – https://nft.tatraja.art – Január 2022-Marec 2022 and not done yet*

Tento web som robil v spolupráci so studentmi z Dánskej školy – Zealand – Academy of technologies v Køge– formou internshipu. 
Projektu som sa zúčastnil ako team leader a koordinátor. Celý rojekt je postavený na React.js a dizajn je spravený v Tailwind od základu. Dizajn a návrh som podal do rúk študentom, ktorí od mockupov a wireframov sme prešli až k takmer hotovému produktu za cca 3 mesaice, ja som sa venoval backendu a samotnému web3.0 konceptu. Na prácu sme použili CandyMachine v2 od Metaplexu. Po tomto projekte poznám základy Node.js, Tailwindu, GSAP a trochu Three.js, JavaScriptu a TypeScriptu, pracoval som ja s Bashom
K projektu prikladám časti webu, ako dizajn, kód APPky, ktoré sme robili, candy-machine je kód Metaplex.


Link na github : https://github.com/TaTraja/referencie/tree/main/Projekt%204

*
Pracoval som ešte s ďalšími projektmi ktoré buď neuspeli, nedokončili sa alebo boli vytorené za pár hodín 
– web pre donáškovú službu, fotoblog (z ktorého sa spravil nakoniec tatraja projekt), eshopy. 

Skúsenosť mám aj s Wordpressom, projekt 1 bol postavený najskôr na WP a neskôr sa prerábal do Codeigniteru lebo WP nebol .. vhodný.

