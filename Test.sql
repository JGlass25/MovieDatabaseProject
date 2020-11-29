show databases;
use team2_db;

SELECT Movie_ID, Movie_title FROM Movie;

SELECT Movie_ID, Movie_title FROM Movie WHERE Movie_title LIKE 'A%' AND Rating in ('');

SELECT Movie_ID, Movie_title, Runtime, Rating, ReleaseYear FROM Movie WHERE ReleaseYear = 2000;

Select first_name, last_name, DATE_FORMAT(birthdate, '%b %e, %Y') from Actor;

SELECT * FROM Actor WHERE first_name LIKE '%Jack%' OR last_name LIKE '%Jack%';

SELECT first_name, last_name, gender, birthdate FROM Actor WHERE last_name LIKE 'jack%' AND Gender in ('M','F');

Select first_name, last_name, gender, birthdate,
                        CASE
                            WHEN deathdate IS null THEN FLOOR(datediff(current_date, birthdate) / 365.25 )
                            ELSE FLOOR(datediff(deathdate, birthdate) / 365.25 )
                        END AS age,
                        Movie_title, Runtime, Rating
                        from Actor join Movie_has_Actor MhA on Actor.Actor_id = MhA.Actor_Actor_id join Movie M on M.Movie_id = MhA.Movie_Movie_id
                        WHERE (last_name LIKE 'j%' OR first_name LIKE 'j%' OR CONCAT(first_name, ' ', last_name) LIKE 'j%' ) AND gender in ('M','F');

Select first_name, last_name, gender, birthdate,
                        CASE
                            WHEN deathdate IS null THEN FLOOR(datediff(current_date, birthdate) / 365.25 )
                            ELSE FLOOR(datediff(deathdate, birthdate) / 365.25 )
                        END AS age,
                        Movie_title, Runtime, Rating
                        from Director join Movie_has_Director MhD on Director.Director_id = MhD.Director_Director_id join Movie M on M.Movie_id = MhD.Movie_Movie_id
                        WHERE (last_name LIKE 'j%' OR first_name LIKE 'j%' OR CONCAT(first_name, ' ', last_name) LIKE 'j%' ) AND gender in ('M','F');

SELECT Movie_ID, Movie_title, runtime, rating, releaseYear, name as genre FROM Movie join Movie_has_Genre MhG on Movie.Movie_id = MhG.Movie_Movie_id join Genre G on G.Genre_id = MhG.Genre_Genre_id;


SELECT Movie_ID, Movie_title, Runtime, Rating, ReleaseYear from Movie;

SELECT * from Poster;

Select * from Movie;

Select * from Actor;
Delete from Actor Where Actor_id > 38;

Select count(*) from Genre ORDER BY Genre_id;
Select * from Genre ORDER BY Genre_id;

Delete from Genre Where Genre_id > 10;

Select * from Director;
Delete from Director Where Director_id > 9;

UPDATE Actor set deathdate = null WHERE Actor_id = 1;





DROP PROCEDURE checkIfGenreExists;

DELIMITER $$
USE team2_db $$
CREATE PROCEDURE checkIfGenreExists(IN genreName VARCHAR(45))
BEGIN

    IF exists(select name from Genre where name = genreName) THEN
        Select Genre_id as genreID from Genre where name = genreName;
    ELSE
        Select -1 as genreID;
    end if;

END $$
DELIMITER;

call checkIfGenreExists('Drama');

Select @g;


DROP PROCEDURE checkIfActorExists;
DELIMITER $$
USE team2_db $$
CREATE PROCEDURE checkIfActorExists(IN actor_fName VARCHAR(45), IN actor_lName VARCHAR(45), IN actor_date DATE)
BEGIN

    IF exists(select * from Actor where last_name = actor_lname AND first_name = actor_fname AND birthdate = actor_date) THEN
        Select Actor_id  as actorID from Actor where last_name = actor_lname AND first_name = actor_fname AND birthdate = actor_date;
    ELSE
        Select -1 as actorID;
    end if;

END $$
DELIMITER;

SELECT * from Actor;

call checkIfActorExists('Jamie', 'Foxx', '1967-12-13');
call checkIfActorExists('Jamie', 'Fixx', '1968-12-13');

DROP PROCEDURE checkIfDirectorExists;
DELIMITER $$
USE team2_db $$
CREATE PROCEDURE checkIfDirectorExists(IN director_fName VARCHAR(45), IN director_lName VARCHAR(45), IN director_date DATE)
BEGIN

    IF exists(select * from Director where last_name = director_lname AND first_name = director_fname AND birthdate = director_date) THEN
        Select Director_id as directorID from Director where last_name = director_lname AND first_name = director_fname AND birthdate = director_date;
    ELSE
        Select -1 as directorID;
    end if;

END $$
DELIMITER;

call checkIfDirectorExists('Tom', 'Hooper', '1972-10-05');
call checkIfDirectorExists('John', 'Glasser', '1942-10-24');



DROP PROCEDURE checkIfMovieExists;
DELIMITER $$
USE team2_db $$
CREATE PROCEDURE checkIfMovieExists(IN title VARCHAR(200), IN rt INT, IN releaseYr INT)
BEGIN

    IF exists(Select * from Movie Where Movie_title = title AND runtime = rt AND ReleaseYear = releaseYr) THEN
        Select Movie_id from Movie Where Movie_title = title AND runtime = rt AND ReleaseYear = releaseYr;
    ELSE
        Select -1 as Movie_id;
    end if;

END $$
DELIMITER;

call checkIfMovieExists('Aladdin', 90, 1992);

Select * from Movie Where Movie_title = "Aladdin" AND runtime = 90 AND ReleaseYear = 1992;

Select count(*) from Actor;

Select * from Movie_has_Genre;

INSERT INTO Genre VALUES(24, 'Horror');
INSERT INTO Genre VALUES(25, 'Documentary');
INSERT INTO Genre VALUES(26, 'Religious');
INSERT INTO Genre VALUES(11, 'Educational');

Delete from Genre where Genre_id = 11;
