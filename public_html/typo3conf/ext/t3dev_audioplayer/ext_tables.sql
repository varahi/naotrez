#
# Table structure for table 'tx_t3devaudioplayer_domain_model_item'
#
CREATE TABLE tx_t3devaudioplayer_domain_model_item (

	title varchar(255) DEFAULT '' NOT NULL,
	artist varchar(255) DEFAULT '' NOT NULL,
	album varchar(255) DEFAULT '' NOT NULL,
	song_url varchar(255) DEFAULT '' NOT NULL,
	song_duration varchar(255) DEFAULT '' NOT NULL,
	cover int(11) unsigned NOT NULL default '0',

);
