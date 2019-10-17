INSERT INTO participant
    (name)
VALUES
    ('Ben Fank');
INSERT INTO participant
    (name)
VALUES
    ('Johnny Gringo');
INSERT INTO participant
    (name)
VALUES
    ('Sick Puppies');
INSERT INTO participant
    (name)
VALUES
    ('Shalom');
INSERT INTO participant
    (name)
VALUES
    ('Frank Sonatra');
INSERT INTO participant
    (name)
VALUES
    ('Mary Poppins');


INSERT INTO event
    ( location, name, date)
VALUES
    ('Florida', 'The Bunny Hop', transaction_timestamp());

INSERT INTO event
    ( location, name, date)
VALUES
    ('Indiana', 'Taco Trudge', transaction_timestamp());

INSERT INTO event
    ( location, name, date)
VALUES
    ('Utah', 'Frog Jump', transaction_timestamp());

INSERT INTO event
    ( location, name, date)
VALUES
    ('Calaveras', 'Triathalon', transaction_timestamp());



INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 1, 1 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 1, 6 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 1, 5 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 1, 2 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 2, 2 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 2, 3 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 3, 2 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 4, 1 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 4, 3 );

INSERT INTO event_participant
    (event_id, participant_id)
VALUES( 4, 4 );