PGDMP     %    '    
            x           postgres    12.2    12.2                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            	           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            
           1262    13318    postgres    DATABASE     �   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Paraguay.1252' LC_CTYPE = 'Spanish_Paraguay.1252';
    DROP DATABASE postgres;
                postgres    false                       0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   postgres    false    2826                        3079    16384 	   adminpack 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;
    DROP EXTENSION adminpack;
                   false                       0    0    EXTENSION adminpack    COMMENT     M   COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';
                        false    1            �            1259    16395 
   tb_cliente    TABLE     �   CREATE TABLE public.tb_cliente (
    codigo integer NOT NULL,
    nome character varying(255) NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(100) NOT NULL,
    celular character varying(11)
);
    DROP TABLE public.tb_cliente;
       public         heap    postgres    false            �            1259    16393    tb_cliente_codigo_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_cliente_codigo_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tb_cliente_codigo_seq;
       public          postgres    false    204                       0    0    tb_cliente_codigo_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tb_cliente_codigo_seq OWNED BY public.tb_cliente.codigo;
          public          postgres    false    203            �
           2604    16398    tb_cliente codigo    DEFAULT     v   ALTER TABLE ONLY public.tb_cliente ALTER COLUMN codigo SET DEFAULT nextval('public.tb_cliente_codigo_seq'::regclass);
 @   ALTER TABLE public.tb_cliente ALTER COLUMN codigo DROP DEFAULT;
       public          postgres    false    204    203    204                      0    16395 
   tb_cliente 
   TABLE DATA           I   COPY public.tb_cliente (codigo, nome, email, senha, celular) FROM stdin;
    public          postgres    false    204   (                  0    0    tb_cliente_codigo_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tb_cliente_codigo_seq', 5, true);
          public          postgres    false    203            �
           2606    16402    tb_cliente tb_cliente_email_key 
   CONSTRAINT     [   ALTER TABLE ONLY public.tb_cliente
    ADD CONSTRAINT tb_cliente_email_key UNIQUE (email);
 I   ALTER TABLE ONLY public.tb_cliente DROP CONSTRAINT tb_cliente_email_key;
       public            postgres    false    204            �
           2606    16400    tb_cliente tb_cliente_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.tb_cliente
    ADD CONSTRAINT tb_cliente_pkey PRIMARY KEY (codigo);
 D   ALTER TABLE ONLY public.tb_cliente DROP CONSTRAINT tb_cliente_pkey;
       public            postgres    false    204               �   x�M���0�g�)�Tr~u�����ŪT"��4�O�2p��Χ��^*�-���]��n~�>Ú�-'m��e�ȑ%�b
�z�~�~�E���2tL<����"1rN�*�3���3��X7��I�c@�/,L1�     