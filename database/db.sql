CREATE TABLE questions (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    question_text VARCHAR(255) NOT NULL,
    answer_a VARCHAR(255) NOT NULL,
    answer_b VARCHAR(255) NOT NULL,
    answer_c VARCHAR(255) NOT NULL,
    answer_d VARCHAR(255) NOT NULL,
    correct_answer VARCHAR(1) NOT NULL
);

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    login VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
);

INSERT INTO questions (question_text, answer_a, answer_b, answer_c, answer_d, correct_answer) VALUES
    ('Jaka jest stolica Polski?', 'A. Warszawa', 'B. Kraków', 'C. Wrocław', 'D. Gdańsk', 'A'),
    ('Która planeta jest najbliżej Słońca?', 'A. Merkury', 'B. Wenus', 'C. Mars', 'D. Ziemia', 'A'),
    ('Ile wynosi pierwiastek kwadratowy z liczby 16?', 'A. 2', 'B. 4', 'C. 8', 'D. 16', 'B'),
    ('Kto napisał "Pan Tadeusz"?', 'A. Adam Mickiewicz', 'B. Juliusz Słowacki', 'C. Henryk Sienkiewicz', 'D. Stanisław Lem', 'A');
INSERT INTO questions (question_text, answer_a, answer_b, answer_c, answer_d, correct_answer) VALUES
('Które z poniższych państw nie leży w Europie?', 'A. Brazylia', 'B. Francja', 'C. Indie', 'D. Polska', 'A'),
('Ile wynosi pierwiastek kwadratowy z liczby 25?', 'A. 4', 'B. 5', 'C. 6', 'D. 7', 'B'),
('Kto jest autorem "Zbrodni i kary"?', 'A. Fyodor Dostoevsky', 'B. Leo Tolstoy', 'C. Anton Chekhov', 'D. Vladimir Nabokov', 'A'),
('Jaka jest najwyższa góra na świecie?', 'A. Mount Everest', 'B. K2', 'C. Annapurna', 'D. Mont Blanc', 'A'),
('Która planeta jest największa w Układzie Słonecznym?', 'A. Jowisz', 'B. Saturn', 'C. Mars', 'D. Wenus', 'A'),
('Ile kontynentów jest na Ziemi?', 'A. 5', 'B. 6', 'C. 7', 'D. 8', 'C'),
('Kto jest prezydentem Stanów Zjednoczonych?', 'A. Joe Biden', 'B. Donald Trump', 'C. Barack Obama', 'D. George W. Bush', 'A'),
('Która z rzek jest najdłuższą rzeką w Polsce?', 'A. Wisła', 'B. Odra', 'C. Warta', 'D. Bug', 'A'),
('Ile wynosi 12 pomnożone przez 8?', 'A. 64', 'B. 96', 'C. 128', 'D. 144', 'B'),
('Która z poniższych substancji jest gazem?', 'A. Rtęć', 'B. Azot', 'C. Sód', 'D. Cyna', 'B');
