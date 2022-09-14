INSERT homeowner.authorization(Login, Password, Level) 
VALUES ('Педь', 'sasha4907', 2),
     ('Плостак', '3442plI', 2),
     ('Ковальова', '1345qwe', 2),
     ('Мужанівська', '0987lkjh', 2),
     ('Лут', '1q2w3e4r', 2),
     ('Власник', 'myHome', 1);

INSERT homeowner.apartments(Number,Rooms,Status,Owner,Inhabitant) 
VALUES (10, 1, 'Власна', 'Педь', 'Педь'),
	   (11, 2, 'Власна', 'Плостак', 'Плостак'),
	   (12, 3, 'Орендована', 'Ковальова', 'Попенко'),
	   (13, 3, 'Власна', 'Мужанівська', 'Мужанівська'),
	   (14, 2, 'Орендована', 'Лут', 'Філатова');

INSERT homeowner.apartments(Number,Rooms) 
VALUES (15, 1),
	   (16, 1),
	   (17, 3),
	   (18, 3),
	   (19, 4),
       (19, 2);


