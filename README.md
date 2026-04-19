# 🎓 G-etablissements - Application MVC en PHP

## 📌 Description

Ce projet est une application web développée en **PHP** utilisant l’architecture **MVC (Model - View - Controller)**.  
Elle permet de gérer et afficher une liste d’établissements stockés dans une base de données MySQL.

---

## 🛠️ Technologies utilisées

- PHP (PDO)
- MySQL
- HTML / CSS
- Architecture MVC

---

## 📂 Structure du projet

```bash
G-etablissements/
│
├── controllers/
│   └── EtablissementController.php
│
├── models/
│   ├── Database.php
│   └── Etablissement.php
│
├── views/
│   └── etablissement/
│       └── index.php
│
├── index.php
├── test.php
└── test_model.php

## 🧠 Architecture MVC

- **Model (models/)**
  - Gestion de la base de données
  - Exécution des requêtes SQL

- **View (views/)**
  - Affichage des données (HTML)

- **Controller (controllers/)**
  - Logique métier
  - Communication entre Model et View

---

## 🗄️ Base de données

### 🔹 Création de la base

```sql
CREATE DATABASE ecole;
USE ecole;
### 🔹 Création de la table
```sql
CREATE TABLE etablissement (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);
### 🔹 Insertion des données
```sql
INSERT INTO etablissement (nom) VALUES
('EST'),
('ENSA'),
('ENS'),
('EMI');
## ⚙️ Configuration

Dans le fichier :

models/Database.php

Configurer les paramètres de connexion :

```php
private $host = "localhost";
private $db_name = "ecole";
private $username = "root";
private $password = "";
private $port = "3307";
## 🚀 Lancement du projet

1. Copier le dossier du projet dans :

/var/www/html/   (Linux)

ou

C:\xampp\htdocs\   (Windows)

2. Démarrer les services nécessaires :

- Apache
- MySQL

3. Vérifier la configuration de la base de données dans :

models/Database.php

4. Ouvrir le navigateur et accéder à l’application :

http://localhost/G-etablissements/index.php

ou (si serveur PHP utilisé) :

http://127.0.0.1:8000/index.php

5. Vérifier que la liste des établissements s’affiche correctement
## 📊 Fonctionnalités

- ✔ Connexion à la base de données avec PDO  
- ✔ Récupération des données depuis MySQL  
- ✔ Affichage de la liste des établissements  
- ✔ Organisation du projet selon l’architecture MVC  
- ✔ Séparation entre logique (Controller), données (Model) et affichage (View)  
- ✔ Exécution des requêtes SQL sécurisées  
- ✔ Structure claire et réutilisable pour développer d’autres fonctionnalités