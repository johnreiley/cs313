CREATE TABLE users 
( user_id           INTEGER         PRIMARY KEY
, username          VARCHAR(30)     NOT NULL   
);

CREATE SEQUENCE users_s1 START WITH 1001;


CREATE TABLE speakers 
( speaker_id        INTEGER         PRIMARY KEY
, first_name        VARCHAR(50)     NOT NULL
, middle_name       VARCHAR(50)
, last_name         VARCHAR(50)     NOT NULL
, calling           VARCHAR(256)    NOT NULL
);

CREATE SEQUENCE speakers_s1 START WITH 1001;


CREATE TABLE conferences
( conference_id     INTEGER         PRIMARY KEY 
, speaker_id        INTEGER         REFERENCES speakers(speaker_id)
, conference_date   DATE            NOT NULL
);

CREATE SEQUENCE conferences_s1 START WITH 1001;


CREATE TABLE notes
( note_id           INTEGER         PRIMARY KEY
, user_id           INTEGER         REFERENCES users(user_id)
, talk_id           INTEGER         REFERENCES talks(talk_id)
, note_content      VARCHAR(256)
);

CREATE SEQUENCE notes_s1 START WITH 1001;


CREATE TABLE talks 
( talk_id           INTEGER         PRIMARY KEY
, title             VARCHAR(256)    NOT NULL
, conference_id     INTEGER         REFERENCES conferences(conference_id)
, speaker_id        INTEGER         REFERENCES speakers(speaker_id)
);

CREATE SEQUENCE talks_s1 START WITH 1001;


INSERT INTO conferences
( conference_id
, conference_date
) 
VALUES 
( conferences_n1.NEXTVAL
, make_date(2019, 10, 1)
);

/* INSERT JEFFERY R. HOLLAND */
INSERT INTO speakers( speaker_id, first_name, middle_name, last_name, calling) VALUES( speakers_s1.NEXTVAL, "Jeffery", "R.", "Holland", "Quorum of the Twelve Apostles");
INSERT INTO talks( talk_id, conference_id, speaker_id ) VALUES( talks_s1.NEXTVAL, "TITLE", conferences_s1.CURRVAL, speakers_s1.CURRVAL);


INSERT INTO notes( note_id, user_id, talk_id, note_content) VALUES( notes_n1.NEXT);