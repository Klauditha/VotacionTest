-- Table: public.candidato

-- DROP TABLE public.candidato;

CREATE TABLE public.candidato
(
    id integer NOT NULL,
    nombre character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Candidato_pkey" PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.candidato
    OWNER to postgres;