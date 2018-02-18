
CREATE TABLE `access_groups` (
`access_groupsid` int(11) NOT NULL AUTO_INCREMENT,
`password` char(40) NOT NULL,
`username` varchar(255) NOT NULL,
`salt` varchar(255) NOT NULL,
primary key(access_groupsid)
);




CREATE TABLE `admin_users` (
`admin_usersid` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(255) NOT NULL,
`password` char(40) NOT NULL,
`salt` varchar(255) NOT NULL,
`privalleges` varchar(255) NOT NULL,
`logged_in_key` varchar(255) NOT NULL,
`age` varchar(255) NOT NULL,
`uaip` varchar(255) NOT NULL,
primary key(admin_usersid)
);




CREATE TABLE `blog_author` (
`blog_authorid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`details` text NOT NULL,
primary key(blog_authorid)
);




CREATE TABLE `blog_categories` (
`blog_categoriesid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
primary key(blog_categoriesid)
);




CREATE TABLE `blog_comments` (
`blog_commentsid` int(11) NOT NULL AUTO_INCREMENT,
`belongs_to_blog` varchar(255) NOT NULL,
`content` longtext NOT NULL,
`timestamp` datetime NOT NULL,
`author` varchar(255) NOT NULL,
`website` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`approved` varchar(255) NOT NULL,
primary key(blog_commentsid)
);




CREATE TABLE `blog_config` (
`blog_configid` int(11) NOT NULL AUTO_INCREMENT,
`items_on_page` smallint(6) NOT NULL,
`sidebar_cal` varchar(3) NOT NULL,
`sidebar_cats` varchar(3) NOT NULL,
`sidebar_tags` varchar(3) NOT NULL,
`comment_email_notification` varchar(255) NOT NULL,
`related_articles_threshold` varchar(255) NOT NULL,
`comment_email_from` varchar(255) NOT NULL,
`comment_email_from_name` varchar(255) NOT NULL,
`secret_passcode` varchar(255) NOT NULL,
`sidebar_recent` varchar(255) NOT NULL,
`number_sidebar_recent` varchar(255) NOT NULL,
`sidebar_search` varchar(255) NOT NULL,
`manual_approve` varchar(255) NOT NULL,
primary key(blog_configid)
);

INSERT INTO `blog_config` VALUES ('1', '10', 'yes', 'yes', 'yes', '', '2', '', '', 'changeme', 'yes', '5', 'yes', '');



CREATE TABLE `blog_entries` (
`blog_entriesid` int(11) NOT NULL AUTO_INCREMENT,
`in_categories` varchar(255) NOT NULL,
`tags` varchar(255) NOT NULL,
`title` varchar(255) NOT NULL,
`summary` text NOT NULL,
`keywords` text NOT NULL,
`content` mediumtext NOT NULL,
`timestamp` varchar(255) NOT NULL,
`ad1` text NOT NULL,
`ad2` text NOT NULL,
`author` varchar(255) NOT NULL,
`live` varchar(255) NOT NULL,
`longtitle` varchar(255) NOT NULL,
`playlist` varchar(255) NOT NULL,
`language` varchar(255) NOT NULL,
`gallery` varchar(255) NOT NULL,
`content2` mediumtext NOT NULL,
`deleted` varchar(255) NOT NULL,
primary key(blog_entriesid)
);

CREATE TABLE `blog_entries_versions` (
`blog_entries_versionsid` int(11) NOT NULL auto_increment,
`belongs_to_blog_entry_id` INT NOT NULL,
`content` TEXT NOT NULL,
`date_saved` INT NOT NULL,
`draft` TINYINT NOT NULL, PRIMARY KEY  (`blog_entries_versionsid`));


CREATE TABLE `buyer` (
`buyerid` int(11) NOT NULL AUTO_INCREMENT,
`first_name` varchar(255) NOT NULL,
`last_name` varchar(255) NOT NULL,
`address_city` varchar(255) NOT NULL,
`address_country` varchar(255) NOT NULL,
`address_state` varchar(255) NOT NULL,
`address_street` varchar(255) NOT NULL,
`address_zip` varchar(255) NOT NULL,
`payer_business_name` varchar(255) NOT NULL,
`payer_email` varchar(255) NOT NULL,
`payer_id` varchar(255) NOT NULL,
`paid` int(11) NOT NULL,
`status` varchar(255) NOT NULL,
`txn_id` varchar(255) NOT NULL,
`dispatched` int(11) NOT NULL,
`mc_gross` decimal(16,2) NOT NULL,
primary key(buyerid)
);




CREATE TABLE `events` (
`eventsid` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(255) NOT NULL,
`day` varchar(255) NOT NULL,
`month` varchar(255) NOT NULL,
`year` varchar(255) NOT NULL,
`link` varchar(255) NOT NULL,
`summary` varchar(255) NOT NULL,
`belongs_to_category` INT NOT NULL,
primary key(eventsid)
);


