# JPWP
Zanim zaczniesz należy urochomić swój lokalny serwer, za pomocą którego będziesz mógł korzystać z bazy danych.  
Jeżeli korzystasz, z aplikacji XAMPP Server, postępuj zgodnie z krokami:  
1. W zakładce general kliknij przycisk Start. 
2. W zakładce Network zezwól na połączenie localhost:8080 -> 80 (Over SSH)
3. W zakładce Volumes kliknij przycisk Mount
4. W folderze lampp/htdocs utwórz folder JPWP, tutaj będziesz zamieszczać wszystkie pliki .php. 
Zadanie 1. W tym zadaniu zajmiemy się plikiem registration.php, tak aby rejestracja na emulatorze przebiegła pomyślnie.  
  1.a) Uzupełnij brakujące wyrażenia regularne. Ze zmiennymi email oraz name (użytkownik może podać więcej niż jedno) nie powinieneś mieć problemów, dla zmiennej surname chcemy pozwolić podać użytkownikowi TYLKO jedno słowo, które może zaiwerać w sobie "-".  
  PROTIP: Skorzystaj ze strony https://regexr.com/, aby sprawdzić, czy wyrażenia spełniają swoje zadanie.  
  1.b) Napisz odpowiedni warunek, który sprawdza, czy podane hasła są takie same, jeśli nie poinformuj użytkownika funkcją "echo", że podane hasła nie są takie same.  
Zadanie 2.
