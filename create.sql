drop DATABASE homeowner;

CREATE DATABASE Homeowner;

USE Homeowner;
 
CREATE TABLE Authorization
(
	Number int PRIMARY KEY,
    Login VARCHAR(20),
    Password VARCHAR(20),
    Level INT NOT NULL
);

CREATE TABLE Apartments
(
    Number int NOT NULL,
    Rooms int NOT NULL,
    Status VARCHAR(20),
	Owner VARCHAR(20),
	Inhabitant VARCHAR(20),
    FOREIGN KEY (Number)  REFERENCES Authorization (Number)
);