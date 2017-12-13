-- ===========================================================================
-- ddl table CINEMA
-- ===========================================================================


CREATE TABLE IF NOT EXISTS cinema (
  id      int(8)        NOT NULL AUTO_INCREMENT,
  nom     varchar(250)  NOT NULL,
  adresse varchar(250)  NOT NULL,
  cp      varchar(50)   NOT NULL,
  ville   varchar(250)  NOT NULL,
  CONSTRAINT pk_cinema  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- ===========================================================================
-- Contenu de la table cinema
-- ===========================================================================

INSERT INTO cinema (id, nom, adresse, cp, ville) 
VALUES
(1, 'CGR Dragon', '8, Cours des Dames', '17000', 'La Rochelle'),
(2, 'Méga CGR La Rochelle', 'ave Becquerel', '17000', 'La Rochelle'),
(3, 'CGR Olympia', '54 rue Chaudrier', '17000', 'La Rochelle'),
(4, 'La Coursive Scène Nationale', '4, rue Saint-Jean-du-Perot', '17000', 'La Rochelle'),
(5, 'Casino de Fouras', 'Place Bugeau', '17450', 'Fouras'),
(6, 'La Maline', 'Le Mail', '17670', 'La Couarde-sur-Mer'),
(7, 'Le Goëland', '1 rue Général Leclerc', '85460', 'L''Aiguillon-sur-Mer'),
(8, 'Eldorado', '5, rue de la République', '17310', 'Saint-Pierre-d''Oléron');