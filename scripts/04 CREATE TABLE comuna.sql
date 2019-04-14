-- Table: public.comuna

-- DROP TABLE public.comuna;

CREATE TABLE public.comuna
(
    idcomuna integer NOT NULL,
    nombre character varying COLLATE pg_catalog."default",
    idregion integer,
    CONSTRAINT comuna_pkey PRIMARY KEY (idcomuna)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.comuna
    OWNER to postgres;