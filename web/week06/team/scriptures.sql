DROP TABLE link;
DROP TABLE topic;
DROP TABLE scriptures;

CREATE TABLE scriptures
(   scripture_id        SERIAL          PRIMARY KEY
,   book                VARCHAR(20)     NOT NULL
,   chapter             INTEGER         NOT NULL
,   verse               INTEGER                 
,   content             TEXT            NOT NULL
);


CREATE TABLE topic (
    topic_id        SERIAL          PRIMARY KEY
,   topic_name      VARCHAR(24)     NOT NULL
);


CREATE TABLE link (
    link_id           SERIAL          PRIMARY KEY
,   topic_id          INTEGER         REFERENCES topic(topic_id)
,   scripture_id      INTEGER         REFERENCES scriptures(scripture_id)
);

INSERT INTO scriptures( book, chapter, verse, content)
VALUES
( 'Doctrine & Covenants', 88, 49,
'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'
);


INSERT INTO scriptures( book, chapter, verse, content)
VALUES 
( 'John', 1, 5,
'And the light shineth in darkness; and the darkness comprehended it not.'    
);


INSERT INTO scriptures( book, chapter, verse, content)
VALUES 
( 'Doctrine & Covenants', 93, 28,
'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'
);


INSERT INTO scriptures( book, chapter, verse, content)
VALUES
( 'Mosiah', 16, 9,
'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
);





INSERT INTO topic (topic_name) VALUES ('Faith');
INSERT INTO topic (topic_name) VALUES ('Sacrifice');
INSERT INTO topic (topic_name) VALUES ('Charity');