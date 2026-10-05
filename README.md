<img width="1147" height="867" alt="image" src="https://github.com/user-attachments/assets/d0a13476-50ad-47cf-87d3-54af57a1faf5" />




# FunForAll – Laitevarausjärjestelmä (Backend)

Tämä projekti on ohjelmistokehittäjän tutkintoon liittyvä PHP-pohjainen taustajärjestelmä laitevarauksille. Sovellus hoitaa varausjärjestelmän liiketoimintalogiikan, tietokantayhteydet sekä käyttäjien turvallisen tunnistautumisen. 

Projekti on erinomainen esimerkki puhtaasta arkkitehtuurista, tietoturvallisista tietokantakyselyistä ja datan validoinnista.

## 🛠 Käytetyt teknologiat
* **Kieli:** PHP
* **Tietokanta:** Relaatiotietokanta (MySQL/MariaDB, helposti sovitettavissa PostgreSQL-ympäristöön)
* **Arkkitehtuuri:** MVC-malli (Model-View-Controller)
* **Paketinhallinta:** Composer

## 📌 Projektin ydinominaisuudet ja arkkitehtuuri
* **Arkkitehtuuri ja Singleton-malli:** Sovellus on jaettu selkeään MVC-rakenteeseen (Model-View-Controller). Tietokantayhteys (PDO) on toteutettu resurssitehokkaalla Singleton-suunnittelumallilla, jolloin sovellus luo ja hallitsee vain yhtä tietokantayhteyttä kerrallaan.
* **Turvallinen tietokannan käsittely:** Kaikki tietokantaoperaatiot on eriytetty omiin malliluokkiinsa (`laite.php`, `varaaja.php`, `varaukset.php`). Jokainen tietokantakysely hyödyntää turvallisia valmisteltuja lausekkeita (Prepared Statements) SQL-injektioiden estämiseksi.
* **Datan validointi ja XSS-suojaus:** Käyttäjän syöttämä data tarkistetaan tiukasti (esim. säännöllisillä lausekkeilla ja suodattimilla). Lisäksi sovelluksen apufunktiot (helpers) puhdistavat syötteet ylimääräisistä merkeistä (`trim`, `stripslashes`) ja estävät Cross-Site Scripting (XSS) -hyökkäykset muuntamalla tulosteet turvalliseen muotoon (`htmlspecialchars`).
* **Käyttäjien hallinta ja kryptografia:** Sovellus sisältää turvallisen rekisteröinnin ja kirjautumisen. Salasanat suojataan `password_verify`-funktiolla. Tilin vahvistukseen ja salasanojen palautukseen tarvittavat uniikit koodit generoidaan satunnaisuutta (`rand()`) ja tiivistealgoritmeja (esim. SHA1) hyödyntäen.
* **Salaisuuksien hallinta:** Tietokannan isäntä, nimi, käyttäjäntunnus ja salasana luetaan dynaamisesti erillisestä konfiguraatiosta, eikä niitä paljasteta julkiseen versiohallintaan.

## 🚀 Paikallinen testaus (Localhost)
1. Kloonaa tämä repositorio koneellesi.
2. Varmista, että käytössäsi on paikallinen palvelinympäristö (esim. XAMPP tai Laragon), jossa on Apache ja tietokanta käynnissä.
3. Siirrä projektin tiedostot palvelimen julkiseen hakemistoon (esim. `htdocs/funforall`).
4. Aja komento `composer install` asentaaksesi tarvittavat kirjastot.
5. Määritä paikallisen tietokantasi tunnukset projektin `.htaccess`- tai `.env`-tiedostoon.
6. Aja tietokannan luontiskriptit (SQL-dump) tietokantaasi rakenteen pystyttämiseksi.
7. Avaa selaimessa osoite: `http://localhost/funforall`
