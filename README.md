# **Pokemon stránka** 
![pokemonimg](src/img/smallicon.png)

Moje stránka slouží jako informativní stránka pro pokémon nadšence.<br/>
Má moderní a jednoduchý design, který každého uchvátí.<br/>
Célá stránka je responzivní a je připravena k používání na jakýmkoliv přístroji od počítače k mobilu.<br/>
Stránka obsahuje: 
>1. Home page
>2. Pokedex page
>3. Search page
>4. Login page
>5. Register page

## **Home page**
Obsahuje login a register tlačítka potom překrásný obrázek pokemona 

## **Pokedex page**
Obsahuje kartičky s pokemony a inforamcemi o nich uživatel si vždy muže načíst více kartiček pomocí talčítka.<br/>
Reším to tak že odešlu requesty na API, které mi posílají zpátky JSON, se kterým nadále pracuji.

## **Search page**
Obsahuje search bar s tlačítkem uživatel napíše jmeno pokemona a on mu vyjede jako kartička.<br/>
Funguje to tak že se odesílají API requesty, které potom posílají zpátky JSON, se kterým nadále pracuji.

## **Login page**
Obsahuje klasický login form s inputy pro jmeno a heslo nadále je tam tlačítko kterým se ověří informace zadané uživatelem.<br/>
Informace se ověřují s informacemi uloženými v databázi vše je řízeno pomocí php.

## **Register page**
Obsahuje klasický register form s inputy pro jmeno a heslo a zopakování hesla nadále je tam tlačítko kterým se odešlou informace<br/> 
jmeno a hashnuté heslo do databáze po dokončení registrace se může uživatel poté přihlásit pomocí login formu. Vše je řízeno pomocí php.

# **Technologie**
>1. PHP + HTML + CSS + JS 
>2. Bootstrap
>3. jquery
>4. Visual studio code
>5. XAMPP Server

# **Instalace**
>1. stáhnete repository `git clone https://github.com/cesarjakub/WA_Project_Final.git`
>2. nastavíte si xampp server
>3. potom otevřete svuj oblíbeny [webový prohlížeč](https://www.google.cz/) a do horní lišty napište `localhost/WA_Project_Final`

### **Chybí**
>1. local storage -> nepřišlo mi vhodné implementovat na stránku
>2. logování chybného přihlášení 3x