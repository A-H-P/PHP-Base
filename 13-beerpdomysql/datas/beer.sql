-- Ce fichier ajoute les bières dans la BDD
-- Nom, degrés, volume, image, prix, ebc_id, brand_id

INSERT INTO beer (`name`, degree, volume, image, price, ebc_id, brand_id) VALUES
('Chimay Bleue', 9, 330, 'img/chimay-chimay-bleue.jpg', 1.79, 3, 1),
('Chimay Blanche', 8, 330, 'img/chimay-chimay-blanche.jpg', 1.65, 1, 1),
('Duvel', 8.5, 330, 'img/duvel-duvel.jpg', 1.99, 1, 2),
('Duvel Triple Hop', 9.5, 330, 'img/duvel-duvel-triple-hop.jpg', 1.95, 1, 2),
('Ch''ti Blonde', 6.4, 250, 'img/chti-chti-blonde.jpg', 1.84, 1, 5),
('Ch''ti Ambrée', 5.9, 330, 'img/chti-chti-ambree.jpg', 1.46, 3, 5);