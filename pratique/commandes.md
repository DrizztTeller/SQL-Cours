CREATE TABLE utilisateurs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255),
    email VARCHAR(255),
    date_inscription DATE
);


INSERT INTO utilisateurs (nom, email, date_inscription) 
VALUES 
('Jean Dupont', 'jean@example.com', '2025-01-06'),
('Marie Durand', 'marie.durand@example.com', '2025-01-06'),
('Paul Martin', 'paul.martin@example.com', '2025-01-06'),
('Lucie Leroy', 'lucie.leroy@example.com', '2025-01-06'),
('Pierre Lefevre', 'pierre.lefevre@example.com', '2025-01-06'),
('Sophie Bernard', 'sophie.bernard@example.com', '2025-01-06'),
('Jacques Moreau', 'jacques.moreau@example.com', '2025-01-06'),
('Emma Thomas', 'emma.thomas@example.com', '2025-01-06'),
('Michel Robin', 'michel.robin@example.com', '2025-01-06'),
('Nathalie Richard', 'nathalie.richard@example.com', '2025-01-06'),
('André Lambert', 'andre.lambert@example.com', '2025-01-06'),
('Claire Lefevre', 'claire.lefevre@example.com', '2025-01-06'),
('Xavier Roux', 'xavier.roux@example.com', '2025-01-06'),
('Isabelle Morin', 'isabelle.morin@example.com', '2025-01-06'),
('François Blanchard', 'francois.blanchard@example.com', '2025-01-06'),
('Catherine Pires', 'catherine.pires@example.com', '2025-01-06'),
('Julien Dupuis', 'julien.dupuis@example.com', '2025-01-06'),
('Véronique Garcia', 'veronique.garcia@example.com', '2025-01-06'),
('David Lefevre', 'david.lefevre@example.com', '2025-01-06'),
('Monique Lefevre', 'monique.lefevre@example.com', '2025-01-06'),
('Robert Leclerc', 'robert.leclerc@example.com', '2025-01-06'),
('Chantal Girard', 'chantal.girard@example.com', '2025-01-06'),
('Alain Fournier', 'alain.fournier@example.com', '2025-01-06'),
('Denise Morel', 'denise.morel@example.com', '2025-01-06'),
('Louis Lambert', 'louis.lambert@example.com', '2025-01-06'),
('Sébastien Vidal', 'sebastien.vidal@example.com', '2025-01-06'),
('Marina Vasseur', 'marina.vasseur@example.com', '2025-01-06'),
('Nicolas Faure', 'nicolas.faure@example.com', '2025-01-06'),
('Florence Marchand', 'florence.marchand@example.com', '2025-01-06'),
('Gérard Hubert', 'gerard.hubert@example.com', '2025-01-06'),
('Martine Lemoine', 'martine.lemoine@example.com', '2025-01-06'),
('Thierry Leclerc', 'thierry.leclerc@example.com', '2025-01-06'),
('Bernadette Lefevre', 'bernadette.lefevre@example.com', '2025-01-06'),
('Dominique Cormier', 'dominique.cormier@example.com', '2025-01-06'),
('René Briand', 'rene.briand@example.com', '2025-01-06'),
('Annie Faye', 'annie.faye@example.com', '2025-01-06'),
('Jacqueline Pires', 'jacqueline.pires@example.com', '2025-01-06'),
('Bernard Lefevre', 'bernard.lefevre@example.com', '2025-01-06'),
('Ludivine Barbe', 'ludivine.barbe@example.com', '2025-01-06'),
('Patricia Duval', 'patricia.duval@example.com', '2025-01-06'),
('Michel Girard', 'michel.girard@example.com', '2025-01-06'),
('Géraldine Fouquet', 'geraldine.fouquet@example.com', '2025-01-06'),
('Aline Vidal', 'aline.vidal@example.com', '2025-01-06'),
('Claude Beaufort', 'claude.beaufort@example.com', '2025-01-06'),
('Lucie Roux', 'lucie.roux@example.com', '2025-01-06'),
('Éric Perrin', 'eric.perrin@example.com', '2025-01-06'),
('Benoît Charles', 'benoit.charles@example.com', '2025-01-06'),
('Catherine Roussel', 'catherine.roussel@example.com', '2025-01-06'),
('Christophe Lefevre', 'christophe.lefevre@example.com', '2025-01-06'),
('Thierry Duval', 'thierry.duval@example.com', '2025-01-06'),
('Françoise Barret', 'francoise.barret@example.com', '2025-01-06'),
('Lucia Lefevre', 'lucia.lefevre@example.com', '2025-01-06'),
('Alice Dupuis', 'alice.dupuis@example.com', '2025-01-06'),
('Michel Pires', 'michel.pires@example.com', '2025-01-06');


