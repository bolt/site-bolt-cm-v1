<?php /* bolt */ die(); ?>json:{"general":{"database":{"prefix":"bolt_","driver":"sqlite","databasename":"boltsite"},"sitename":"The Bolt website.","homepage":"homepage\/1","homepage_template":"index.twig","locale":"en_GB","recordsperpage":10,"recordsperdashboardwidget":5,"debug":true,"debug_show_loggedoff":false,"debug_error_level":6135,"debug_enable_whoops":true,"debug_permission_audit_mode":false,"strict_variables":false,"theme":"boltsite","debug_compressjs":true,"debug_compresscss":true,"listing_template":"listing.twig","listing_records":6,"listing_sort":"datepublish DESC","caching":{"config":true,"rendering":false,"templates":true,"request":true,"duration":10,"authenticated":false},"wysiwyg":{"images":true,"tables":false,"fontcolor":false,"align":false,"subsuper":false,"embed":"true,","anchor":false,"ck":{"allowedContent":true,"autoParagraph":true,"contentsCss":["\/app\/view\/lib\/ckeditor\/contents.css","\/app\/view\/css\/ckeditor.css"],"filebrowserWindowWidth":"640","filebrowserWindowHeight":"480"},"filebrowser":{"browseUrl":"\/async\/filebrowser\/","imageBrowseUrl":"\/backend\/files\/files"},"anhor":"true,"},"canonical":"bolt-site.localhost","developer_notices":false,"cookies_use_remoteaddr":true,"cookies_use_browseragent":false,"cookies_use_httphost":true,"cookies_https_only":false,"cookies_lifetime":1209600,"thumbnails":{"default_thumbnail":[160,120],"default_image":[1004,900],"quality":80,"cropping":"crop","notfound_image":"view\/img\/default_notfound.png","error_image":"view\/img\/default_error.png"},"accept_file_types":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","csv","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"hash_strength":10,"branding":{"name":"Bolt","path":"\/backend","provided_by":["supercool@example.org","Supercool Webdesign Co."]},"maintenance_mode":false,"bolt_version":"1.4.0","notfound":"page\/not-found","record_template":"record.twig","search_results_template":"listing.twig","search_results_records":10,"enabled_extensions":["GoogleAnalytics","FacebookLike","TwitterButton","Disqus","Socialite"],"add_jquery":false,"changelog":{"enabled":true},"sitemap_template":"sitemap.twig","sitemap_xml_template":"sitemap_xml.twig","cookies_domain":".bolt-site.localhost"},"taxonomy":{"tags":{"slug":"tags","singular_slug":"tag","behaves_like":"tags","name":"Tags","singular_name":"Tag","has_sortorder":false,"tagcloud":true},"chapters":{"slug":"chapters","singular_slug":"chapter","behaves_like":"grouping","has_sortorder":true,"options":{"editors":"Content editors","frontenders":"Frontend developers","backenders":"Backend developers"},"name":"Chapters","singular_name":"Chapter"},"categories":{"name":"Categories","slug":"categories","singular_name":"Category","singular_slug":"category","behaves_like":"categories","multiple":1,"options":{"news":"news","events":"events","movies":"movies","music":"music","books":"books","life":"life","love":"love","fun":"fun"},"has_sortorder":false}},"menu":{"Main":[{"label":"Home","title":"The Bolt Homepage","path":"homepage"},{"label":"Features","title":"An overview of the features in Bolt. With screenshots!","path":"page\/features"},{"label":"Documentation","title":"Documentation for installation, configuration and creating sites with Bolt","link":"http:\/\/docs.bolt.cm"},{"label":"News","title":"The latest Bolt news! Extra! Extra! Read all about it!","link":"\/page\/news"},{"label":"Download","path":"page\/download"},{"label":"User manual","title":"Manual for 'working with Bolt', specifically for endusers and editors.","link":"http:\/\/manual.bolt.cm"}]},"routing":{"pagebinding":{"path":"\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::record","contenttypeslug":"page"},"contenttype":"pages"},"homepage":{"path":"\/","defaults":{"_controller":"Bolt\\Controllers\\Frontend::homepage"}},"search":{"path":"\/search","defaults":{"_controller":"Bolt\\Controllers\\Frontend::search"}},"preview":{"path":"\/preview\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::preview"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"contentlink":{"path":"\/{contenttypeslug}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::record"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"taxonomylink":{"path":"\/{taxonomytype}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::taxonomy"},"requirements":{"taxonomytype":"Bolt\\Controllers\\Routing::getAnyTaxonomyTypeRequirement"}},"contentlisting":{"path":"\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::listing"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getPluralContentTypeRequirement"}}},"permissions":{"roles":{"editor":{"description":"This user can edit stuff","label":"Editor"},"chief-editor":{"description":"This user can edit anything","label":"Chief Editor"},"admin":{"description":"User-level administrator.","label":"Administrator"},"developer":{"description":"Developer access. Only required to change system-level settings.","label":"Developer"},"guest":{"label":"Guest Editor"}},"global":{"about":["editor","admin","developer"],"activitylog":["admin","developer"],"clearcache":["admin","developer"],"contentaction":["editor","admin","developer"],"dashboard":["everyone"],"dbcheck":["admin","developer"],"dbupdate":["admin","developer"],"extensions":["developer"],"fileedit":["admin","developer"],"files:config":["developer"],"files:theme":["developer"],"files:uploads":["admin","developer"],"files":["editor","admin","developer"],"prefill":["developer"],"settings":["admin","developer","everyone"],"translation":["developer"],"useraction":["admin","developer"],"useredit":["admin","developer"],"users":["admin","developer"],"maintenance-mode":["everyone"],"login":["anonymous"],"postLogin":["anonymous"],"logout":["everyone"]},"contenttype-all":{"edit":["developer","admin","chief-editor"],"create":["developer","admin","chief-editor"],"publish":["developer","admin","chief-editor"],"depublish":["developer","admin","chief-editor"],"delete":["developer","admin"],"change-ownership":["developer","admin"]},"contenttype-default":{"edit":["editor"],"create":["editor"],"change-ownership":["owner"],"view":["anonymous"]},"contenttypes":null},"extensions":[],"theme":[],"contenttypes":{"news":{"name":"News","singular_name":"Newsitem","fields":{"title":{"type":"text","class":"large"},"slug":{"type":"slug","uses":["title"]},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"]},"text":{"type":"html","height":"300px","allowtwig":true},"text_markdown":{"type":"markdown","height":"400px"}},"record_template":"newsitem.twig","listing_template":"newslisting.twig","sort":"-id","slug":"news","singular_slug":"newsitem","show_on_dashboard":true,"default_status":"draft"},"features":{"name":"Features","singular_name":"Feature","fields":{"title":{"type":"text","class":"large"},"slug":{"type":"slug","uses":["title"]},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"]},"text":{"type":"html","height":"300px"}},"record_template":"newsitem.twig","listing_template":"features.twig","sort":"title","taxonomy":["chapters"],"recordsperpage":100,"slug":"features","singular_slug":"feature","show_on_dashboard":true,"default_status":"draft"},"homepage":{"name":"Homepage","singular_name":"Home","fields":{"title":{"type":"text","class":"large"},"slug":{"type":"slug","uses":["title"]},"subtitle":{"label":"Ondertitel","type":"text","class":"wide"},"block1":{"type":"html","height":"150px"},"block2":{"type":"html","height":"150px"},"block3":{"type":"html","height":"150px"}},"template":"index.twig","slug":"homepage","singular_slug":"home","show_on_dashboard":true,"sort":"","default_status":"draft"},"pages":{"name":"Pages","singular_name":"Page","fields":{"title":{"type":"text","class":"large"},"slug":{"type":"slug","uses":["title"]},"subtitle":{"type":"text"},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"]},"body":{"type":"html","height":"300px"},"template":{"label":"Choose a template..","type":"templateselect","filter":"*.twig"}},"template":"page.twig","sort":"title","recordsperpage":100,"slug":"pages","singular_slug":"page","show_on_dashboard":true,"default_status":"draft"},"showcases":{"name":"Showcases","singular_name":"showcaseitem","fields":{"title":{"type":"text","class":"large"},"slug":{"type":"slug","uses":["title"]},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"]},"sitelink":{"type":"text","class":"large"}},"record_template":"newsitem.twig","listing_template":"showcase.twig","slug":"showcases","singular_slug":"showcaseitem","show_on_dashboard":true,"sort":"","default_status":"draft"}},"version":"1.6.0 pl2"}