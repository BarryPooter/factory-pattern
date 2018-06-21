### Bijhorende vragen voor opdracht


##### Welk design pattern is gekozen?
Er is gekozen voor de Factory Pattern.

##### Wat zijn de kenmerken (toegevoegde waarde) van dit design pattern?
Door de Factory Pattern te gebruiken kun je (business) logic beheerbaar op één plek onderhouden- in plaats van deze logica in de Client weg te moeten schrijven.

##### Welke concept is bedacht om het pattern te kunnen toepassen?
Ik heb gekozen voor het maken van een VehicleFactory - wat een abstracte klasse is en door de MotorcycleFactory & CarFactory beiden worden ge-inherit

De logica is weggeschreven in de Factories, waarbij een auto 3 verschillende kleuren mag hebben - en altijd random is. De Motorcycle is altijd hetzelfde.

##### Wat zijn de responsibilities van de geimplementeerde classes?
- De Vehicle \<interface\> class bepaald de methodes waaraan elke vehicle zich moet voldoen.
- De ConcreteVehicle stelt een basis op voor elk voertuig.
- De Car & Motorcycle extenden de ConcreteVehicle.
- De VehicleFactory is een simpele abstract class, welke bepaald dat subclasses de `build()` method moeten bevatten.
- De Factories instantieëren de desbtreffende SubjectClass met eventuele additionele logica toegevoegd die nodig is voor het instantieëren.



##### In welk opzicht wordt polymorfie bereikt?

Polymorfie wordt bereikt doordat de gebruikte Factories allemaal subclasses zijn van de abstract VehicleFactory class en de abstract methode `build()` moeten bevatten. Deze heeft ander gedrag voor de elke subclass van de VehicleFactory.
