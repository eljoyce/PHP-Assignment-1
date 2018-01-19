use eljoyce_db;
drop table if exists membersRegisteredForEvents;
drop table if exists members;
CREATE TABLE members
(
studentID int NOT NULL,
firstName VARCHAR(30),
surname VARCHAR(30),
email VARCHAR(30),
course VARCHAR(30),
yearOfCollege VARCHAR(30),
paid boolean,
committee boolean,
PRIMARY KEY (studentID)
);
drop table if exists events;
CREATE TABLE events
(
eventID int NOT NULL AUTO_INCREMENT,
eventName VARCHAR(30),
description VARCHAR(100),
location VARCHAR(30),
dateOfEvent date,
timeOfEvent time,
capacity int,
PRIMARY KEY (eventID)
);

CREATE TABLE membersRegisteredForEvents
(
signUpID int NOT NULL AUTO_INCREMENT,
eventID int,
studentID int,
FOREIGN KEY (eventID) REFERENCES events(eventID),
FOREIGN KEY (studentID) REFERENCES members(studentID),
PRIMARY KEY (signUPID)
);