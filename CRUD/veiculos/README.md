SQL commands to create the database

create DATABASE veiculos

create table pessoa(id int PRIMARY KEY AUTO_INCREMENT, nome varchar(80), placa varchar(10), telefone varchar(20))

INSERT INTO pessoa VALUES("1", "Jose Santos", "LOL-2394", "(21) 3402-7822"),
("2", "Kamikaze", "FBI-2394", "(21) 3403-7822"),
("3", "Putin", "KGB-2394", "(21) 3410-7822"),
("4", "Silvio Santos", "KFC-2394", "(21) 4202-7822");
