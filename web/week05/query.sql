SELECT e.name AS event_name
,      p.name AS participant_name
FROM event_participant ep INNER JOIN event e
ON ep.event_id = e.id INNER JOIN participant p
ON ep.participant_id = p.id
ORDER BY e.name;