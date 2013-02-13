--
-- PostgreSQL database dump
--

-- Dumped from database version 9.0.3
-- Dumped by pg_dump version 9.0.3
-- Started on 2013-02-02 18:39:55

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

ALTER TABLE ONLY public.usuarios DROP CONSTRAINT id_usuario;
ALTER TABLE ONLY public.contenidos DROP CONSTRAINT contenidos_pkey;
ALTER TABLE public.usuarios ALTER COLUMN id_usuario DROP DEFAULT;
ALTER TABLE public.contenidos ALTER COLUMN id_contenido DROP DEFAULT;
DROP SEQUENCE public.usuarios_id_usuario_seq;
DROP TABLE public.usuarios;
DROP SEQUENCE public.contenidos_id_contenido_seq;
DROP TABLE public.contenidos;
DROP PROCEDURAL LANGUAGE plpgsql;
DROP SCHEMA public;
--
-- TOC entry 1801 (class 1262 OID 33243)
-- Dependencies: 1800
-- Name: cisne; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE cisne IS 'WebCisne es una empresa dedicado al desarrollo del aplicaciones de dinamicas Web. Adicionalmente ofrecemos otros servicios que se puede contemplar en nuestro portafolio.';


--
-- TOC entry 5 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 1802 (class 0 OID 0)
-- Dependencies: 5
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- TOC entry 312 (class 2612 OID 11574)
-- Name: plpgsql; Type: PROCEDURAL LANGUAGE; Schema: -; Owner: postgres
--

CREATE OR REPLACE PROCEDURAL LANGUAGE plpgsql;


ALTER PROCEDURAL LANGUAGE plpgsql OWNER TO postgres;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 1507 (class 1259 OID 33301)
-- Dependencies: 1790 1791 5
-- Name: contenidos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE contenidos (
    id_contenido integer NOT NULL,
    cod_content character varying(3) NOT NULL,
    nom_content character varying(50) NOT NULL,
    des_content character varying(100) NOT NULL,
    est_content text,
    activo integer DEFAULT 1 NOT NULL,
    fregistro time with time zone DEFAULT now() NOT NULL,
    fmodif time with time zone
);


ALTER TABLE public.contenidos OWNER TO postgres;

--
-- TOC entry 1804 (class 0 OID 0)
-- Dependencies: 1507
-- Name: TABLE contenidos; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE contenidos IS 'Tabla donde se ve reflejado en contenido de la página, todo lo que involucre contenido dinamico se almacena en esta tabla, las consultas a esta tabla deberan ser por codigos de contenido y no por id.';


--
-- TOC entry 1805 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.id_contenido; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.id_contenido IS 'Identificador único para el contenido, en la aplicacion se debe llamar hacer referencia de esta tabla desde el código del contenido.';


--
-- TOC entry 1806 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.cod_content; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.cod_content IS 'Código del contenido definida por 3 caracteres.
';


--
-- TOC entry 1807 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.nom_content; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.nom_content IS 'Nombre del contenido que se mostrara en la aplicacion.';


--
-- TOC entry 1808 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.des_content; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.des_content IS 'Descripción del contenido que se mostrara en la aplicación';


--
-- TOC entry 1809 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.est_content; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.est_content IS 'Estructura HTML del contenido que deberá tener la página.';


--
-- TOC entry 1810 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.activo; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.activo IS 'Identifica si el contenido se debe mostrar. 
1: activo.
0: no activo.';


--
-- TOC entry 1811 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.fregistro; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.fregistro IS 'Fecha de registro del contenido.';


--
-- TOC entry 1812 (class 0 OID 0)
-- Dependencies: 1507
-- Name: COLUMN contenidos.fmodif; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN contenidos.fmodif IS 'Fecha en la que se modifica el contenido.';


--
-- TOC entry 1506 (class 1259 OID 33299)
-- Dependencies: 5 1507
-- Name: contenidos_id_contenido_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE contenidos_id_contenido_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contenidos_id_contenido_seq OWNER TO postgres;

--
-- TOC entry 1813 (class 0 OID 0)
-- Dependencies: 1506
-- Name: contenidos_id_contenido_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE contenidos_id_contenido_seq OWNED BY contenidos.id_contenido;


