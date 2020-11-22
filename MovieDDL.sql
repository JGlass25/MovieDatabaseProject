show databases;

use team2_db;

create table Movie(
    Movie_id INT NOT NULL,
    Movie_title VARCHAR(45) NOT NULL,
    Runtime INT NOT NULL,
    Rating VARCHAR(5) NOT NULL,
    ReleaseYear YEAR(4) NOT NULL,
    Description TEXT(1000),
    PRIMARY KEY (Movie_id)
);

create table Genre(
    Genre_id INT NOT NULL,
    name VARCHAR(45) NOT NULL,
    superGenre VARCHAR(45),
    PRIMARY KEY (Genre_id)
);

create TABLE Movie_has_Genre(
    Movie_Movie_id INT NOT NULL,
    Genre_Genre_id INT NOT NULL,

    PRIMARY KEY (Movie_Movie_id, Genre_Genre_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id),
    FOREIGN KEY (Genre_Genre_id) REFERENCES Genre(Genre_id)
);

create TABLE Director(
    Director_id INT NOT NULL,
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    gender VARCHAR(45) NOT NULL,
    birthdate DATE NOT NULL,
    age INT NOT NULL,
    PRIMARY KEY (Director_id)
);

create TABLE Movie_has_Director(
    Movie_Movie_id INT NOT NULL,
    Director_Director_id INT NOT NULL,

    PRIMARY KEY (Movie_Movie_id, Director_Director_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id),
    FOREIGN KEY (Director_Director_id) REFERENCES Director(Director_id)
);

create TABLE Actor(
    Actor_id INT NOT NULL,
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    gender VARCHAR(45) NOT NULL,
    birthdate DATE NOT NULL,
    age INT NOT NULL,
    PRIMARY KEY (Actor_id)
);

create TABLE Actor_has_Movie(
    Actor_Actor_id INT NOT NULL,
    Movie_Movie_id INT NOT NULL,

    PRIMARY KEY (Actor_Actor_id, Movie_Movie_id),

    FOREIGN KEY (Actor_Actor_id) REFERENCES Actor (Actor_id),
    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie (Movie_id)
);

create TABLE Poster(
    Poster_id INT NOT NULL,
    Image BLOB NOT NULL,
    Movie_Movie_id INT NOT NULL,

    PRIMARY KEY (Poster_id),

    FOREIGN KEY (Movie_Movie_id) REFERENCES Movie(Movie_id)
);