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

Select Movie_title, runtime, rating, CONCAT(first_name, ' ', last_name) as director, gender, DATE_FORMAT(birthdate, '%b %e, %Y') as birthdate,
                        CASE
                            WHEN deathdate IS null THEN FLOOR(datediff(current_date, birthdate) / 365.25 )
                            ELSE FLOOR(datediff(deathdate, birthdate) / 365.25 )
                        END AS age,

                        from Director join Movie_has_Director MhD on Director.Director_id = MhD.Director_Director_id join Movie M on M.Movie_id = MhD.Movie_Movie_id
                        WHERE (last_name LIKE '$searchq%' OR first_name LIKE '$searchq%' OR CONCAT(first_name, ' ', last_name) LIKE '$searchq%') AND gender in $genderq AND birthdate $yearIneq $yearq";

SELECT Movie_ID, Movie_title, Runtime, Rating, ReleaseYear from Movie;

SELECT * from Poster;

Select * from Movie;

SELECT max(Movie_ID) as new FROM Movie;