--
-- TOC entry 1814 (class 0 OID 0)
-- Dependencies: 1506
-- Name: contenidos_id_contenido_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('contenidos_id_contenido_seq', 1, false);


--
-- TOC entry 1505 (class 1259 OID 33282)
-- Dependencies: 1786 1787 1788 5
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    id_usuario integer NOT NULL,
    nombre character varying(50) DEFAULT 'nombre'::character varying NOT NULL,
    apellido character varying(50) DEFAULT 'apellido'::character varying NOT NULL,
    cedula integer NOT NULL,
    pass character varying(100) NOT NULL,
    fregistro time with time zone DEFAULT now() NOT NULL,
    facceso time with time zone
)
WITH (autovacuum_enabled=false);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 1815 (class 0 OID 0)
-- Dependencies: 1505
-- Name: TABLE usuarios; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE usuarios IS 'Tabla de accesos a los usuarios, tiene como funcion brindar acceso a aquellos usuarios cuyo rol es mantener actualizada la página.';


--
-- TOC entry 1816 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.id_usuario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.id_usuario IS 'Identificador unico para el usuario que se loguea en la aplicación';


--
-- TOC entry 1817 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.nombre; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.nombre IS 'Nombre del usuario';


--
-- TOC entry 1818 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.apellido; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.apellido IS 'Apellido del usuario';


--
-- TOC entry 1819 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.cedula; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.cedula IS 'Cédula del usuario';


--
-- TOC entry 1820 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.pass; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.pass IS 'Contraseña del usuario';


--
-- TOC entry 1821 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.fregistro; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.fregistro IS 'Fecha de registro del usuario';


--
-- TOC entry 1822 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.facceso; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.facceso IS 'Fecha de acceso del usuario. El usuario cuando se loguea en la aplicación, debera actualizace este campo con la última fecha de registro.';


--
-- TOC entry 1504 (class 1259 OID 33280)
-- Dependencies: 1505 5
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_usuario_seq OWNER TO postgres;

--
-- TOC entry 1823 (class 0 OID 0)
-- Dependencies: 1504
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuarios_id_usuario_seq OWNED BY usuarios.id_usuario;


--
-- TOC entry 1824 (class 0 OID 0)
-- Dependencies: 1504
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuarios_id_usuario_seq', 6, true);


--
-- TOC entry 1789 (class 2604 OID 33304)
-- Dependencies: 1506 1507 1507
-- Name: id_contenido; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE contenidos ALTER COLUMN id_contenido SET DEFAULT nextval('contenidos_id_contenido_seq'::regclass);


--
-- TOC entry 1785 (class 2604 OID 33285)
-- Dependencies: 1505 1504 1505
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('usuarios_id_usuario_seq'::regclass);


--
-- TOC entry 1797 (class 0 OID 33301)
-- Dependencies: 1507
-- Data for Name: contenidos; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 1796 (class 0 OID 33282)
-- Dependencies: 1505
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuarios (id_usuario, nombre, apellido, cedula, pass, fregistro, facceso) VALUES (1, 'luis', 'marin', 173028257, '123456', '18:13:49.852-04:30', NULL);
INSERT INTO usuarios (id_usuario, nombre, apellido, cedula, pass, fregistro, facceso) VALUES (2, 'luis2', 'marin2', 17302557, '123456', '18:15:26.036-04:30', NULL);
INSERT INTO usuarios (id_usuario, nombre, apellido, cedula, pass, fregistro, facceso) VALUES (6, 'LUIS', 'MARIN', 17302857, '123456', '18:21:49.512-04:30', NULL);


--
-- TOC entry 1795 (class 2606 OID 33311)
-- Dependencies: 1507 1507
-- Name: contenidos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY contenidos
    ADD CONSTRAINT contenidos_pkey PRIMARY KEY (id_contenido);


--
-- TOC entry 1793 (class 2606 OID 33288)
-- Dependencies: 1505 1505
-- Name: id_usuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT id_usuario PRIMARY KEY (id_usuario);


--
-- TOC entry 1803 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2013-02-02 18:39:55

--
-- PostgreSQL database dump complete
--

