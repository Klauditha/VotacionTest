-- Table: public."Region"

-- DROP TABLE public."Region";

CREATE TABLE public."Region"
(
    "IdRegion" integer,
    "NombreRegion" text COLLATE pg_catalog."default"
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public."Region"
    OWNER to postgres;