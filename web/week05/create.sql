/* HOW TO MAKE A MANY-TO-MANY RELATIONSHIP */

DROP TABLE event_participant;
DROP TABLE participant;
DROP TABLE event;

CREATE TABLE event
( id        SERIAL          NOT NULL PRIMARY KEY
, location  VARCHAR(255)    NOT NULL
, name      VARCHAR(200)    
, date      DATE
);

CREATE TABLE participant
( id        SERIAL       NOT NULL PRIMARY KEY
, name      VARCHAR(100) NOT NULL
);

CREATE TABLE event_participant
( id        SERIAL   NOT NULL PRIMARY KEY
, event_id  INT      NOT NULL REFERENCES event(id)
, participant_id INT NOT NULL REFERENCES participant(id)
);