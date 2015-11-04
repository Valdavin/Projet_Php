 
CREATE TABLE RSS (
          id INTEGER primary key autoincrement,
          titre VARCHAR(255),
          url VARCHAR(255),
          date TIMESTAMP
      );
 
CREATE TABLE nouvelle (
          id INTEGER primary key autoincrement,
          date DATETIME,
          titre VARCHAR(255),
          description VARCHAR(1024),
          url VARCHAR(255),
          image VARCHAR(80),
          RSS_id integer
      );
 CREATE TABLE utilisateur (
          login VARCHAR(10)primary key,
          mp	VARCHAR(8)
      );

CREATE TABLE abonnement (
          nom VARCHAR(40),
          categorie VARCHAR(40),
          utilisateur_login VARCHAR(10),
          RSS_id INTEGER,
          primary key (utilisateur_login,RSS_id)
      );
 
