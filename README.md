# JPWP
Zanim zaczniesz należy urochomić swój lokalny serwer, za pomocą którego będziesz mógł korzystać z bazy danych.  
Jeżeli korzystasz, z aplikacji XAMPP Server, postępuj zgodnie z krokami:  
1. W zakładce general kliknij przycisk Start. 
2. W zakładce Network zezwól na połączenie localhost:8080 -> 80 (Over SSH)
3. W zakładce Volumes kliknij przycisk Mount
4. W folderze lampp/htdocs utwórz folder JPWP, tutaj będziesz zamieszczać wszystkie pliki .php. 
  
# Zadanie 1.
W tym zadaniu zajmiemy się kodem z pliku registration.php, tak aby rejestracja na emulatorze przebiegła pomyślnie.  
  1.a) Uzupełnij brakujące wyrażenia regularne. Ze zmiennymi email (konieczność znaku "@" i "." w mailu) oraz name (użytkownik może podać więcej niż jedno imię) nie powinieneś mieć problemów, w zmiennej surname chcemy, aby użytkownik podał TYLKO jedno słowo, które może zawierać w sobie "-".  
  PROTIP: Skorzystaj ze strony https://regexr.com/, aby sprawdzić, czy wyrażenia spełniają swoje zadanie.  
  1.b) Napisz odpowiednią instrukcję warunkową, która sprawdza, czy podane hasła są takie same, jeśli nie, poinformuj użytkownika np. funkcją "echo", że podane hasła się różnią.  
  
# Zadanie 2.
Twoim zadaniem, będzie obsługa panelu do logowania.  
  2.a) Stwórz plik login.php i napisz kod, który wykonuje odpowiednie zapytanie do bazy danych. W przypadku niepowodzenia, poinformuj o tym użytkownika, jeżeli logowanie przebiegnie poprawnie użytkownik powinien zobaczyć informację "Hello <imię_użytkownika>!".  
  Podpowiedź: Dla zapytania SELECT funkcja mysqli_fetch_array($result, MYSQLI_ASSOC) zwraca tablicę klucz:STRING, z której w łatwy sposób możesz wyszukać zmiennych (przykład: $row['email']).  
  2.b) Napisz obsługę przycisku buttonLogin, po którego kliknięciu wywołasz napisany przez siebie kod login.php. Skorzystaj z klasy BackgroundTask i sprawdź jakie argumenty przyjmuje metoda doInBackground(). Pamiętaj, że jest to zadanie odtwórcze i możesz zainspirować się obsługą przycisku z klasy MainActivity :).
