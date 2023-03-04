# Zadanie

## GIT

1. Instalacja Laravel
2. Podpięcie pod GIT
3. Prześlij link do GitHub, wrzuć go jako publiczne.
4. Commituj wszystkie zmiany, które będziesz tworzyć. Staraj się je odpowiednio rozkładać.
5. Po instalacji utwórz branch develop - tam twórz kod źródłowy z zadań poniżej.

## Laravel

6. tworzenie pierwszego testu, który sprawdzi, czy strona główna się wyświetla w przeglądarce
7. Stwórz model Customer, utwórz do niego relacje dla User 1:wielu - pamiętaj o migracji,
   seederze oraz factory.
8. Stwórz Policy, które zablokuje dostęp innemu użytkownikowi do zasobu Customer. Weryfikuj to
   względem utworzonego klucza obcego „user_id”.
9. Utwórz Controller Customer, który pozwoli na odczytanie, utworzenie, aktualizacje, usunięcie
   zasobów - według odpowiedniego nazewnictwa REST
10. Stwórz testy HTTP (są w docs), które będą sprawdzały, czy dany użytkownik ma dostęp do
    danych Route w api.php (w api ma być cały Route map do zarządzania Customer)
11. Zaimplementuj autoryzacje oraz utwórz za pomocą Laratrust prosty system uprawnień, który
    pozwoli na zarządzanie dostępem dla zasobów w routingu. Role, które musisz utworzyć to
    ‚admin’, ‚user’.
12. Stwórz Seeder, który przy każdym przeładowaniu migracji i seederów, będzie tworzył role,
    uprawnienia. Podczas tworzenia użytkowników, dodaj każdego do odpowiedniej roli.
13. Pamiętaj, że testy HTTP, które wykonałeś, trzeba zaktualizować w oparciu o uprawnienia i
    weryfikować dla każdego typu użytkownika.

## VueJS

14. Stwórz instancję VueJS i zaimplementuj tak, aby wyświetlić główną stronę.
15. Zaimplementuj do działania VueJs - VueRoute - narzędzie, które pozwoli Ci tworzyć podstrony
    w systemie i utwórz kilka dla przykładu.
16. Stwórz na którejś podstronie prosty komponent. Następnie utwórz komponent reprezentujący
    kartę użytkownika. Wartości klienta, mają zostać przekazane po przez props do komponentu
    wewnętrznego.
17. Dane z serwera backendowego pobierz za pomocą Axios. Informacje i przykłady znajdziesz w
    dokumentacji.
14. Stwórz $emit(), który po wyświetleniu użytkownika będzie wysyłał informację do komponentu
    nadrzędnego, że został wyświetlony i pobrany klient. Gdy to się uda, możesz wysłać informacje po
    przez console.log() - WAŻNE, ŻEBY BYŁO TO W KOMPONENCIE NADRZĘDNYM.
