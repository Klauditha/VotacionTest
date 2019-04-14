-- Database: votacion

-- DROP DATABASE votacion;

CREATE DATABASE votacion
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Chile.1252'
    LC_CTYPE = 'Spanish_Chile.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

GRANT ALL ON DATABASE votacion TO pg_signal_backend WITH GRANT OPTION;

GRANT ALL ON DATABASE votacion TO postgres WITH GRANT OPTION;

GRANT ALL ON DATABASE votacion TO pg_read_all_stats WITH GRANT OPTION;

GRANT TEMPORARY, CONNECT ON DATABASE votacion TO PUBLIC;

GRANT ALL ON DATABASE votacion TO pg_monitor WITH GRANT OPTION;

GRANT ALL ON DATABASE votacion TO pg_stat_scan_tables WITH GRANT OPTION;

GRANT ALL ON DATABASE votacion TO pg_read_all_settings WITH GRANT OPTION;