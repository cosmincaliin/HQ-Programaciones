# Professor Assistant Application

## Descripció i Objectius:
Benvinguts al projecte **aQ. Professor Assistant**, una aplicació web desenvolupada amb PHP, MySQL i Laravel, amb l'objectiu principal de facilitar als professors la gestió de les seves programacions didàctiques. A continuació, es detallen els principals objectius i requeriments del projecte:

### Objectius:
El principal objectiu és crear una eina eficient que ajudi els professors en l'organització i gestió de les seves Unitats Formatives (UF), Resultats d'Aprenentatge (RA), així com els criteris d'avaluació i continguts associats.

### Requeriments Funcionals:
1. **Sistema de Login:**
   - Implementació d'un sistema d'autenticació per a professors i administradors.

2. **Gestió de Programacions Didàctiques:**
   - Capacitat per a crear, modificar i eliminar programacions.

3. **Gestió de Unitats Formatives (UF):**
   - Administració de les UF, incloent la creació, modificació i eliminació.

4. **Gestió de Resultats d'Aprenentatge (RA):**
   - Gestió dels RA dins de cada UF, amb l'addició, modificació i eliminació dels criteris d'avaluació i continguts associats.

5. **Rols d'Usuari:**
   - Diferenciació entre rols d'usuari: professor i administrador.

6. **Vista d'Administrador:**
   - Capacitat de l'administrador per veure, crear, modificar i eliminar totes les programacions i els seus components.

7. **Altres Funcionalitats:**
   - L’administrador pot crear un Mòdul amb els seus RA, Criteris i Continguts.
   - El professor pot crear una programació del mòdul i afegir activitats.
   - Validació de totes les activitats de cada UF per garantir que sumin el nombre d’hores correctes.

### Requeriments Tècnics:
1. **Frontend:**
   - Interfície d'usuari clara i responsiva.

2. **Backend:**
   - PHP i Laravel per a la lògica de l'aplicació.

3. **Base de Dades:**
   - MySQL per emmagatzemar dades de programacions, UF, RA, criteris d'avaluació i continguts.

4. **Seguretat:**
   - Implementació de mesures de seguretat per a protegir les dades d'usuari i el contingut de l'aplicació.

### Diagrama de Classes:
Per entendre millor l'estructura del sistema, es presenta el diagrama de classes:

1. **Classe Usuari:**
   - Atributs: ID, nom, correu electrònic, contrasenya, rol (professor/administrador).
   - Relacions: Pot tenir múltiples Programacions.

2. **Classe Mòdul:**
   - Atributs: ID, nom, descripció, hores_totals.
   - Relacions: Pertany a una Programació, conté múltiples UFs.

3. **Classe UF (Unitat Formativa):**
   - Atributs: ID, nom, descripció, hores_totals.
   - Relacions: Pertany a un Mòdul, conté múltiples RAs.

4. **Classe RA (Resultat d'Aprenentatge):**
   - Atributs: ID, descripció.
   - Relacions: Pertany a una UF, conté múltiples Criteris i Continguts.

5. **Classe Criteri:**
   - Atributs: ID, descripció.
   - Relacions: Pertany a un RA.

6. **Classe Contingut:**
   - Atributs: ID, descripció.
   - Relacions: Pertany a un RA.

7. **Classe Programació:**
   - Atributs: ID, any acadèmic, descripció.
   - Relacions: Pertany a un Usuari, relacionat amb un Mòdul.
   - Té un llistat d’activitats d’ensenyament-aprenentatge.

8. **Classe Activitat:**
   - Atributs: ID, Títol, descripció.
   - Relacions: Pertany a un Programació, relacionat amb un Mòduls.
   - Pertany a una UF.
   - Té un llista de múltiples Criteris i Continguts.

Amb aquesta aplicació, aspirem a proporcionar una eina completa i eficient per a la gestió de programacions didàctiques, millorant així l'experiència dels professors en el seu dia a dia.
