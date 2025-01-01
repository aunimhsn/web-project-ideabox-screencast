-- USERS
INSERT INTO users (email, `password`) VALUES ('john.doe@wanadoo.fr', MD5('azerty31*'));

-- IDEAS
INSERT INTO ideas (title, content, users_id) VALUES ('Plantes', 'Ajouter des plantes dans le couloir.', 1);
INSERT INTO ideas (title, content, users_id) VALUES ('Recyclage', 'Mettre une poubelle adaptée à côté de la machine à café.', 1);

-- COMMENTS
-- IDEA: 1
INSERT INTO comments (content, ideas_id, users_id) VALUES ('Ah oui, des plantes !', 1, 1);
INSERT INTO comments (content, ideas_id, users_id) VALUES ('Bonne idée ! Cela ajoutera de la vie dans ces bâtiments.', 1, 1);

-- IDEA: 2
INSERT INTO comments (content, ideas_id, users_id) VALUES ('Pas bête !', 2, 1);