CREATE TABLE commandes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ref VARCHAR(255),
    date DATE,
    montant DECIMAL(10,2),
    id_utilisateur INTEGER,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id)
);


INSERT INTO commandes (ref, date, montant, id_utilisateur) 
VALUES 
('CMD001', '2025-01-06', 199.99, 1),
('CMD002', '2025-01-06', 49.99, 2),
('CMD003', '2025-01-06', 150.00, 3),
('CMD004', '2025-01-06', 75.50, 4),
('CMD005', '2025-01-06', 200.00, 5),
('CMD006', '2025-01-06', 130.45, 6),
('CMD007', '2025-01-06', 99.99, 7),
('CMD008', '2025-01-06', 60.00, 8),
('CMD009', '2025-01-06', 80.90, 9),
('CMD010', '2025-01-06', 125.30, 10),
('CMD011', '2025-01-06', 300.00, 11),
('CMD012', '2025-01-06', 150.75, 12),
('CMD013', '2025-01-06', 89.99, 13),
('CMD014', '2025-01-06', 45.00, 14),
('CMD015', '2025-01-06', 180.50, 15),
('CMD016', '2025-01-06', 110.00, 16),
('CMD017', '2025-01-06', 200.25, 17),
('CMD018', '2025-01-06', 75.90, 18),
('CMD019', '2025-01-06', 145.60, 19),
('CMD020', '2025-01-06', 250.00, 20),
('CMD021', '2025-01-06', 60.50, 21),
('CMD022', '2025-01-06', 190.30, 22),
('CMD023', '2025-01-06', 80.00, 23),
('CMD024', '2025-01-06', 120.90, 24),
('CMD025', '2025-01-06', 220.75, 25),
('CMD026', '2025-01-06', 30.99, 26),
('CMD027', '2025-01-06', 140.60, 27),
('CMD028', '2025-01-06', 90.30, 28),
('CMD029', '2025-01-06', 200.00, 29),
('CMD030', '2025-01-06', 110.00, 30),
('CMD031', '2025-01-06', 80.00, 31),
('CMD032', '2025-01-06', 300.00, 32),
('CMD033', '2025-01-06', 175.90, 33),
('CMD034', '2025-01-06', 55.00, 34),
('CMD035', '2025-01-06', 70.00, 35),
('CMD036', '2025-01-06', 160.00, 36),
('CMD037', '2025-01-06', 50.75, 37),
('CMD038', '2025-01-06', 40.50, 38),
('CMD039', '2025-01-06', 150.00, 39),
('CMD040', '2025-01-06', 110.50, 40),
('CMD041', '2025-01-06', 100.99, 41),
('CMD042', '2025-01-06', 225.60, 42),
('CMD043', '2025-01-06', 250.00, 43),
('CMD044', '2025-01-06', 60.00, 44),
('CMD045', '2025-01-06', 120.90, 45),
('CMD046', '2025-01-06', 180.00, 46),
('CMD047', '2025-01-06', 200.00, 47),
('CMD048', '2025-01-06', 95.50, 48),
('CMD049', '2025-01-06', 130.00, 49),
('CMD050', '2025-01-06', 160.00, 50);
                    


CREATE TABLE adresses_livraison (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    adresse VARCHAR(255),
    ville VARCHAR(255),
    code_postal VARCHAR(20),
    pays VARCHAR(255),
    id_utilisateur INTEGER,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id)
);

