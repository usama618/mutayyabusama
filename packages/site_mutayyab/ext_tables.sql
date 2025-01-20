
CREATE TABLE tt_content (
	tx_sitemutayyab_education int(4) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_sitemutayyab_education (
	sorting_foreign int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	tablename varchar(64) DEFAULT 'tt_content' NOT NULL,
	fieldname varchar(64) DEFAULT 'tx_sitemutayyab_education' NOT NULL,
	link varchar(1024) DEFAULT '' NOT NULL,
	linklabel varchar(255) DEFAULT '' NOT NULL,
	header varchar(255) DEFAULT '' NOT NULL,
	subheader varchar(255) DEFAULT '' NOT NULL,
	linkconfig varchar(255) DEFAULT 'default' NOT NULL,
	image int(11) unsigned DEFAULT '0' NOT NULL,
);