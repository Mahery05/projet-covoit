/*
fichier triggers et procedures
20144124 odorico thibault
20140105 antoine gouyon
*/

DELIMITER |
CREATE TRIGGER after_insert_banni AFTER INSERT
ON BANNI FOR EACH ROW
BEGIN
    INSERT INTO NOTIFICATION (email_membre, message, vu, date_envoi)
    VALUES (NEW.email_banni, "Vous avez été banni", FALSE, NOW());
END |

CREATE TRIGGER after_insert_admin AFTER INSERT
ON ADMIN FOR EACH ROW
BEGIN
    INSERT INTO NOTIFICATION (email_membre, message, vu, date_envoi)
    VALUES (NEW.email_admin, "Vous avez été promu administrateur", FALSE, NOW());
END |
DELIMITER ;

