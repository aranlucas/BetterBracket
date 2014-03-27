-- Database: "BetterBracket"

-- DROP DATABASE "BetterBracket";

CREATE DATABASE "BetterBracket"
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'C'
       LC_CTYPE = 'C'
       CONNECTION LIMIT = -1;


CREATE SEQUENCE user_id_seq;
CREATE TABLE users
(
  id integer NOT NULL DEFAULT nextval('user_id_seq'),
  email character varying(125),
  password character(256),
  date_joined timestamp without time zone DEFAULT statement_timestamp(),
  CONSTRAINT users_table_pkey PRIMARY KEY (id),
  CONSTRAINT emails UNIQUE(email)
);
ALTER SEQUENCE user_id_seq OWNED BY users.id;

CREATE TABLE users_profile
(
  user_id integer NOT NULL,
  first character varying(125),
  last character varying(125),
  description TEXT,
  caption character varying(125)
);

CREATE SEQUENCE group_id_seq;
CREATE TABLE groups
(
  id integer NOT NULL DEFAULT nextval('group_id_seq'),
  name character varying(125),
  date_created timestamp without time zone DEFAULT statement_timestamp(),
  CONSTRAINT groups_table_pkey PRIMARY KEY (id)
);
ALTER SEQUENCE group_id_seq OWNED BY groups.id;

CREATE TABLE groups_profile
(
  group_id integer NOT NULL,
  picturelocation character varying(256),
  description TEXT,
  caption character varying(125)
);


CREATE TABLE user_groups
(
  group_id integer NOT NULL,
  user_id integer NOT NULL
);

CREATE TABLE teams  (
	id INTEGER NOT NULL,
	team_name character varying(126)
);
CREATE TABLE games  (
	id INTEGER NOT NULL,
	team_id_1 INTEGER,
	team_id_2 INTEGER,
	score_1 SMALLINT,
	score_2 SMALLINT
);
CREATE SEQUENCE pick_id_seq;
CREATE TABLE picks
(
  id integer NOT NULL DEFAULT nextval('pick_id_seq'),
  user_id INTEGER,
  game_id INTEGER,
  pick SMALLINT,
  week SMALLINT,
  CONSTRAINT picks_table_pkey PRIMARY KEY (user_id)
);
ALTER SEQUENCE pick_id_seq OWNED BY picks.id;

