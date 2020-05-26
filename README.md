# BikeLando
Aleksandra Rawicz-Galińska
Małgorzata Wieteska
Adam Hilaruk

# Spis treści
1. [Informacje ogólne](#informacje-ogolne)
2. [Technologie](#technologie)
3. [Warstwy MVC](#warstwy-mvc)
    1. [Widoki](#widoki)
    2. [Kontrolery](#kontrolery)
    3. [Modele](#modele)
        1. [Obiekt User](#obiekt-user)
        2. [Obiekt Tour](#obiekt-tour)
        3. [Model Filtry](#model-filtry)
4. [Bazy Danych](#bazy-danych)
    1. [Tabela Users](#tabela-users)
	    1. [Kolumny](#kolumny1)
    2. [Tabela Trasy](#tabela-trasy)
	    1. [Kolumny](#kolumny2)

## Informacje ogólne
Aplikacja webowa oparta na framework’u Symfony przy wykorzystaniu wzorca projektowego MVC. Głównym założeniem projektu jest stworzenie środowiska przyjaznego rowerzystom, który w jasny i czytelny sposób pomógłby wybrać najlepsze trasy rowerowe dla userów o różnej formie. Aplikacja stworzona jest z panelu dostępnego wszechstronnie i części dostępnej jedynie dla zalogowanych. W programie poza panelem logowania dostępne będą mapy tras, zaawansowana wyszukiwarka i filtr.

## Technologie:
* [Framework Symfony 5]
* [PHP 7]
* [JavaScript 1.8.5]
* [HTML 5] 
* [CSS 3]
* [Bootstrap]
* [jQuery]
* [SQL]

## Warstwy MVC:
### Widoki

* Widok index, strona główna; na stronie głównej lista tras rowerowych wraz opcją filtru (po ocenie/lokalizacji (miejscowości); w panelu bocznym panel logowania, z odnośnikiem do rejestracji oraz resetu hasła
* Widok register, widok z formularzem rejestracji do strony
* Widok resetu hasła 
* Widok addTour, widok pozwalający dodać na stronę do ogólnodostępnego użytku swoją trasę rowerową
* Widok viewYourTours, widok pozwalający przeglądać dodane przez nas trasy i ewentualne ich usuwanie oraz edycję
* Widok profile, widok pozwalający podejrzeć swoje dane oraz je edytować

### Kontrolery

* Kontroler AddUser, kontroler dodający rejestrującego się użytkownika do bazy
* Kontroler EditProfile, kontroler edytujący dane użytkownika
* Kontroler AddTour, kontroler dodajacy nowa trase do bazy wycieczek
* Kontroler RemoveTour, kontroler usuwajacy trasę z bazy
* Kontroler EditTour, kontroler edytujący dane trasy
* Kontroler LogIn, kontroler służący do zalogowania użytkownika na stronę
* Kontroler LogOut, kontroler służący do wylogowania użytkownika ze strony
* Kontroler RecoverPassword, kontroler służący do odzyskania zapomnianego hasła przez użytkownika

### Modele:
#### Obiekt User, pola
* email
* password (hash md5)

#### Obiekt Tour
* name
* author
* difficulty
* length
* map
* region
* description
Metody: 
* getAuthor()
* getRegion()
* getDifficulty()
* getLength()

#### Model Filtry:
* Funkcja filtrująca zawartość portalu po wybranych zmiennych


## Bazy Danych
### Tabela Users
#### Kolumny: 
* email [VARCHAR(255)] 
* password [TEXT]

### Tabela Trasy
#### Kolumny:
* id [int] 
* name [VARCHAR (30)]
* length [float]
* linkToMap [TEXT]
* difficulty [INT]
* region [VARCHAR (50)]
* authorId (email) [VARCHAR (50)]
* description [TEXT (500)]

[Framework Symfony 5]: <https://symfony.com/>
[PHP 7]: <https://www.php.net/>
[JavaScript 1.8.5]: <https://developer.mozilla.org/pl/docs/Web/JavaScript>
[HTML 5]: <https://developer.mozilla.org/pl/docs/HTML/HTML5>
[CSS 3]: <https://developer.mozilla.org/en-US/docs/Archive/CSS3>
[Bootstrap]: <https://getbootstrap.com/>
[jQuery]: <https://jquery.com/>
[SQL]: <https://www.mysql.com/>
 

