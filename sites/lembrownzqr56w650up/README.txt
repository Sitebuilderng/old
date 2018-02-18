--------------------------------------------------------------------------------
Welcome to your website’s folder. 
---------------------------------------------------------------------------------

---------------------------------------------------------------------------------
Quick Start:
---------------------------------------------------------------------------------

Providing you have made a new website in the SetSeed Hub, and are viewing this 
file in the new folder than was been created, you can get started by editing the themes/default/css/global.css file, and the 
themes/default/templates/layouts/main.tpl file, in this folder. You can then 
follow the include paths from the main.tpl file to make further customisations. 

---------------------------------------------------------------------------------

---------------------------------------------------------------------------------
More information:
---------------------------------------------------------------------------------

SetSeed can power any number of websites and each one has it's own 
folder that goes in the main 'sites' folder.

When you create a new website using the SetSeed Hub, the folder called 'default' 
get's duplicated to create a new website. 

All resources for a website are stored in it’s folder and are served to visitors
through a proxy script.

Static resources for a website, css, presentation graphics and javascripts are
all stored inside a theme folder. User generated content like images, downloads, 
videos etc that the CMS user will upload are stored in the relevant folders in 
the top level of the website’s site folder. 

Each site's folder contains a folder called 'themes'. Inside this folder 
can be any number of theme folders. Theme's can be selected for a site 
using the SetSeed Hub. 

Below is a detailed overview of the files and folders in a site folder. 

---------------------------------------------------------------------------------

cache/ <- Just used for Smarty caching. 
	|----------------------------------------------------------------------------
	cache/ <- Just used for Smarty caching. 
	|----------------------------------------------------------------------------
	configs/ <- Just used for Smarty caching. 
	|----------------------------------------------------------------------------
	templates_c/  <- Just used for Smarty caching. 
---------------------------------------------------------------------------------
db.sql <- 	This is an sql file that is written to when 'prepare backup' is 
			clicked in the Hub. It contains all database content for the site 
			except statistics (to keep file sizes manageable). When a new 
			website is created, the db.sql file in the 'default' folder
			gets used to create the new site’s database. 
---------------------------------------------------------------------------------			
downloads/ <- 	When your client uploads a file through the CMS it will be stored 
				in here. It can be downloaded from the site using the url:
				/downloads/file-name.ext
---------------------------------------------------------------------------------
email_attachments/ <-	When a form is built in the CMS that contains a file 
						upload field, it will save the files in this folder that
						are uploaded through the form. The email that is 
						generated will then contain a link to the file. Files
						in this folder cannot be publicly accessed.
---------------------------------------------------------------------------------
images/ <- 	When your clients upload an image to use on a page in the CMS, it 
			will be saved here. 
	|----------------------------------------------------------------------------
	../galleries/ <-	When your clients add images to galleries the large 
						version	of the image that is automatically created gets 
						stored here.
		|------------------------------------------------------------------------
		../../thumbs/ <-	When your clients add images to galleries the small 
							version of the image that is automatically created 
							gets stored here.
---------------------------------------------------------------------------------
branding.php 	<- 	Optional file file containing the encrypted branding code to 
					enable your	own branding to be used with the system.
---------------------------------------------------------------------------------
livechatlogs/ <-	When livechats are taking place, temporary logs of the
					conversations are stored in this folder.
---------------------------------------------------------------------------------
livechatsaves/ <- 	When livechat conversations are archived, the log of the 
					conversation is stored in here. 
---------------------------------------------------------------------------------
media/ <- 	When users add videos to their site through the CMS, the video and
			thumb files will be stored in here. 
