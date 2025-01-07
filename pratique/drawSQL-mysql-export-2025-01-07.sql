CREATE TABLE `Clients`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` BIGINT NOT NULL
);
CREATE TABLE `Commandes`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_client` BIGINT NOT NULL,
    `date` DATETIME NOT NULL
);
CREATE TABLE `Stock`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `quantity` BIGINT NOT NULL
);
CREATE TABLE `Produits`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ref` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `price` DECIMAL(8, 2) NOT NULL
);
CREATE TABLE `commandes_produits`(
    `id_commande` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_produit` BIGINT NOT NULL,
    `quantité` BIGINT NOT NULL
);
ALTER TABLE
    `commandes_produits` ADD CONSTRAINT `commandes_produits_id_commande_foreign` FOREIGN KEY(`id_commande`) REFERENCES `Produits`(`id`);
ALTER TABLE
    `commandes_produits` ADD CONSTRAINT `commandes_produits_id_commande_foreign` FOREIGN KEY(`id_commande`) REFERENCES `Commandes`(`id_client`);
ALTER TABLE
    `Commandes` ADD CONSTRAINT `commandes_id_foreign` FOREIGN KEY(`id`) REFERENCES `Clients`(`id`);
ALTER TABLE
    `Produits` ADD CONSTRAINT `produits_id_foreign` FOREIGN KEY(`id`) REFERENCES `Stock`(`id`);