CREATE TABLE `events_categories` (
`events_categoriesid` int(11) NOT NULL auto_increment,
`name` VARCHAR(255) NOT NULL, PRIMARY KEY  (`events_categoriesid`));


CREATE TABLE `forms` (
`formsid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`destination` varchar(255) NOT NULL,
`from_email` varchar(255) NOT NULL,
`from_name` varchar(255) NOT NULL,
`subject` varchar(255) NOT NULL,
primary key(formsid)
);




CREATE TABLE `galleries` (
`galleriesid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
primary key(galleriesid)
);




CREATE TABLE `images` (
`imagesid` int(11) NOT NULL AUTO_INCREMENT,
`caption` varchar(255) NOT NULL,
`filename` varchar(255) NOT NULL,
`belongs_to_gallery` varchar(255) NOT NULL,
`order` int(11) NOT NULL,
primary key(imagesid)
);




CREATE TABLE `inputs` (
`inputsid` int(11) NOT NULL AUTO_INCREMENT,
`type` varchar(255) NOT NULL,
`label` varchar(255) NOT NULL,
`value` varchar(255) NOT NULL,
`order` varchar(255) NOT NULL,
`required` varchar(255) NOT NULL,
`belongs_to_form` varchar(255) NOT NULL,
`options` varchar(255) NOT NULL,
primary key(inputsid)
);




CREATE TABLE `languages` (
`languagesid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`abr` varchar(255) NOT NULL,
primary key(languagesid)
);




CREATE TABLE `media` (
`mediaid` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(255) NOT NULL,
`author` varchar(255) NOT NULL,
`filename` varchar(255) NOT NULL,
`link` varchar(255) NOT NULL,
`description` varchar(255) NOT NULL,
`belongs_to_playlist` varchar(255) NOT NULL,
`image` varchar(255) NOT NULL,
primary key(mediaid)
);




CREATE TABLE `media_playlists` (
`media_playlistsid` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(255) NOT NULL,
`type` varchar(255) NOT NULL,
primary key(media_playlistsid)
);




CREATE TABLE `newsletter_email` (
`newsletter_emailid` int(11) NOT NULL AUTO_INCREMENT,
`belongs_to_mailing_list` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`name` varchar(255) NOT NULL,
`inactive` varchar(255) NOT NULL,
`fail_on_last_send` varchar(255) NOT NULL,
primary key(newsletter_emailid)
);




CREATE TABLE `newsletter_email_config` (
`newsletter_email_configid` int(11) NOT NULL AUTO_INCREMENT,
`smtp_server` varchar(255) NOT NULL,
`from_email` varchar(255) NOT NULL,
`from_name` varchar(255) NOT NULL,
`username` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`subject` varchar(255) NOT NULL,
`email_me` varchar(255) NOT NULL,
primary key(newsletter_email_configid)
);




CREATE TABLE `orders` (
`ordersid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`price` decimal(16,2) NOT NULL,
`quantity` varchar(255) NOT NULL,
`product_code` varchar(255) NOT NULL,
`postage` decimal(16,2) NOT NULL,
`only_one` varchar(255) NOT NULL,
`belongs_to_buyer` int(11) NOT NULL,
`weight` decimal(16,2) NOT NULL,
`variant` mediumtext NOT NULL,
primary key(ordersid)
);




