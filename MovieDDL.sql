show databases;

use team2_db;

create table Movie(
    Movie_id INT NOT NULL,
    Movie_title VARCHAR(200) NOT NULL,
    Runtime INT NOT NULL,
    Rating VARCHAR(5) NOT NULL,
    ReleaseYear YEAR(4) NOT NULL,
    Description TEXT(1000),
    PRIMARY KEY (Movie_id)

);

create table Genre(
    Genre_id INT NOT NULL,
    name VARCHAR(45) NOT NULL,
    PRIMARY KEY (Genre_id)
);

create TABLE Movie_has_Genre(
    Movie_Movie_id INT NOT NULL,
    Genre_Genre_id INT NOT NULL,

    PRIMARY KEY (Movie_Movie_id, Genre_Genre_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (Genre_Genre_id) REFERENCES Genre(Genre_id)
);

create TABLE Director(
    Director_id INT NOT NULL,
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    gender VARCHAR(1) NOT NULL,
    birthdate DATE NOT NULL,
    PRIMARY KEY (Director_id)
);
ALTER TABLE Director ADD deathdate DATE NULL;
ALTER TABLE Director ADD CHECK (deathdate > birthdate);

create TABLE Movie_has_Director(
    Movie_Movie_id INT NOT NULL,
    Director_Director_id INT NOT NULL,

    PRIMARY KEY (Movie_Movie_id, Director_Director_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id)
    ON DELETE CASCADE,
    FOREIGN KEY (Director_Director_id) REFERENCES Director(Director_id)
);

create TABLE Actor(
    Actor_id INT NOT NULL,
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    gender VARCHAR(1) NOT NULL,
    birthdate DATE NOT NULL,
    PRIMARY KEY (Actor_id)

);
ALTER TABLE Actor ADD deathdate DATE NULL;
ALTER TABLE Actor ADD CHECK (deathdate > birthdate);

create TABLE Movie_has_Actor(
    Movie_Movie_id INT NOT NULL,
    Actor_Actor_id INT NOT NULL,

    PRIMARY KEY (Movie_Movie_id, Actor_Actor_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (Actor_Actor_id) REFERENCES Actor(Actor_id)
);

create TABLE Poster(
    Poster_id INT NOT NULL,
    Image BLOB NOT NULL,
    Movie_Movie_id INT NOT NULL,

    PRIMARY KEY (Poster_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id)
    ON DELETE CASCADE
);

CREATE INDEX movie_title
ON Movie(Movie_title);

CREATE INDEX actor_name
ON Actor(last_name);

CREATE INDEX director_name
ON Director(last_name);

CREATE INDEX genre_name
ON Genre(name);

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

DELIMITER $$
USE team2_db $$
CREATE PROCEDURE checkIfMovieExists(IN title VARCHAR(200), IN rt INT, IN releaseYr INT)
BEGIN

    IF exists(Select * from Movie Where Movie_title = title AND runtime = rt AND ReleaseYear = releaseYr) THEN
        Select Movie_id as movieID from Movie Where Movie_title = title AND runtime = rt AND ReleaseYear = releaseYr;
    ELSE
        Select -1 as movieID;
    end if;

END $$
DELIMITER;

CREATE VIEW movieActors as Select Actor_id, first_name, last_name, gender, birthdate,
                        CASE
                            WHEN deathdate IS null THEN FLOOR(datediff(current_date, birthdate) / 365.25 )
                            ELSE FLOOR(datediff(deathdate, birthdate) / 365.25 )
                        END AS age,
                        deathdate,
                        Movie_id, Movie_title, Runtime, Rating, ReleaseYear, Description
                        from Actor join Movie_has_Actor MhA on Actor.Actor_id = MhA.Actor_Actor_id join Movie M on M.Movie_id = MhA.Movie_Movie_id;

CREATE VIEW movieDirectors as Select Director_id, first_name, last_name, gender, birthdate,
                        CASE
                            WHEN deathdate IS null THEN FLOOR(datediff(current_date, birthdate) / 365.25 )
                            ELSE FLOOR(datediff(deathdate, birthdate) / 365.25 )
                        END AS age,
                        deathdate,
                        Movie_id, Movie_title, Runtime, Rating, ReleaseYear, Description
                        from Director join Movie_has_Director MhD on Director.Director_id = MhD.Director_Director_id join Movie M on M.Movie_id = MhD.Movie_Movie_id;

Create VIEW movieGenres as Select Genre_id, name, Movie_id, Movie_title, Runtime, Rating, ReleaseYear, Description
from Genre join Movie_has_Genre MhG on Genre.Genre_id = MhG.Genre_Genre_id join Movie M on M.Movie_id = MhG.Movie_Movie_id;