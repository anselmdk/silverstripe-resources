# Interesting Modules

This is a curated list of interesting SS3 modules. I'll try my best to keep it up to date. If you have anything to add or change, please do so by submitting a ticket or a pull request.


**NOTE:** <http://addons.silverstripe.org> has become the go-to place for searching for SilverStripe addons and themes. As it will develop, this list will become of less interest. Not all modules are on Packagist (and thus on <http://addons.silverstripe.org>) yet though, so it's recommendable to have a look at both, and also to do your own research.


## Frontend

| Module | Notes |
|:---|:---|
| [Blog](https://github.com/silverstripe/silverstripe-blog) | The blog module allows you to post blogs on your SilverStripe. | 
| [Userforms](https://github.com/silverstripe/silverstripe-userforms) | UserForms enables CMS users to create dynamic forms via a drag and drop interface and without getting involved in any PHP code. |
| [Forum](https://github.com/silverstripe/silverstripe-forum) | Forum module for SilverStripe CMS  |
| Galleries | [Foldergallery module for SS3](https://github.com/cwsoft/silverstripe-cwsoft-foldergallery), Frank Mullenger's [Simple Gallery](https://github.com/frankmullenger/silverstripe-simplegallery), [DisplayAnything3](https://github.com/codem/DisplayAnything3)  |
| [Dataobject as Pages](https://github.com/dospuntocero/DOArticles) | This is a simple module for adding dataobject as pages functionality on silverstripe 3, can be used for news, products or anything you can think of that doesnt need to appear in the sitetree. |
| [Slideshow](https://github.com/dospuntocero/Slideshow) | Slideshow module for ss3 based on jQuery Cycle plugin. |
| [Event Calendar](https://github.com/unclecheese/EventCalendar) | |
| [Polls](https://github.com/mateusz/silverstripe-polls) | |
| [iFrame](https://github.com/silverstripe-labs/silverstripe-iframe) | Add an iFrame pagetype to SilverStripe, to show content from another website |
| [Memberprofiles](https://github.com/ajshort/silverstripe-memberprofiles) | A module to allow the creation of registration and profile management pages with custom fields and validation. |
| [News](https://github.com/nyeholt/silverstripe-news) | A basic news article module, including page types and functionality common to a news archive  |
| [News](https://github.com/Firesphere/silverstripe-newsmodule) | A basic news article module that doesn't use the SiteTree to prevent clutter. Supports comments, tags and url-history.  |
| [Contact Form](https://github.com/bluehousegroup/silverstripe-contact-form) | By Uncle Cheese/Bluehouse Group |


## Third Party Integrations

| Module | Notes |
|:---|:---|
| [Disqus](https://github.com/silverstripesk/silverstripe-disqus) | |


## Backend


### CMS Customization

| Module | Notes |
|:---|:---|
| [Dashboard](https://github.com/unclecheese/silverstripe-dashboard) | The Dashbaord module provides a splash page for the CMS in SilverStripe 3 with configurable widgets that display relevant information. |
| [Widgets](https://github.com/silverstripe/silverstripe-widgets) | Previously I've used other branches, but it seems, this one is the current now |
| [Silverstripe Lite](https://github.com/dospuntocero/silverstripecms-lite) | simple CMS interface for final clients |
| [Menu Manager](https://github.com/heyday/silverstripe-menumanager) | The menu management module is for creating custom menu structures when the site tree hierarchy just won't do. |
| [Custom Menus](https://github.com/i-lateral/silverstripe-custommenus) | Adds the ability to create multiple menu's in the CMS and then render them using a custom control |
| [insideManual](https://github.com/knsqnt/SilverStripe_InsideManual) | Add a manual to your SilverStripe backend and assign pagetypes to your chapters, to make a help tab appear whenever someone works on this kind of pagetype |
| [usertemplates](https://github.com/nyeholt/silverstripe-usertemplates) | A SilverStripe module for creating templates within the CMS that can override those defined in the theme, for both Layout and main templates |

### GridField


| Module | Notes |
|:---|:---|
| [GridFieldRelationHandler](https://github.com/simonwelsh/silverstripe-GridFieldRelationHandler) | This module provides two GridField components that aid in managing relationships within SilverStripe, the `GridFieldHasOneRelationHandler` (provides radio buttons for selecting the object that the has_one points to) and the `GridFieldManyRelationHandler` (provides check boxes for selecting the objects that a has_many or many_many point to) |
| [GridFieldBulkEditingTools](https://github.com/colymba/GridFieldBulkEditingTools) | SilverStripe 3 GridField component set to facilitate bulk image upload, bulk record editing, unlinking and deleting. |
| [SortableGridField](https://github.com/UndefinedOffset/SortableGridField) | Adds drag and drop functionality to SilverStripe 3's GridField |
| [Blog-extension](https://github.com/tylerkidd/silverstripe-blog-extension) by Tyler | This "module" just extends the blog module and decorates the BlogEntry and BlogHolder models to allow managing your blog with the GridField instead of pages - even though they're still pages. |
| [GridfieldAjaxRefresh](https://github.com/silverstripe-labs/silverstripe-gridfieldajaxrefresh) | Adds the ability to either automatically or manually refresh a SilverStripe GridField |
| [GridfieldExtensions](https://github.com/ajshort/silverstripe-gridfieldextensions) | 3 components: `GridFieldAddExistingSearchButton` - a more advanced search form for adding items & `GridFieldOrderableRows` - drag and drop re-ordering of rows, `GridFieldAddNewMultiClass` - lets the user select from a list of classes to create a new record from |
| [GridfieldDetailFormAddNew](https://github.com/webbuilders-group/GridFieldDetailFormAddNew) | Gives CMS users the ability to add a new item directly from the GridField DetailForm |
| [GridfieldGalleryTheme](https://github.com/colymba/GridFieldGalleryTheme) | SS3 GridField component that attempt to change the GridField layout into an basic gallery view. (Still in dev) |
| [InlineGridField](https://github.com/stojg/inlinegridfield) | excel style gridfield |
| [BetterButtons](https://github.com/unclecheese/silverstripe-gridfield-betterbuttons) | |
| [Pickerfield](https://github.com/briceburg/silverstripe-pickerfield) | SilverStripe 3 GridField based management of has_one , has_many , and many_many relationship selection |


### Other

| Module | Notes |
|:---|:---|
| [Newsletter](https://github.com/silverstripe-labs/silverstripe-newsletter) | See also [Newsletter Emogrify](https://packagist.org/packages/silverstripe/newsletter_emogrify), and [Newsletter, view archive](https://packagist.org/packages/silverstripe/newsletter_viewarchive)|
| [Largeblog](https://github.com/icecaster/silverstripe-largeblog) | Customised modeladmin interface for managing Blog Entries on large silverstripe sites |

## Core Functionality Extension


| Module | Notes |
|:---|:---|
| ShortCodes | Don't forget these. See this [tutorial](http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/) (for SS 2.4), and this [module](https://github.com/cwsoft/silverstripe-cwsoft-shortcode) (a collection of ShortCodes for SS3). |
| [Sitemap](https://github.com/ajshort/silverstripe-sitemap) | Works with SS3 though the Readme says 2.x |
| [Google Sitemaps](https://github.com/silverstripe-labs/silverstripe-googlesitemaps) | |
| [Robots](https://github.com/tractorcow/silverstripe-robots) | Simple robots generation module |
| [Versioned Files](https://github.com/ajshort/silverstripe-versionedfiles) | A module to allow for the replacement and version management of asset files |
| REST | [Restfulserver](https://github.com/silverstripe/silverstripe-restfulserver) and [Restassured](https://github.com/silverstripe-labs/restassured) |
| [ExcludeChildren](https://github.com/micschk/silverstripe-excludechildren) | Exclude children of configurable classes from showing up in the sitetree |
| [VersionedGridfield](https://github.com/icecaster/silverstripe-versioned-gridfield) | This module provides a gridfield detail form, with the asscoiated actions required for managing versioned objects, eg SiteTree descendants. This comes in handy especially when using a modeladmin to manage parts of the sitetree. |
| [Datelink](https://github.com/tractorcow/silverstripe-datelink) | Allows you to add wordpress style year/month URLs to time-sensitive sections of your website |
| [Restricted Objects](https://github.com/nyeholt/silverstripe-restrictedobjects) | A SilverStripe module to lock down object access, for the CMS as well as non-page objects |
| [Usertemplates](https://github.com/nyeholt/silverstripe-usertemplates) | A SilverStripe module for creating templates within the CMS that can override those defined in the theme, for both Layout and main templates | 
| [Publishable Objects](https://github.com/nyeholt/silverstripe-publishableobjects) | A SilverStripe module for making arbitrary Data Objects publishable |
| [Auth External](https://github.com/hamishcampbell/silverstripe-auth-external) | This module enables you to use external authentication sources for password verification. At the moment this module has 4 drivers. LDAP, FTP, IMAP and HTTPBASIC. The IMAP driver also supports POP3. All drivers support SSL |
| [opauth](https://github.com/BetterBrief/silverstripe-opauth) | |
| [Optimistic Locking](https://github.com/svandragt/silverstripe-optimisticlocking) | Prevent overwriting data by blocking the save process when the data changed since retrieval (using a timestamp) |
| [Viewcounter](https://github.com/sheadawson/silverstripe-viewcounter) | Tracks views for any DataObject, can be used to show number of hits or calculate most popular content |
| Redirection of Legacy URLS | [old-urls](https://github.com/webtorque7/old-urls) or [linkmapping](https://github.com/ajshort/silverstripe-linkmapping) |



### Subsites

| Module | Notes |
|:---|:---|
| [Subsites](https://github.com/silverstripe/silverstripe-subsites) | The official subsites module |
| [Multisites](https://github.com/sheadawson/silverstripe-multisites) | Allows for multiple websites to be managed through a single site tree, an alternative module to the Subsites module. |


### Multi Language Sites

| Module | Notes |
|:---|:---|
| [Translateable](https://github.com/silverstripe/silverstripe-translatable) | |
| [Langbuilder](https://github.com/dospuntocero/langbuilder) | terminal lang builder for silverstripe3 that creates en.yml files|
| [TranslatableDataObject](https://github.com/unclecheese/TranslatableDataObject) | By Uncle Cheese | 
| [Translatable-dataobject](https://github.com/bummzack/translatable-dataobject) | By Bummzack |



### Form Extensions

| Module | Notes |
|:---|:---|
| [Bootstrap Forms](https://github.com/unclecheese/silverstripe-bootstrap-forms) | Allows the creation of forms compatible with the Twitter Bootstrap CSS framework in SilverStripe |
| [Foundation Forms](https://github.com/ryanwachtl/silverstripe-foundation-forms) | SilverStripe 3 Forms Compatible with Zurb Foundation Framework |
| [Requiredfieldscms](https://github.com/svandragt/silverstripe-requiredfieldscms) | This DataExtension reads the required fields for a DataObject and will add a 'required' class to these fields |
| [Hiddenfields](https://github.com/svandragt/silverstripe-hiddenfields) | Takes form fields you specified through $hidden_fields and hides them from the edit form |
| [Manymessage](https://github.com/svandragt/silverstripe-manymessage) | This DataExtension adds a notice to CMS form when relations are not available before the form is saved by the user |
| [Description](https://github.com/svandragt/silverstripe-description) | Autopopulate field descriptions to form fields |




### Custom Fields

| Module | Notes |
|:---|:---|
| [Markdowneditorfield](https://github.com/wolfv/silverstripe-markdowneditorfield) | |
| [Markdown](https://github.com/UndefinedOffset/silverstripe-markdown) | SilverStripe module that adds a field and a data type that allows for Markdown editing, uses the github api to render the html |
| [HTMLField](https://github.com/timonr/silverstripe-htmlfield-module) | A CodeMirror-powered HTML field |
| [MultiValueField](https://github.com/nyeholt/silverstripe-multivaluefield) | A fieldtype that makes it possible to store arrays of data (serialised) in the DB. Useful if you have many fields that you don't want to normalise out over many joins |
| [QuickAddNew](https://github.com/sheadawson/silverstripe-quickaddnew) | A decorator for a form field that manages as has_one relation, to allow adding a new object on the fly |
| [Select2](https://github.com/sheadawson/silverstripe-select2) | Form field based on [select2](http://ivaynberg.github.com/select2/), which is an extension of the Chosen dropdown|
| [Tagfield](https://github.com/chillu/silverstripe-tagfield) | |
| [SortableFile](https://github.com/bummzack/sortablefile) | An extension that allows sorting of multiple attached images (extends UploadField) |
| [AutoCompleteField](https://github.com/tractorcow/silverstripe-autocomplete) | |
| [SimpleTreeDropdownField](https://github.com/drzax/silverstripe-bits/tree/master/SimpleTreeDropdownField) | A simple, but flexible alternative for use where the TreeDropdownField isn't suitable. |
| [ZenautocompleteField](https://github.com/sheadawson/silverstripe-zenautocompletefield) | A basic autocomplete text field using jquery ui |
| [TimepickerField](https://github.com/sheadawson/silverstripe-timepickerfield) | A time picker field based on jQuery UI Timepicker By François Gélinas <http://fgelinas.com/code/timepicker/> |
| [Dynamiclists](https://github.com/sheadawson/silverstripe-dynamiclists) | User controlled data lists that can be used in form fields |
| [Colorpicker](https://github.com/tractorcow/silverstripe-colorpicker) | or by [UndefinedOffset](https://github.com/UndefinedOffset/silverstripe-colorpicker), or [mlewis-everley](https://github.com/mlewis-everley/silverstripe-colorpicker) |
| [Timezone Dropdownfield](https://github.com/silverstripe-labs/silverstripe-timedropdownfield) | |
| [Timezone Awareness](https://github.com/silverstripe-labs/silverstripe-timezoneawareness) | _ss2.x_|
| [i18enum](https://github.com/uniun/silverstripe-i18nenum) | Translatable Enum fieldtype |
| [htmlfield](https://github.com/ryanwachtl/silverstripe-htmlfield-module) | Provides a CodeMirror-powered field for pleasant editing of raw HTML code. |




### Spam Protection

| Module | Notes |
|:---|:---|
| [Spamprotection](https://github.com/silverstripe/silverstripe-spamprotection) | |
| [Recaptcha](https://github.com/chillu/silverstripe-recaptcha) | |




## Extensions

| Module | Notes |
|:---|:---|
| [Addressable](https://github.com/ajshort/silverstripe-addressable) | from AjShort, or Unce Cheese's [Mappable](https://github.com/unclecheese/Mappable) |


## Search

| Module | Notes |
|:---|:---|
| [FulltextSearch](http://www.silverstripe.org/fulltextsearch-module/) | _Not released yet - there is a description though_ |

## Images

| Module | Notes |
|:---|:---|
| [Retina Images](https://github.com/dospuntocero/RetinaImages) | |


## PDF Rendering


| Module | Notes |
|:---|:---|
| [wkhtmltopdf](https://github.com/heyday/silverstripe-wkhtmltopdf) | |
| [topdf](https://github.com/mparkhill/silverstripe-tcpdf) | |
| [dompdf](https://github.com/burnbright/silverstripe-dompdf) | |


## Feeds
| Module | Notes |
|:---|:---|
| [Vimeo Service](https://github.com/anselmdk/Silverstripe-Vimeo-Service-module/commits/ss3) | |


## Data Handling/Presentation


| Module | Notes |
|:---|:---|
| [DMS](https://github.com/silverstripe-labs/silverstripe-dms) | Document Management System|
| [registry](https://github.com/silverstripe-labs/silverstripe-registry/blob/master/docs/en/index.md) | This module allows a website user to search, find details for, and export search results for a particular type of data. One example this could be used for is a listing of staff members. 
| [sitemedia](https://github.com/briceburg/silverstripe-sitemedia) | Add and manage a common library of Media from your Pages and DataObjects |
| [Sections](https://github.com/NobrainerWeb/Silverstripe-Section-Module) | Split your page content into manageable blocks/sections of content, each with their own template |

## Social Media

| Module | Notes |
|:---|:---|
| [Facebook SDK](https://github.com/tractorcow/silverstripe-facebook-sdk) | Simple Silverstripe wrapper for the facebook PHP SDK |
| [Opengraph](https://github.com/tractorcow/silverstripe-opengraph) | Implementation of the Facebook Opengraph protocol for Silverstripe |
| [Twitter Feed](https://github.com/tylerkidd/silverstripe-twitter-feed) | |
| [Connect backend to Twitter](https://github.com/Firesphere/silverstripe-social) | This is not a full "user-connect" plugin. It just plugs into the backend to allow backend actions to be published to Social Media. Updates asap. |


## Utilities

| Module | Notes |
|:---|:---|
| [Silverstripe Tools](https://github.com/dimension27/silverstripe-tools) | Misc tools, including `BetterImage`, `FAQPage`, `StyledEmail` and `YoutubeShortCode` |
| [Serverstatus](https://github.com/amoebas/silverstripe-serverstatus) | |
| [Comments Notifications](https://github.com/tractorcow/silverstripe-comments-notifications) | Simple email notifications for comments posted against the Comments module |
| [Framework Test](https://github.com/silverstripe-labs/silverstripe-frameworktest) | Aids core and module developers in testing their code against a set of sample data and behaviour. |
| [Silverstripe Ipsum](https://github.com/sheadawson/silverstripe-ipsum) | A lorem ipsum text generator built on SilverStripe 3 |
| [Syncrotron](https://github.com/nyeholt/silverstripe-syncrotron) | A SilverStripe module for performing automated synchronisation of data between systems |
| [Subtypeable](https://github.com/drzax/silverstripe-bits/tree/master/Subtypeable) | A DataExtension which provides a get_class_dropdown method to DataObjects which can be used to display a list of possible object subtypes in the CMS. |
| [URLDataObject](https://github.com/drzax/silverstripe-bits/tree/master/URLDataObject) | A DataExtension which gives any DataObject a unique URLDataObject field similar to all descendents of SiteTree. |


## External data

| Module | Notes |
|:---|:---|
| [External Content](https://github.com/nyeholt/silverstripe-external-content) | The base external content module |
| [Static Site Connector](https://github.com/sminnee/silverstripe-staticsiteconnector) | Connector plugin for the SilverStripe External Content module that uses web scraping to import content. |



## Emailing

Silverstripe core mailing is a little clunky (see [ticket](http://open.silverstripe.org/ticket/3427))

| Module | Notes |
|:---|:---|
| [SMTP Mailer](https://github.com/xeraa/silverstripe-smtp) | |
| [Mailer](https://github.com/fullscreeninteractive/silverstripe-postmarkmailer) | for [Postmark](http://postmarkapp.com) |
| [Testmailer](https://github.com/sunnysideup/silverstripe-testmailer) | _(forked by me)_ |
| [Inline Styles Emailing](https://github.com/burnbright/silverstripe-inlinestylesemail) | |
| [Logging mailer](https://github.com/natmchugh/loggingmailer) | _(I might have some improvements for this from the PHH app)_ |
| [Pop3Message](https://github.com/titledk/silverstripe-snippets/blob/master/Pop3Message.php) | Class for retrieving emails from a pop3 server and storing them locally (including attachments) |
| [Email Helpers](https://github.com/markguinn/silverstripe-email-helpers) | Silverstripe extension containing SMTP mailer class and some other classes for HTML emails |







## Ecommerce

| Module | Notes |
|:---|:---|
| [Payment](https://github.com/silverstripe-labs/silverstripe-payment) | |



## Performance


| Module | Notes |
|:---|:---|
| [Dynamic Cache](https://github.com/tractorcow/silverstripe-dynamiccache) | Simple on the fly caching of dynamic content for Silverstripe |
| [staticpublishqueue](https://github.com/silverstripe-labs/silverstripe-staticpublishqueue) | This module allows you to build static HTML caches of every page (for increased security and performance) |
| [Xhprof](https://github.com/titledk/silverstripe-xhprof/) | A ui can be found on http://xhprof.io |


## Development Phase

| Module | Notes |
|:---|:---|
| [Securetest](https://github.com/tractorcow/silverstripe-securetest) | Ensures that non-live websites are only accessible with a valid user login  |





## Complete Systems (Sites/Webapps)

| Module | Notes |
|:---|:---|
| [SilverTicket](https://github.com/cam-findlay/silvertripe-silverticket) | |
| [SilverTwit](https://github.com/silverstripe-australia/silvertwit) | An entire project. Probably some good examples on a SS3 web app |
| [Silverstripe Express](https://packagist.org/packages/silverstripe/express) | |
| [Knowledgebase](https://github.com/tractorcow/silverstripe-knowledgebase) | Knowledge base module for silverstripe; Basic FAQ, categorisation, and article search (SS2.x) |
| [Silverstripe Ipsum](https://github.com/sheadawson/silverstripe-ipsum) | A lorem ipsum text generator built on SilverStripe 3 |


## Candidates for SS3 Upgrade

| Module | Notes |
|:---|:---|
| [Genericviews](https://github.com/chillu/silverstripe-genericviews) | Generic frontend 


