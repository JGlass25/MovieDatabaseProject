show databases;
use team2_db;

INSERT INTO Movie VALUES(00001, 'Django Unchained', 165, 'R', 2012, 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.');

INSERT INTO Actor VALUES(000001, 'Jamie', 'Foxx', 'M', '1967-12-13',null);
INSERT INTO Actor VALUES(000002, 'Christoph', 'Waltz', 'M', '1956-10-04',null);
INSERT INTO Actor VALUES(000003, 'Leonardo', 'DiCaprio', 'M', '1974-11-11',null);
INSERT INTO Actor VALUES(000004, 'Kerry', 'Washington', 'F', '1977-01-31',null);
INSERT INTO Actor VALUES(000005, 'Samuel', 'Jackson', 'M', '1948-12-21',null);

INSERT INTO Movie_has_Actor VALUES(00001, 000001);
INSERT INTO Movie_has_Actor VALUES(00001, 000002);
INSERT INTO Movie_has_Actor VALUES(00001, 000003);
INSERT INTO Movie_has_Actor VALUES(00001, 000004);
INSERT INTO Movie_has_Actor VALUES(00001, 000005);

INSERT INTO Director VALUES(00001, 'Quentin', 'Tarantino', 'M', '1963-03-27',null);

INSERT INTO Movie_has_Director VALUES(00001, 00001);

INSERT INTO Genre VALUES(001, 'Western');
INSERT INTO Genre VALUES(002, 'Drama');
INSERT INTO Genre VALUES(003, 'Action');

INSERT INTO Movie_has_Genre VALUES(00001, 001);
INSERT INTO Movie_has_Genre VALUES(00001, 002);
INSERT INTO Movie_has_Genre VALUES(00001, 003);


#----------------------------------------------------------------------------------
INSERT INTO Movie VALUES(00002, 'Pulp Fiction', 154, 'R', 1994, 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.');

INSERT INTO Actor VALUES(000006, 'John', 'Travolta', 'M', '1954-02-18',null);
INSERT INTO Actor VALUES(000007, 'Bruce', 'Willis', 'M', '1955-03-19',null);
INSERT INTO Actor VALUES(000008, 'Ving', 'Rhames', 'M', '1959-05-12',null);
INSERT INTO Actor VALUES(000009, 'Tim', 'Roth', 'M', '1961-05-14',null);
INSERT INTO Actor VALUES(000010, 'Amanda', 'Plummer', 'M', '1957-03-23',null);
INSERT INTO Actor VALUES(000011, 'Uma', 'Thurman', 'M', '1970-04-29',null);

INSERT INTO Movie_has_Actor VALUES(00002, 000005);
INSERT INTO Movie_has_Actor VALUES(00002, 000006);
INSERT INTO Movie_has_Actor VALUES(00002, 000007);
INSERT INTO Movie_has_Actor VALUES(00002, 000008);
INSERT INTO Movie_has_Actor VALUES(00002, 000009);
INSERT INTO Movie_has_Actor VALUES(00002, 000010);
INSERT INTO Movie_has_Actor VALUES(00002, 000011);

INSERT INTO Movie_has_Director VALUES(00002, 00001);


INSERT INTO Genre VALUES(004, 'Crime');

INSERT INTO Movie_has_Genre VALUES(00002, 002);
INSERT INTO Movie_has_Genre VALUES(00002, 004);

#----------------------------------------------------------------------------------
INSERT INTO Movie VALUES(00003, 'Les Miserables', 158, 'PG-13', 2012, 'In 19th-century France, Jean Valjean, who for decades has been hunted by the ruthless policeman Javert after breaking parole, agrees to care for a factory worker''s daughter. The decision changes their lives forever.');

UPDATE Actor set first_name = 'Sacha', last_name = 'Baron Cohen' WHERE Actor_id = 000016;
UPDATE Actor set first_name = 'Helena', last_name = 'Bonham Carter' WHERE Actor_id = 000017;


INSERT INTO Actor VALUES(000012, 'Hugh', 'Jackman', 'M', '1960-10-12',null);
INSERT INTO Actor VALUES(000013, 'Russell', 'Crowe', 'M', '1964-04-07',null);
INSERT INTO Actor VALUES(000014, 'Anne', 'Hathaway', 'F', '1982-11-12',null);
INSERT INTO Actor VALUES(000015, 'Amanda', 'Seyfried', 'F', '1985-12-03',null);
INSERT INTO Actor VALUES(000016, 'Sacha', 'Baron Cohen', 'M', '1971-10-13',null);
INSERT INTO Actor VALUES(000017, 'Helena', 'Bonham Carter', 'F', '1966-05-26',null);
INSERT INTO Actor VALUES(000018, 'Eddie', 'Redmayne', 'M', '1982-01-06',null);

INSERT INTO Movie_has_Actor VALUES(00003, 000012);
INSERT INTO Movie_has_Actor VALUES(00003, 000013);
INSERT INTO Movie_has_Actor VALUES(00003, 000014);
INSERT INTO Movie_has_Actor VALUES(00003, 000015);
INSERT INTO Movie_has_Actor VALUES(00003, 000016);
INSERT INTO Movie_has_Actor VALUES(00003, 000017);
INSERT INTO Movie_has_Actor VALUES(00003, 000018);

INSERT INTO Director VALUES(00002, 'Tom', 'Hooper', 'M', '1972-10-05',null);

INSERT INTO Movie_has_Director VALUES(00003, 00002);

INSERT INTO Genre VALUES(005, 'Historical');
INSERT INTO Genre VALUES(006, 'Musical');

INSERT INTO Movie_has_Genre VALUES(00003, 002);
INSERT INTO Movie_has_Genre VALUES(00003, 005);
INSERT INTO Movie_has_Genre VALUES(00003, 006);

#----------------------------------------------------------------------------------
INSERT INTO Movie VALUES(00004, 'Gladiator', 155, 'R', 2000, 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.');

INSERT INTO Actor VALUES(000019, 'Joaquin', 'Phoenix', 'M', '1974-10-28',null);
INSERT INTO Actor VALUES(000020, 'Connie', 'Nielsen', 'F', '1965-06-03',null);
INSERT INTO Actor VALUES(000021, 'Oliver', 'Reed', 'M', '1938-02-13', '1999-05-02');
INSERT INTO Actor VALUES(000022, 'Djimon', 'Hounsou', 'M', '1964-04-24',null);

INSERT INTO Movie_has_Actor VALUES(00004, 000013);
INSERT INTO Movie_has_Actor VALUES(00004, 000019);
INSERT INTO Movie_has_Actor VALUES(00004, 000020);
INSERT INTO Movie_has_Actor VALUES(00004, 000021);
INSERT INTO Movie_has_Actor VALUES(00004, 000022);

INSERT INTO Director VALUES(00003, 'Ridley', 'Scott', 'M', '1937-11-30',null);

INSERT INTO Movie_has_Director VALUES(00004, 00003);

INSERT INTO Genre VALUES(007, 'Adventure');

INSERT INTO Movie_has_Genre VALUES(00004, 002);
INSERT INTO Movie_has_Genre VALUES(00004, 003);
INSERT INTO Movie_has_Genre VALUES(00004, 007);

#----------------------------------------------------------------------------------
INSERT INTO Movie VALUES(00005, 'The A-Team', 117, 'PG-13', 2010, 'A group of Iraq War veterans look to clear their name with the U.S. Military, who suspect the four men of committing a crime for which they were framed.');

INSERT INTO Actor VALUES(000023, 'Liam', 'Neeson', 'M', '1952-06-07',null);
INSERT INTO Actor VALUES(000024, 'Bradley', 'Cooper', 'M', '1975-01-05',null);
INSERT INTO Actor VALUES(000025, 'Jessica', 'Biel', 'F', '1982-03-03',null);
INSERT INTO Actor VALUES(000026, 'Quinton', 'Jackson', 'M', '1978-06-20',null);
INSERT INTO Actor VALUES(000027, 'Sharlto', 'Copley', 'M', '1973-11-27',null);
INSERT INTO Actor VALUES(000028, 'Patrick', 'Wilson', 'M', '1973-07-03',null);

INSERT INTO Movie_has_Actor VALUES(00005, 000023);
INSERT INTO Movie_has_Actor VALUES(00005, 000024);
INSERT INTO Movie_has_Actor VALUES(00005, 000025);
INSERT INTO Movie_has_Actor VALUES(00005, 000026);
INSERT INTO Movie_has_Actor VALUES(00005, 000027);
INSERT INTO Movie_has_Actor VALUES(00005, 000028);

INSERT INTO Director VALUES(00004, 'Joe', 'Carnahan', 'M', '1969-05-09',null);

INSERT INTO Movie_has_Director VALUES(00005, 00004);

INSERT INTO Genre VALUES(008, 'Thriller');

INSERT INTO Movie_has_Genre VALUES(00005, 003);
INSERT INTO Movie_has_Genre VALUES(00005, 007);
INSERT INTO Movie_has_Genre VALUES(00005, 008);

#----------------------------------------------------------------------------------
INSERT INTO Movie VALUES(00006, 'Airplane!', 88, 'PG', 1980, 'A man afraid to fly must ensure that a plane lands safely after the pilots become sick.');

INSERT INTO Actor VALUES(000029, 'Kareem', 'Abdul-Jabbar', 'M', '1947-04-16',null);
INSERT INTO Actor VALUES(000030, 'Lloyd', 'Bridges', 'M', '1913-01-15','1998-03-10');
INSERT INTO Actor VALUES(000031, 'Peter', 'Graves', 'M', '1926-03-18', '2010-03-14');
INSERT INTO Actor VALUES(000032, 'Julie', 'Hagerty', 'F', '1955-06-15',null);
INSERT INTO Actor VALUES(000033, 'Robert', 'Hays', 'M', '1947-07-24',null);
INSERT INTO Actor VALUES(000034, 'Leslie', 'Nielsen', 'M', '1926-02-11', '2010-11-28');

INSERT INTO Movie_has_Actor VALUES(00006, 000029);
INSERT INTO Movie_has_Actor VALUES(00006, 000030);
INSERT INTO Movie_has_Actor VALUES(00006, 000031);
INSERT INTO Movie_has_Actor VALUES(00006, 000032);
INSERT INTO Movie_has_Actor VALUES(00006, 000033);
INSERT INTO Movie_has_Actor VALUES(00006, 000034);

INSERT INTO Director VALUES(00005, 'Jim', 'Abrahams', 'M', '1944-05-10',null);
INSERT INTO Director VALUES(00006, 'David', 'Zucker', 'M', '1947-10-16',null);
INSERT INTO Director VALUES(00007, 'Jerry', 'Zucker', 'M', '1950-03-11',null);

INSERT INTO Movie_has_Director VALUES(00006, 00005);
INSERT INTO Movie_has_Director VALUES(00006, 00006);
INSERT INTO Movie_has_Director VALUES(00006, 00007);


INSERT INTO Genre VALUES(009, 'Comedy');

INSERT INTO Movie_has_Genre VALUES(00006, 008);
INSERT INTO Movie_has_Genre VALUES(00006, 009);


#----------------------------------------------------------------------------------
INSERT INTO Movie VALUES(00007, 'Aladdin', 90, 'G', 1992, 'A kindhearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.');

INSERT INTO Actor VALUES(000035, 'Scott', 'Weinger', 'M', '1975-10-05',null);
INSERT INTO Actor VALUES(000036, 'Robin', 'Williams', 'M', '1951-07-21', '2014-08-11');
INSERT INTO Actor VALUES(000037, 'Linda', 'Larkin', 'F', '1970-03-20',null);
INSERT INTO Actor VALUES(000038, 'Jonathan', 'Freeman', 'M', '1950-02-05',null);

INSERT INTO Movie_has_Actor VALUES(00007, 000035);
INSERT INTO Movie_has_Actor VALUES(00007, 000036);
INSERT INTO Movie_has_Actor VALUES(00007, 000037);
INSERT INTO Movie_has_Actor VALUES(00007, 000038);

INSERT INTO Director VALUES(00008, 'Ron', 'Clements', 'M', '1953-04-25',null);
INSERT INTO Director VALUES(00009, 'John', 'Musker', 'M', '1953-11-08',null);

INSERT INTO Movie_has_Director VALUES(00007, 00008);
INSERT INTO Movie_has_Director VALUES(00007, 00009);

INSERT INTO Genre VALUES(010, 'Animation');

INSERT INTO Movie_has_Genre VALUES(00007, 006);
INSERT INTO Movie_has_Genre VALUES(00007, 007);
INSERT INTO Movie_has_Genre VALUES(00007, 009);
INSERT INTO Movie_has_Genre VALUES(00007, 010);