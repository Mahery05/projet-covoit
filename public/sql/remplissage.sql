<<<<<<< HEAD:public/sql/remplissage.sql
INSERT INTO MEMBRE VALUES ('leveque.pierre@gmail.com', 'LEVEQUE','PIERRE','MONTPELLIER',40,'0612345611',1); 
INSERT INTO MEMBRE VALUES ('dupont.mariee@gmail.com','DUPONT','MARIE','MONTPELLIER',20,'0612345612',3); 
INSERT INTO MEMBRE VALUES ('renard.albert@gmail.com','RENARD','ALBERT','MONTPELLIER',18,'0612345613',7); 
INSERT INTO MEMBRE VALUES ('martin.loic@gmail.com','MARTIN','LOIC','BEZIERS',35,'0612345614',10); 

/*
prompt ------------------------------------------;
prompt -----    insertion VOITURE    ------------;
prompt ------------------------------------------;
*/

INSERT INTO VOITURE VALUES (1,'RENAULT','MEGANNE','NORMAL','ROUGE'); 
INSERT INTO VOITURE VALUES (2,'PEUGEOT','TRUC','PETITE','VERT'); 
INSERT INTO VOITURE VALUES (3,'TOYOTA','MUCHE','GRANDE','BLEU'); 
INSERT INTO VOITURE VALUES (4,'FORD', 'FIESTA','NORAMAL','ROSE'); 

/*
prompt ------------------------------------------;
prompt -----    insertion VOITURE    ------------;
prompt ------------------------------------------;
*/

INSERT INTO VOITURE_MEMBRE VALUES (1,'leveque.pierre@gmail.com',1); 
INSERT INTO VOITURE_MEMBRE VALUES (2,'dupont.mariee@gmail.com',4); 
INSERT INTO VOITURE_MEMBRE VALUES (3,'renard.albert@gmail.com',2); 
INSERT INTO VOITURE_MEMBRE VALUES (4,'martin.loic@gmail.com',3); 
/*
prompt ------------------------------------------;
prompt -----       insertion TRAJET    ----------;
prompt ------------------------------------------;
*/

INSERT INTO TRAJET VALUES (1010, 'leveque.pierre@gmail.com','MONTPELLIER','10-03-2017','ADR_RDV','NIMES','ADR_AR','TYPEVOIT',4,10); 
INSERT INTO TRAJET VALUES (1011, 'dupont.mariee@gmail.com','BEZIERS','10-04-2017','ADR_RDV','ALES','ADR_AR','TYPEVOIT',2,30); 
INSERT INTO TRAJET VALUES (1012, 'renard.albert@gmail.com','PERPIGNAN','10-05-2017','ADR_RDV','MONTPELLIER','ADR_AR','TYPEVOIT',1,13); 
INSERT INTO TRAJET VALUES (2909, 'martin.loic@gmail.com','ALES','10-06-2017','ADR_RDV','SAINT-AMBROIX','ADR_AR','TYPEVOIT',3,20); 

/*
prompt ------------------------------------------;
prompt -----insertion DEMANDE_TRAJET ------------;
prompt ------------------------------------------;
*/

INSERT INTO DEMANDE_TRAJET VALUES (911023,'leveque.pierre@gmail.com',1010); 
INSERT INTO DEMANDE_TRAJET VALUES (911023,'dupont.mariee@gmail.com',1011); 
INSERT INTO DEMANDE_TRAJET VALUES (911023,'renard.albert@gmail.com',1012); 
=======
INSERT INTO MEMBRE VALUES ('leveque.pierre@gmail.com', 'LEVEQUE','PIERRE','MONTPELLIER',40,'0612345611',1); 
INSERT INTO MEMBRE VALUES ('dupont.mariee@gmail.com','DUPONT','MARIE','MONTPELLIER',20,'0612345612',3); 
INSERT INTO MEMBRE VALUES ('renard.albert@gmail.com','RENARD','ALBERT','MONTPELLIER',18,'0612345613',7); 
INSERT INTO MEMBRE VALUES ('martin.loic@gmail.com','MARTIN','LOIC','BEZIERS',35,'0612345614',10); 

/*
prompt ------------------------------------------;
prompt -----    insertion VOITURE    ------------;
prompt ------------------------------------------;
*/

INSERT INTO VOITURE VALUES (1,'RENAULT','MEGANNE','NORMAL','ROUGE'); 
INSERT INTO VOITURE VALUES (2,'PEUGEOT','TRUC','PETITE','VERT'); 
INSERT INTO VOITURE VALUES (3,'TOYOTA','MUCHE','GRANDE','BLEU'); 
INSERT INTO VOITURE VALUES (4,'FORD', 'FIESTA','NORAMAL','ROSE'); 

/*
prompt ------------------------------------------;
prompt -----    insertion VOITURE    ------------;
prompt ------------------------------------------;
*/

INSERT INTO VOITURE_MEMBRE VALUES (1,'leveque.pierre@gmail.com',1); 
INSERT INTO VOITURE_MEMBRE VALUES (2,'dupont.mariee@gmail.com',4); 
INSERT INTO VOITURE_MEMBRE VALUES (3,'renard.albert@gmail.com',2); 
INSERT INTO VOITURE_MEMBRE VALUES (4,'martin.loic@gmail.com',3); 
/*
prompt ------------------------------------------;
prompt -----       insertion TRAJET    ----------;
prompt ------------------------------------------;
*/

INSERT INTO TRAJET VALUES (1010, 'leveque.pierre@gmail.com','MONTPELLIER','10-03-2017','ADR_RDV','NIMES','ADR_AR','TYPEVOIT',4,10); 
INSERT INTO TRAJET VALUES (1011, 'dupont.mariee@gmail.com','BEZIERS','10-04-2017','ADR_RDV','ALES','ADR_AR','TYPEVOIT',2,30); 
INSERT INTO TRAJET VALUES (1012, 'renard.albert@gmail.com','PERPIGNAN','10-05-2017','ADR_RDV','MONTPELLIER','ADR_AR','TYPEVOIT',1,13); 
INSERT INTO TRAJET VALUES (2909, 'martin.loic@gmail.com','ALES','10-06-2017','ADR_RDV','SAINT-AMBROIX','ADR_AR','TYPEVOIT',3,20); 

/*
prompt ------------------------------------------;
prompt -----insertion DEMANDE_TRAJET ------------;
prompt ------------------------------------------;
*/

INSERT INTO DEMANDE_TRAJET VALUES (911023,'leveque.pierre@gmail.com',1010); 
INSERT INTO DEMANDE_TRAJET VALUES (911023,'dupont.mariee@gmail.com',1011); 
INSERT INTO DEMANDE_TRAJET VALUES (911023,'renard.albert@gmail.com',1012); 
>>>>>>> dc69b67c48127b52112e1f137f119a4abc01c6ca:public/sql/remplissage.sql
INSERT INTO DEMANDE_TRAJET VALUES (911023,'martin.loic@gmail.com',2909); 