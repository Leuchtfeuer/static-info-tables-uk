
CREATE TABLE static_countries (
  cn_short_uk varchar(100) DEFAULT '' NOT NULL
);

CREATE TABLE static_currencies (
  cu_name_uk varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_uk varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_uk varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_uk varchar(50) DEFAULT '' NOT NULL
);