---------------------------------------------------------------------------------
README.txt <- This file!
---------------------------------------------------------------------------------
themes/ <- This folder contains any number of theme folders
	|----------------------------------------------------------------------------
	../default/ <- 	The default theme, just a bare bones theme ready for 
					customisation or duplication.
		|------------------------------------------------------------------------
		../../block_classes.csv <-	A single line CSV file containing css classes
									that will be shown in the 'Custom Styles' 
									menu for block level text elements. 
		|------------------------------------------------------------------------
		../../css/	<-	All css files for a theme are stored in here.
			|--------------------------------------------------------------------
			../../../archives/ <- Used to create single-file, versioned, css caches
			|--------------------------------------------------------------------
			../../../email.css <-	Contains basic css rules that will attempt to 
									be converted to inline styles for their 
									targeted elements when sending email 
									newsletters from the CMS.
			|--------------------------------------------------------------------
			../../../files.csv <-	A single line csv file that includes the 
									files you want to include in the automatic css 
									cache file and the order in which you want 
									them to be included.
		|------------------------------------------------------------------------
		../../graphics/ <- 	Store your presentation graphics here. Files can be 
							referenced in css using url('../graphics/file.gif')
		|------------------------------------------------------------------------
		../../image_classes.csv <-	A single line CSV file containing css classes
									that will be shown in the 'Custom Styles' 
									menu for images that are added to a page.
		|------------------------------------------------------------------------
		../../javascripts/
			|--------------------------------------------------------------------
			../../../archives <- used for storing versioned javascript cache files.
			|--------------------------------------------------------------------
			../../../custom.js <- 	Automatically appended to a single-file cache 
									containing the following libraries and plugins:
									/javascripts/jquery.js
									/javascripts/form.js
									/javascripts/jquery.swfobject.js
									/javascripts/supersleight.js
									/javascripts/sha1-min.js
									/javascripts/color.js
									/javascripts/core.js
									Please note these files are stored singly in the
									/public/javascripts/ folder and do not need to be
									kept in a theme’s javascripts folder. 
									You can add any custom jQuery and javascript code
									in the custom.js file. 
		|------------------------------------------------------------------------
		../../sitewide_content.csv <-	When you list names of areas of your
										template in this file, they will show up
										in the CMS’s Settings > Sitewide Content
										menu. Text, images etc can then be 
										saved for each area. The area can then be
										shown in the site templates and will show
										on every page. The names will be available
										like this {$sitewideContent.yournamehere}
										so you should keep to simple names without
										spaces etc. 
		|------------------------------------------------------------------------
		../../split_classes.csv <-	Contains a list of classes that will be used
									to split up content into different sections,
									that can be used in different areas of a
									template.
		|------------------------------------------------------------------------
		../../templates <- Contains smarty templates for your site.
			|--------------------------------------------------------------------
			../../../components <- 	Smarty templates relating to SetSeed’s
									components are stored in here. 
				|----------------------------------------------------------------
				../../../../blog-add-comment.tpl <- 	This template is used for 
														the blog 'add comment' 
														form.
				|----------------------------------------------------------------
				../../../../blog-article.tpl <-	Used for a blog article’s
												content.
				|----------------------------------------------------------------
				../../../../blog-comments.tpl <-	Used to display all the
													comments in a blog entry.
				|----------------------------------------------------------------
				../../../../blog.tpl <- Used to display the main blog index 
										pages.
				|----------------------------------------------------------------
				../../../../calendar.tpl <- Optional. System uses central file in
										app/templates/common/master-calendar.tpl
										if omitted. To make site by site changes
										create this file and copy the contents
										of master-calendar.tpl into it before 
										making changes. File is used to display
										events calendars.
				|----------------------------------------------------------------
				../../../../form.tpl <- Used to display contact forms.
				|----------------------------------------------------------------
				../../../../gallery.tpl <- 	Used to display the image galleries.
				|----------------------------------------------------------------
				../../../../product.tpl <- Optional. System uses central file in
										app/templates/common/master-product.tpl
										if omitted. To make site by site changes
										create this file and copy the contents
										of master-product.tpl into it before 
										making changes. File is used to display
										products.
				|----------------------------------------------------------------
				../../../../shoppingbasket.tpl <-	Displays the shopping basket
				|----------------------------------------------------------------
				../../../../sitemap.tpl <- Displays the sitemap component.
			|--------------------------------------------------------------------
			../../../email
				|----------------------------------------------------------------
				../../../../email.tpl <- The email newsletter template.
			|--------------------------------------------------------------------
			../../../includes <- Contains various template includes.
				|----------------------------------------------------------------
				../../../../login.tpl <-	This template is for the login form
											that gets shown on pages that are 
											password protected.
				|----------------------------------------------------------------
				../../../../mini-basket.tpl <-	Template for a shopping basket
												that can be used in templates
												for all pages. Usually a mini
												version of the main shopping
												basket.
				|----------------------------------------------------------------
				../../../../search-results.tpl <-	Template that shows the 
													search results when a site
													search is carried out. 
			|--------------------------------------------------------------------
			../../../layouts <-	Contains the main outer templates for your pages.
								If you create more than one template in this 
								folder it will become available in the
								'Options > Template' menu when editing a page. 
				|----------------------------------------------------------------
				../../../../main.tpl -> The main, default outer template file. 
			|--------------------------------------------------------------------
			../../../nav -> Contains templates used for navigation menus. 
				|----------------------------------------------------------------
				../../../../drop-down-menu.tpl <-	Template that is optionally 
													included from nav.tpl to 
													display drop down menus in a 
													main navigation.
				|----------------------------------------------------------------
				../../../../nav.tpl <- The main site navigation menu.
				|----------------------------------------------------------------
				../../../../side-bar-sub-menu.tpl <-	A menu that is included 
														from layouts/main.tpl,
														or other templates, to 
														show a sidebar menu, 
														starting with 'sub pages'
														and typically only shows
														on pages that have those
														subpages.								
				|----------------------------------------------------------------
				../../../../third-level-menu.tpl <-	Shows sub-pages of sub-pages.
													Can be included in sidebar
													menus or drop down menus. 
			|--------------------------------------------------------------------
			../../../rss
				|----------------------------------------------------------------
				../../../../rss.tpl <-	The template used to format RSS Feeds
										for blog entries and blog comments. 
---------------------------------------------------------------------------------
Wow, have you really got this far? Well done! You should now know precisely what 
each file is for! Happy templating!
---------------------------------------------------------------------------------