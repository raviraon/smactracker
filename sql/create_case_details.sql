CREATE TABLE `case_details` (
id int(4) NOT NULL auto_increment,
owner_id int(4) NOT NULL,
owner_name VARCHAR(255) NOT NULL,
campaign VARCHAR(255) NOT NULL,
customer_name VARCHAR(255) NOT NULL default '',
fusion_id VARCHAR(255) NOT NULL default '',
open_date DATE  NULL default NULL,
close_date DATE  NULL default NULL,
status VARCHAR(255) NULL,
comments TEXT NULL,
created_by VARCHAR(255) NOT NULL default '',
updated_by VARCHAR(255) NOT NULL default '',
created_at DATETIME NULL default NOW(),
updated_at DATETIME NULL default NOW(),
PRIMARY KEY (`id`),
UNIQUE (fusion_id),
FOREIGN KEY (owner_id) REFERENCES Users(id)
) ENGINE=MyISAM;
