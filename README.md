# Description

- Creiamo una tabella trains e relativa Migration

- Ogni treno dovrà avere almeno:
  - Azienda
  - Stazione di partenza
  - Stazione di arrivo
  - Orario di partenza
  - Orario di arrivo
  - Codice Treno
  - Numero Carrozze
  - In orario
  - Cancellato

- È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.

- Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.

- Create il modello Model relativo alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

1. Trenitalia
	* Train number: Trenitalia 1
	* Departure station: Roma Termini
	* Arrival station: Firenze Santa Maria Novella
	* Departure time: 07:00
	* Arrival time: 10:00
	* Train type: Frecciarossa
2. InterCityNotte
	* Train number: InterCityNotte 54337
	* Departure station: Venezia Santa Lucia
	* Arrival station: Milano Centrale
	* Departure time: 23:30
	* Arrival time: 02:30
	* Train type: InterCityNotte
3. Frecciarossa
	* Train number: Frecciarossa 22345
	* Departure station: Roma Termini
	* Arrival station: Milano Centrale
	* Departure time: 06:00
	* Arrival time: 09:00
	* Train type: Frecciarossa
4. InterCity
	* Train number: InterCity 76456
	* Departure station: Firenze Santa Maria Novella
	* Arrival station: Milano Centrale
	* Departure time: 07:00
	* Arrival time: 10:00
	* Train type: InterCity
5. Regionale
	* Train number: Regionale 12345
	* Departure station: Roma Termini
	* Arrival station: Napoli Centrale
	* Departure time: 08:00
	* Arrival time: 11:00
	* Train type: Regionale