CREATE TABLE `products` (
`productsid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`price` decimal(16,2) NOT NULL,
`only_one` varchar(255) NOT NULL,
`weight` varchar(255) NOT NULL,
`code` varchar(255) NOT NULL,
`variants` mediumtext NOT NULL,
primary key(productsid)
);




CREATE TABLE `search` (
`searchid` int(11) NOT NULL AUTO_INCREMENT,
`blog_entry_id` int(11) NOT NULL,
`word` varchar(255) NOT NULL,
`count` int(11) NOT NULL,
primary key(searchid)
);




CREATE TABLE `search_all` (
`search_allid` int(11) NOT NULL AUTO_INCREMENT,
`entry_id` int(11) NOT NULL,
`word` varchar(255) NOT NULL,
`count` int(11) NOT NULL,
`blog` varchar(255) NOT NULL,
primary key(search_allid)
);




CREATE TABLE `security` (
`securityid` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(255) NOT NULL,
`password` text NOT NULL,
`enabled` varchar(255) NOT NULL,
primary key(securityid)
);



CREATE TABLE `settings` (
`settingsid` int(11) NOT NULL auto_increment,
`tracking_code` TEXT NOT NULL,
`livechat_status` VARCHAR(255) NOT NULL,
`livechat_name` VARCHAR(255) NOT NULL,
`livechat_message` VARCHAR(255) NOT NULL,
`mini_nav` VARCHAR(255) NOT NULL,
`page_filter_lang` VARCHAR(255) NOT NULL,
`page_filter_search` VARCHAR(255) NOT NULL,
`page_filter_page` SMALLINT NOT NULL,
`blog_filter_page` SMALLINT NOT NULL,
`blog_filter_lang` VARCHAR(255) NOT NULL,
`blog_filter_search` VARCHAR(255) NOT NULL,
`blog_filter_author` MEDIUMINT NOT NULL,
`blog_filter_cat` VARCHAR(255) NOT NULL,
`page_filter_parent` SMALLINT NOT NULL,
`page_filter_show` SMALLINT NOT NULL,
`page_filter_type` VARCHAR(255) NOT NULL,
`newsletter_filter_page` SMALLINT NOT NULL,
`newsletter_filter_search` VARCHAR(255) NOT NULL,
`db_version` SMALLINT NOT NULL,
`newsletter_filter_group` VARCHAR(255) NOT NULL, PRIMARY KEY  (`settingsid`)) ENGINE=MyISAM;

INSERT INTO `settings` VALUES(1, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, '');



CREATE TABLE `shop_config` (
`shop_configid` int(11) NOT NULL AUTO_INCREMENT,
`paypal_email` varchar(255) NOT NULL,
`no_shipping` tinyint(4) NOT NULL,
`return_success` varchar(255) NOT NULL,
`return_fail` varchar(255) NOT NULL,
`no_note` varchar(255) NOT NULL,
`order_received_email` text NOT NULL,
`order_sent_email` text NOT NULL,
`currency` varchar(255) NOT NULL,
`smtp_server` varchar(255) NOT NULL,
`from_email` varchar(255) NOT NULL,
`from_name` varchar(255) NOT NULL,
`username` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`order_received_email_subject` varchar(255) NOT NULL,
`order_sent_email_subject` varchar(255) NOT NULL,
primary key(shop_configid)
);




CREATE TABLE `static_pages` (
`static_pagesid` int(11) NOT NULL auto_increment,
`pagetitle` VARCHAR(255) NOT NULL,
`order` VARCHAR(255) NOT NULL,
`keywords` VARCHAR(255) NOT NULL,
`summary` VARCHAR(255) NOT NULL,
`content` MEDIUMTEXT NOT NULL,
`homepage` VARCHAR(255) NOT NULL,
`gallery` VARCHAR(255) NOT NULL,
`longtitle` VARCHAR(255) NOT NULL,
`form` VARCHAR(255) NOT NULL,
`parent` VARCHAR(255) NOT NULL,
`live` VARCHAR(255) NOT NULL,
`type` VARCHAR(255) NOT NULL,
`template` VARCHAR(255) NOT NULL,
`language` VARCHAR(255) NOT NULL,
`calendar` VARCHAR(255) NOT NULL,
`blog` VARCHAR(255) NOT NULL,
`playlist` VARCHAR(255) NOT NULL,
`content2` TEXT NOT NULL,
`newsletter` VARCHAR(255) NOT NULL,
`shop` VARCHAR(255) NOT NULL,
`deleted` VARCHAR(255) NOT NULL,
`sitemap` VARCHAR(255) NOT NULL,
`locked` VARCHAR(255) NOT NULL,
`security` VARCHAR(255) NOT NULL,
`last_updated` INT NOT NULL,
`content_right` MEDIUMTEXT NOT NULL,
`content_left` MEDIUMTEXT NOT NULL,
`content2_left` MEDIUMTEXT NOT NULL,
`content2_right` MEDIUMTEXT NOT NULL,
`top_parent` VARCHAR(255) NOT NULL,
primary key(static_pagesid)
);

INSERT INTO `static_pages` VALUES ('26', 'Home', '-1272142554', '', '', '', 'yes', '', 'Home', '', '', 'yes', 'topLevel', 'main', 'en', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '','');



CREATE TABLE `static_pages_versions` (
`static_pages_versionsid` int(11) NOT NULL AUTO_INCREMENT,
`pagetitle` varchar(255) NOT NULL,
`keywords` varchar(255) NOT NULL,
`summary` varchar(255) NOT NULL,
`content` mediumtext NOT NULL,
`longtitle` varchar(255) NOT NULL,
`content2` text NOT NULL,
`date_saved` int(11) NOT NULL,
`belongs_to_static_page_id` varchar(255) NOT NULL,
`content_left` mediumtext NOT NULL,
`content_right` mediumtext NOT NULL,
`content2_left` mediumtext NOT NULL,
`content2_right` mediumtext NOT NULL,
`draft` tinyint(4) NOT NULL,
primary key(static_pages_versionsid)
);




CREATE TABLE `stats` (
`statsid` int(11) NOT NULL AUTO_INCREMENT,
`browser` varchar(255) NOT NULL,
`ip` varchar(15) NOT NULL,
`date` int(11) NOT NULL,
`page_id` int(11) NOT NULL,
`referer` varchar(255) NOT NULL,
`country` varchar(255) NOT NULL,
`type` char(4) NOT NULL,
`browser_name` varchar(255) NOT NULL,
`os_name` varchar(255) NOT NULL,
primary key(statsid)
);



