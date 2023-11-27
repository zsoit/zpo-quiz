----
-- phpLiteAdmin database dump (https://www.phpliteadmin.org/)
-- phpLiteAdmin version: 1.9.9-dev
-- Exported: 5:42pm on November 27, 2023 (CET)
-- database file: ./data.db
----
BEGIN TRANSACTION;

----
-- Table structure for questions
----
CREATE TABLE questions (
                           id INTEGER PRIMARY KEY AUTOINCREMENT,
                           question_text VARCHAR(255) NOT NULL,
                           answer_a VARCHAR(255) NOT NULL,
                           answer_b VARCHAR(255) NOT NULL,
                           answer_c VARCHAR(255) NOT NULL,
                           answer_d VARCHAR(255) NOT NULL,
                           correct_answer VARCHAR(1) NOT NULL
);

----
-- Data dump for questions, a total of 50 rows
----
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('1','Jaka jest stolica Polski?','A. Warszawa','B. Kraków','C. Wrocław','D. Gdańsk','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('2','Która planeta jest najbliżej Słońca?','A. Merkury','B. Wenus','C. Mars','D. Ziemia','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('3','Ile wynosi pierwiastek kwadratowy z liczby 16?','A. 2','B. 4','C. 8','D. 16','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('4','Kto napisał "Pan Tadeusz"?','A. Adam Mickiewicz','B. Juliusz Słowacki','C. Henryk Sienkiewicz','D. Stanisław Lem','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('5','Jaka jest stolica Niemiec?','A. Berlin','B. Monachium','C. Hamburg','D. Frankfurt','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('6','Który kraj jest największy pod względem powierzchni?','A. Rosja','B. Kanada','C. Stany Zjednoczone','D. Chiny','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('7','Ile wynosi 2 do potęgi 5?','A. 32','B. 16','C. 8','D. 64','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('8','Kto jest autorem "Romea i Julii"?','A. William Shakespeare','B. Jane Austen','C. Charles Dickens','D. Fyodor Dostoevsky','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('9','Która rzeka jest najdłuższa na świecie?','A. Nil','B. Amazonka','C. Jangcy','D. Mississippi','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('10','Które z poniższych państw nie leży w Europie?','A. Brazylia','B. Francja','C. Indie','D. Polska','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('11','Ile wynosi pierwiastek kwadratowy z liczby 25?','A. 4','B. 5','C. 6','D. 7','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('12','Kto jest autorem "Zbrodni i kary"?','A. Fyodor Dostoevsky','B. Leo Tolstoy','C. Anton Chekhov','D. Vladimir Nabokov','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('13','Jaka jest najwyższa góra na świecie?','A. Mount Everest','B. K2','C. Annapurna','D. Mont Blanc','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('14','Która planeta jest największa w Układzie Słonecznym?','A. Jowisz','B. Saturn','C. Mars','D. Wenus','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('15','Ile kontynentów jest na Ziemi?','A. 5','B. 6','C. 7','D. 8','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('16','Kto jest prezydentem Stanów Zjednoczonych?','A. Joe Biden','B. Donald Trump','C. Barack Obama','D. George W. Bush','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('17','Która z rzek jest najdłuższą rzeką w Polsce?','A. Wisła','B. Odra','C. Warta','D. Bug','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('18','Ile wynosi 12 pomnożone przez 8?','A. 64','B. 96','C. 128','D. 144','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('19','Która z poniższych substancji jest gazem?','A. Rtęć','B. Azot','C. Sód','D. Cyna','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('20','Co oznacza skrót HTML?','A. Hyper Text Markup Language','B. Hyper Transfer Markup Language','C. High Text Markup Language','D. Hyperlink and Text Markup Language','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('21','Jakie jest znaczenie skrótu CSS?','A. Computer Style Sheets','B. Creative Style Sheets','C. Cascading Style Sheets','D. Colorful Style Sheets','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('22','Czym jest JavaScript?','A. Językiem programowania','B. Systemem operacyjnym','C. Przeglądarką internetową','D. Frameworkiem PHP','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('23','Który protokół jest używany do przesyłania stron internetowych?','A. FTP','B. HTTP','C. SMTP','D. TCP/IP','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('24','Jakie polecenie jest używane do zaktualizowania repozytorium git?','A. git checkout','B. git commit','C. git pull','D. git merge','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('25','Czym jest SQL?','A. Językiem programowania','B. Systemem operacyjnym','C. Protokołem sieciowym','D. Językiem zapytań do baz danych','D');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('26','Co oznacza skrót VPN?','A. Virtual Personal Network','B. Very Private Network','C. Virtual Public Network','D. Virtual Protected Network','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('27','Który z poniższych systemów operacyjnych jest oparty na jądrze Linux?','A. Windows','B. macOS','C. Ubuntu','D. Android','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('28','Co oznacza skrót URL?','A. Universal Resource Locator','B. Uniform Resource Locator','C. Unified Resource Locator','D. Unique Resource Locator','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('29','Czym jest algorytm?','A. Rodzajem komputera','B. Zbiorem instrukcji','C. Programem antywirusowym','D. Sposobem rozwiązania problemu','D');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('30','Co oznacza skrót PHP?','A. Personal Hypertext Processor','B. Hypertext Markup Language','C. Preprocessed Hypertext Pages','D. Programming Hyper Processor','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('31','Który język programowania jest często używany do tworzenia stron internetowych?','A. Python','B. Java','C. JavaScript','D. C++','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('32','Czym jest framework Ruby on Rails?','A. Frameworkiem do tworzenia gier','B. Frameworkiem do tworzenia stron internetowych','C. Systemem operacyjnym','D. Frameworkiem PHP','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('33','Jakie są trzy podstawowe rodzaje chmur obliczeniowych?','A. Publiczna, prywatna, hybrydowa','B. Mała, średnia, duża','C. Szybka, średnia, wolna','D. Linux, Windows, macOS','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('34','Co to jest blockchain?','A. Nowoczesną technologią graficzną','B. Protokołem komunikacyjnym','C. Rodzajem bazy danych','D. Technologią zdecentralizowanego rejestru','D');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('35','Które z poniższych jest narzędziem do kontroli wersji?','A. Photoshop','B. Git','C. Visual Studio','D. IntelliJ IDEA','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('36','Co oznacza skrót HTML?','A. Hyper Text Markup Language','B. Hyper Transfer Markup Language','C. High Text Markup Language','D. Hyperlink and Text Markup Language','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('37','Który język programowania jest często używany do tworzenia stron internetowych?','A. Python','B. Java','C. JavaScript','D. C++','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('38','Czym jest Docker?','A. Narzędziem do zarządzania bazami danych','B. Narzędziem do wirtualizacji kontenerów','C. Frameworkiem do tworzenia stron internetowych','D. Koncepcją programowania obiektowego','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('39','Co oznacza skrót VPN?','A. Virtual Personal Network','B. Very Private Network','C. Virtual Public Network','D. Virtual Protected Network','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('40','Który z poniższych nie jest rodzajem ataku komputerowego?','A. Phishing','B. DDoS','C. Smishing','D. Zorking','D');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('41','Czym jest framework Ruby on Rails?','A. Frameworkiem do tworzenia gier','B. Frameworkiem do tworzenia stron internetowych','C. Systemem operacyjnym','D. Frameworkiem PHP','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('42','Co oznacza skrót API?','A. Automated Programming Interface','B. Advanced Programming Interface','C. Application Programming Interface','D. Abstract Programming Interface','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('43','Jakie są trzy podstawowe rodzaje chmur obliczeniowych?','A. Publiczna, prywatna, hybrydowa','B. Mała, średnia, duża','C. Szybka, średnia, wolna','D. Linux, Windows, macOS','A');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('44','Który z poniższych języków jest często używany do analizy danych i uczenia maszynowego?','A. Java','B. C++','C. Python','D. JavaScript','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('45','Czym jest machine learning (uczenie maszynowe)?','A. Rodzajem systemu operacyjnego','B. Działem sztucznej inteligencji','C. Procesem wytrenowania komputera','D. Metodą optymalizacji kodu','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('46','Czym jest blockchain?','A. Nowoczesną technologią graficzną','B. Protokołem komunikacyjnym','C. Rodzajem bazy danych','D. Technologią zdecentralizowanego rejestru','D');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('47','Które z poniższych jest narzędziem do kontroli wersji?','A. Photoshop','B. Git','C. Visual Studio','D. IntelliJ IDEA','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('48','Co oznacza skrót URL?','A. Universal Resource Locator','B. Uniform Resource Locator','C. Unified Resource Locator','D. Unique Resource Locator','B');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('49','Czym jest big data?','A. Małymi danymi','B. Długim czasem przechowywania danych','C. Zbiorem dużych i złożonych danych','D. Nazwą nowego systemu operacyjnego','C');
INSERT INTO "questions" ("id","question_text","answer_a","answer_b","answer_c","answer_d","correct_answer") VALUES ('50','Jakie są trzy podstawowe rodzaje pamięci komputerowej?','A. RAM, ROM, Cache','B. Hard Disk, SSD, Flash Drive','C. Input, Output, Processing','D. Primary, Secondary, Tertiary','A');
COMMIT;