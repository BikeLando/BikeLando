# BikeLando

## Autorzy
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
5. [Instalacja](#instalacja)
6. [Licencja](#licencja)

## Informacje ogólne
Aplikacja webowa oparta na framework’u Symfony przy wykorzystaniu wzorca projektowego MVC. Głównym założeniem projektu jest stworzenie środowiska przyjaznego rowerzystom, które w jasny i czytelny sposób pomógłby wybrać najlepsze trasy rowerowe dla userów o różnej formie. Aplikacja zbudowana jest z panelu dostępnego wszechstronnie i części dostępnej jedynie dla zalogowanych. W programie poza panelem logowania dostępne będą mapy tras, zaawansowana wyszukiwarka i filtr.

## Technologie:
* [Framework Symfony 5]
* [PHP 7]
* [JavaScript 1.8.5]
* [HTML 5] 
* [CSS 3]
* [Bootstrap]
* [jQuery]
* [MySQL]

## Warstwy MVC:
### Widoki

* Widok Index, strona główna; na stronie głównej informacja o stronie, czym się zajmuje etc, w górnym prawym rogu możliwość szybkiego zalogowania się wraz z odnośnikiem do formularza rejestracji i resetu hasła (dostępny w każdym widoku)
* Widok About, widok z krótką informacją o czym jest strona
* Widok Tours, lista tras rowerowych wraz opcją filtru (po ocenie/lokalizacji (województwie))
* Widok Account, widok pozwalający podejrzeć swoje dane
* Widok Add_tours, widok pozwalający dodać na stronę do ogólnodostępnego użytku swoją trasę rowerową
* Widok Edit, widok pozwalający edytować swoje dane
* Widok Register, widok do rejestracji nowego użytkownika
* Widok Reset, mechanizm pozwalający zresetować hasło w oparciu o wysyłkę instrukcji na po podany e-mail
* Widok User_tours, widok pozwalający przeglądać dodane przez nas trasy i ewentualne ich usuwanie oraz edycję


### Kontrolery

* Kontroler HomeController, kontroler podstawowy, otwierający stronę główną
* Kontroler AboutController, kontroler otwierający widok z zakładką "o nas"
* Kontroler ToursController, kontroler otwierający widok z zakładką "trasy"
* Kontroler RegisterController, kontroler dodający nowego użytkownika do bazy
* Kontroler EditController, kontroler edytujący dane użytkownika (hasło)
* Kontroler AccountController, kontroler wyświetlający dane z konta użytkownika (widok z zakładką 'twoje konto')
* Kontroler AddToursController, kontroler dodający nową trasę do bazy wycieczek
* Kontroler RemoveTourController, kontroler usuwający trasę z bazy
* Kontroler EditTourController, kontroler edytujący dane trasy
* Kontroler LogInController, kontroler służący do zalogowania użytkownika na stronę
* Kontroler LogOutController, kontroler służący do wylogowania użytkownika ze strony
* Kontroler ResetController, kontroler służący do wygenerowania nowego hasła w przypadku zapomnienia starego przez użytkownika
* Kontroler AddNoteController, kontroler odpowiedzialny za ocenianie tras przez użytkowników

### Modele:
#### Obiekt User, pola
* email
* password (hash md5)

#### Obiekt Tour
* id (numer porządkowy)
* name (nazwa)
* length (długość trasy)
* linkToMap (link google Maps który posłuży do wyświetlania mapy Google)
* difficulty (trudność trasy, w skali 1-10)
* region (województwo)
* authorId (email) (email-username autora)
* description (opis trasy)
* note (ocena trasy)
* numberOfNotes (liczba ocen)

Metody: 
* getAuthor()
* getRegion()
* getDifficulty()
* getLength()

#### Model Filtry:
* Funkcja filtrująca zawartość portalu po wybranych zmiennych (w klasie Tour)


## Bazy Danych
### Tabela users
#### Kolumny: 
* email [VARCHAR(255)] 
* password [TEXT]

### Tabela Trasy (tours)
#### Kolumny:
* id [INT] 
* name [VARCHAR (30)]
* length [FLOAT]
* linkToMap [TEXT]
* difficulty [INT]
* region [VARCHAR (50)]
* authorId (email) [VARCHAR (255)]
* description [TEXT (500)]
* note [FLOAT]
* numberOfNotes [INT]


## Instalacja

W celu instalacji aplikacji:
1. Zklonuj projekt GitHub na swój lokalny komputer.
2. Zainstaluj program xampp i włącz Apache oraz MySQL
3. Włącz projekt w przeglądarce w dowolny sposób (np. poprzez wpisanie adresu localhost)

##### Uwaga
W celu prawidłowego działania aplikacji lokalnie wymagane jest stworzenie lokalnej bazy danych o nazwie: bikelando z tabelami i kolumnami jak w opisie bazy danych wyżej (patrz punkt 4. [Bazy Danych](#bazy-danych))

## Licencja

Ten projekt jest udostępniony na licencji MIT. W celu uzyskania większej ilości informacji o tej licencji kliknij tutaj [MIT]. 

[Framework Symfony 5]: <https://symfony.com/>
[PHP 7]: <https://www.php.net/>
[JavaScript 1.8.5]: <https://developer.mozilla.org/pl/docs/Web/JavaScript>
[HTML 5]: <https://developer.mozilla.org/pl/docs/HTML/HTML5>
[CSS 3]: <https://developer.mozilla.org/en-US/docs/Archive/CSS3>
[Bootstrap]: <https://getbootstrap.com/>
[jQuery]: <https://jquery.com/>
[MySQL]: <https://www.mysql.com/>
[MIT]: <https://choosealicense.com/licenses/mit/>
 