INSERT INTO adresses_livraison (adresse, ville, code_postal, pays, id_utilisateur)
VALUES
('10 Rue de Paris', 'Paris', '75001', 'France', 1),
('22 Avenue des Champs-Élysées', 'Paris', '75008', 'France', 2),
('5 Boulevard Saint-Germain', 'Paris', '75005', 'France', 3),
('30 Rue de la République', 'Lyon', '69001', 'France', 4),
('12 Rue des Martyrs', 'Paris', '75009', 'France', 5),
('8 Place de la Concorde', 'Paris', '75008', 'France', 6),
('14 Rue de la Gare', 'Marseille', '13001', 'France', 7),
('33 Boulevard de la Liberté', 'Marseille', '13003', 'France', 8),
('16 Rue de Bretagne', 'Lille', '59000', 'France', 9),
('47 Avenue de la Mer', 'Nice', '06000', 'France', 10),
('99 Rue de la Paix', 'Paris', '75002', 'France', 11),
('54 Rue des Ternes', 'Paris', '75017', 'France', 12),
('15 Rue des Lilas', 'Toulouse', '31000', 'France', 13),
('10 Rue du Mont-Cenis', 'Lyon', '69004', 'France', 14),
('23 Rue du Faubourg Saint-Antoine', 'Paris', '75011', 'France', 15),
('21 Rue de la Plaine', 'Marseille', '13010', 'France', 16),
('18 Rue du Chardonnet', 'Paris', '75005', 'France', 17),
('5 Rue de la Victoire', 'Paris', '75009', 'France', 18),
('12 Boulevard de Strasbourg', 'Paris', '75010', 'France', 19),
('3 Rue de la Forêt', 'Bordeaux', '33000', 'France', 20),
('77 Avenue de Paris', 'Nantes', '44000', 'France', 21),
('10 Rue de l’Indépendance', 'Lyon', '69002', 'France', 22),
('2 Rue des Acacias', 'Marseille', '13006', 'France', 23),
('58 Boulevard Saint-Michel', 'Paris', '75005', 'France', 24),
('29 Rue de la Fontaine', 'Lille', '59000', 'France', 25),
('20 Rue des Écoles', 'Lyon', '69007', 'France', 26),
('77 Rue des Rosiers', 'Paris', '75003', 'France', 27),
('4 Rue de la Charité', 'Strasbourg', '67000', 'France', 28),
('3 Rue des Aubépines', 'Marseille', '13015', 'France', 29),
('14 Boulevard Victor Hugo', 'Paris', '75016', 'France', 30),
('25 Rue de l’Ouest', 'Paris', '75014', 'France', 31),
('8 Rue de la Lune', 'Lyon', '69001', 'France', 32),
('40 Rue des Érables', 'Toulouse', '31000', 'France', 33),
('62 Rue de la Gare', 'Nice', '06000', 'France', 34),
('36 Boulevard des Filles du Calvaire', 'Paris', '75003', 'France', 35),
('19 Rue de Saintonge', 'Paris', '75003', 'France', 36),
('21 Avenue de la République', 'Marseille', '13002', 'France', 37),
('32 Rue de la Seine', 'Paris', '75006', 'France', 38),
('4 Rue de la Butte', 'Paris', '75018', 'France', 39),
('51 Rue de la Boétie', 'Paris', '75008', 'France', 40),
('28 Rue du Faubourg du Temple', 'Paris', '75010', 'France', 41),
('11 Avenue des Lilas', 'Lyon', '69003', 'France', 42),
('53 Boulevard de Magenta', 'Paris', '75010', 'France', 43),
('26 Rue du Faubourg Saint-Denis', 'Paris', '75010', 'France', 44),
('17 Rue du Val de Grâce', 'Paris', '75005', 'France', 45),
('39 Rue de Charonne', 'Paris', '75011', 'France', 46),
('56 Rue des Saints-Pères', 'Paris', '75007', 'France', 47),
('18 Rue des Boulets', 'Paris', '75011', 'France', 48),
('5 Boulevard de l’Indépendance', 'Marseille', '13003', 'France', 49),
('10 Rue de la Chapelle', 'Paris', '75018', 'France', 50);
                    



SELECT
  commandes.ref,
  utilisateurs.nom
FROM
  commandes
  INNER JOIN utilisateurs ON commandes.id_utilisateur = utilisateurs.id;

SELECT
  c.ref,
  u.nom,
  a.adresse,
  a.ville,
  a.code_postal
FROM
  utilisateurs u
  INNER JOIN commandes c ON u.id = c.id_utilisateur
  INNER JOIN adresses_livraison a ON u.id = a.id_utilisateur
ORDER BY
  a.ville ASC;


  
DELETE FROM commandes WHERE id >= 46 AND id <=50;

DELETE FROM commandes WHERE id BETWEEN 46 AND 50;

DELETE FROM commandes WHERE id IN (46, 47, 48, 49, 50);


SELECT commandes.ref, utilisateurs.nom FROM utilisateurs RIGHT JOIN commandes ON commandes.id_utilisateur = utilisateurs.id;
