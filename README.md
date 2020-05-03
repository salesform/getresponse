# getresponse
SalesForm összekötés a népszerű GetResponse hírlevélküldővel. Így a sikeres vásárlók automatikusan bekerülnek a hírlevél adatbázisba


Magyar oldala a hírlevélküldőnek: https://www.getresponse.hu/
SalesForm magyar oldala: https://www.salesform.hu

# Használata

	"first_name" => $data["name"],
  
A Getresponse first_name kapja meg a rendelő nevét
  
  
	"email" => $data["email"],

Az email megkapja az e-mail címet

	"custom_salesform_azonosito" => $data["trid"],

Egy egyedi mezőt kell létrehoznod, aminek az azonosítója: 
custom_salesform_azonosito

Ez kapja meg a tranzakció egyedi azonosítóját. Ebből lehet újravásárlási linket létrehozni

	"custom_salesform_statusz" => 0,
Egy egyedi mezőt kell létrehoznod, aminek az azonosítója: 
custom_salesform_statusz

	"custom_salesform_date" => date('Y-m-d H:i:s'),
Egy egyedi mezőt kell létrehoznod, aminek az azonosítója: 
custom_salesform_date

Ebbe kerül a rendelés leadásának ideje

	"custom_salesform_termek" => $data["product"][0]["product"],
Egy egyedi mezőt kell létrehoznod, aminek az azonosítója: 
custom_salesform_termek

Ebbe kerülnek a megrendelt termékek

	"custom_szamlazasi_cim" => $data["invoice_zipcode"]. " " .$data["invoice_city"]. " " .$data["invoice_street"] ,
Egy egyedi mezőt kell létrehoznod, aminek az azonosítója: 
custom_szamlazasi_cim

Ide kerül a számlázási adat, irányítószám, város, lakcím

	"custom_telefonszam" => $data["telephone"],
Egy egyedi mezőt kell létrehoznod, aminek az azonosítója: 
custom_telefonszam

Ide kerül a telefonszáma

	"campaign_token" => "69tNy"

Ide jön a Getresponse tól kapott token, hogy automatikusan létre tudj hozni felhasználót.


#Hova tedd?
Töltsd fel a tárhelyedre és állítsd be a SalesForm esetén annak a terméknek a webhook részébe, ahol szeretnéd, hogy bekerüljön a felhasználó
A webhook esetén csak a teljes elérési utat kell megadni https://domain.hu/mappa/fajlnev.php

Ezt a fájlt tetszőlegesen átnevezheted.
