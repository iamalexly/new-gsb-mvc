create table etats
(
  id      int auto_increment
    primary key,
  libelle varchar(8) not null
);

create table fraisForfait
(
  id      int auto_increment
    primary key,
  libelle varchar(255)  not null,
  montant decimal(6, 2) not null,
  nombre  int           not null
);

create table visiteurs
(
  id           int auto_increment
    primary key,
  nom          char(30) null,
  prenom       char(30) null,
  login        char(20) null,
  mdp          char(20) null,
  adresse      char(30) null,
  cp           char(5)  null,
  ville        char(30) null,
  dateEmbauche date     null
);

create table lignesFraisForfait
(
  id             int auto_increment
    primary key,
  idVisiteur     int           not null,
  idFraisForfait int           not null,
  idEtat         int default 2 not null,
  dateAjout      date          not null,
  constraint lignesFraisForfait_ibfk_1
  foreign key (idVisiteur)
    references visiteurs (id),
  constraint lignesFraisForfait_ibfk_2
  foreign key (idFraisForfait)
    references fraisForfait (id),
  constraint lignesFraisForfait_ibfk_3
  foreign key (idEtat)
    references etats (id)
);

create index idEtat
  on lignesFraisForfait (idEtat);

create index idFraisForfait
  on lignesFraisForfait (idFraisForfait);

create index idVisiteur
  on lignesFraisForfait (idVisiteur);

create table lignesFraisHorsForfait
(
  id         int auto_increment
    primary key,
  idVisiteur int           not null,
  libelle    varchar(255)  not null,
  montant    decimal(6, 2) not null,
  dateAjout  date          not null,
  idEtat     int default 2 not null,
  constraint lignesFraisHorsForfait_ibfk_1
  foreign key (idVisiteur)
    references visiteurs (id),
  constraint lignesFraisHorsForfait_ibfk_2
  foreign key (idEtat)
    references etats (id)
);

create index idEtat
  on lignesFraisHorsForfait (idEtat);

create index idVisiteur
  on lignesFraisHorsForfait (idVisiteur);

