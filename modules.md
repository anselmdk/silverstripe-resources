# Interesting Modules

This is a curated list of interesting SS3 modules. I'll try my best to keep it up to date. If you have anything to add or change, please do so by submitting a ticket or a pull request.



## Frontend

| Module | Notes |
|:---|:---|
| [Blog](https://github.com/silverstripe/silverstripe-blog) | The blog module allows you to post blogs on your SilverStripe. | 
| [Userforms](https://github.com/silverstripe/silverstripe-userforms) | UserForms enables CMS users to create dynamic forms via a drag and drop interface and without getting involved in any PHP code. |
| [Forum](https://github.com/silverstripe/silverstripe-forum) | Forum module for SilverStripe CMS  |
| Galleries | [Foldergallery module for SS3](https://github.com/cwsoft/silverstripe-cwsoft-foldergallery), Frank Mullenger's [Simple Gallery](https://github.com/frankmullenger/silverstripe-simplegallery), [DisplayAnything3](https://github.com/codem/DisplayAnything3)  |
| [Dataobject as Pages](https://github.com/dospuntocero/DOArticles) | This is a simple module for adding dataobject as pages functionality on silverstripe 3, can be used for news, products or anything you can think of that doesnt need to appear in the sitetree. |
| [Slideshow](https://github.com/dospuntocero/Slideshow) | Slideshow module for ss3 based on jQuery Cycle plugin. |
| [Dashboard](https://github.com/unclecheese/silverstripe-dashboard) | The Dashbaord module provides a splash page for the CMS in SilverStripe 3 with configurable widgets that display relevant information. |
| [Event Calendar](https://github.com/unclecheese/EventCalendar) | |
| [Polls](https://github.com/mateusz/silverstripe-polls) | |
| [iFrame](https://github.com/silverstripe-labs/silverstripe-iframe) | Add an iFrame pagetype to SilverStripe, to show content from another website |
| [Memberprofiles](https://github.com/ajshort/silverstripe-memberprofiles) | A module to allow the creation of registration and profile management pages with custom fields and validation. |
| [News](https://github.com/nyeholt/silverstripe-news) | A basic news article module, including page types and functionality common to a news archive  |
| [News](https://github.com/Firesphere/silverstripe-newsmodule) | A basic news article module that doesn't use the SiteTree to prevent clutter  |
| [Contact Form](https://github.com/bluehousegroup/silverstripe-contact-form) | By Uncle Cheese/Bluehouse Group |


## Third Party Integrations

| Module | Notes |
|:---|:---|
| [Disqus](https://github.com/silverstripesk/silverstripe-disqus) | |




## Backend

### GridField


| Module | Notes |
|:---|:---|
| [GridFieldRelationHandler](https://github.com/simonwelsh/silverstripe-GridFieldRelationHandler) | This module provides two GridField components that aid in managing relationships within SilverStripe. |
| [GridFieldBulkEditingTools](https://github.com/colymba/GridFieldBulkEditingTools) | SilverStripe 3 GridField component set to facilitate bulk image upload, bulk record editing, unlinking and deleting. |
| [SortableGridField](https://github.com/UndefinedOffset/SortableGridField) | Adds drag and drop functionality to SilverStripe 3's GridField |
| [Blog-extension](https://github.com/tylerkidd/silverstripe-blog-extension) by Tyler | This "module" just extends the blog module and decorates the BlogEntry and BlogHolder models to allow managing your blog with the GridField instead of pages - even though they're still pages. |
| [GridfieldAjaxRefresh](https://github.com/silverstripe-labs/silverstripe-gridfieldajaxrefresh) | Adds the ability to either automatically or manually refresh a SilverStripe GridField |
| [GridfieldExtensions](https://github.com/ajshort/silverstripe-gridfieldextensions) | 2 components: `GridFieldAddExistingSearchButton` - a more advanced search form for adding items & `GridFieldOrderableRows` - drag and drop re-ordering of rows. |
| [GridfieldDetailFormAddNew](https://github.com/webbuilders-group/GridFieldDetailFormAddNew) | Gives CMS users the ability to add a new item directly from the GridField DetailForm |

### Other

| Module | Notes |
|:---|:---|
| [Newsletter](https://github.com/silverstripe-labs/silverstripe-newsletter) | See also [Newsletter Emogrify](https://packagist.org/packages/silverstripe/newsletter_emogrify), and [Newsletter, view archive](https://packagist.org/packages/silverstripe/newsletter_viewarchive)|
| [Largeblog](https://github.com/icecaster/silverstripe-largeblog) | Customised modeladmin interface for managing Blog Entries on large silverstripe sites |

## Core Functionality Extension


| Module | Notes |
|:---|:---|
| [Widgets](https://github.com/silverstripe/silverstripe-widgets) | Previously I've used other branches, but it seems, this one is the current now |
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


### Custom Fields

| Module | Notes |
|:---|:---|
| [Markdowneditorfield](https://github.com/wolfv/silverstripe-markdowneditorfield) | |
| [HTMLField](https://github.com/timonr/silverstripe-htmlfield-module) | A CodeMirror-powered HTML field |
| [Bootstrap Forms](https://github.com/unclecheese/silverstripe-bootstrap-forms) | Allows the creation of forms compatible with the Twitter Bootstrap CSS framework in SilverStripe |
| [Foundation Forms](https://github.com/ryanwachtl/silverstripe-foundation-forms) | SilverStripe 3 Forms Compatible with Zurb Foundation Framework |
| [MultiValueField](https://github.com/nyeholt/silverstripe-multivaluefield) | A fieldtype that makes it possible to store arrays of data (serialised) in the DB. Useful if you have many fields that you don't want to normalise out over many joins |
| [QuickAddNew](https://github.com/sheadawson/silverstripe-quickaddnew) | A decorator for a form field that manages as has_one relation, to allow adding a new object on the fly |
| [TimepickerField](https://github.com/sheadawson/silverstripe-timepickerfield) | A time picker field based on jQuery UI Timepicker |
| [Select2](https://github.com/sheadawson/silverstripe-select2) | Form field based on [select2](http://ivaynberg.github.com/select2/), which is an extension of the Chosen dropdown|
| [Tagfield](https://github.com/chillu/silverstripe-tagfield) | |
| [SortableFile](https://github.com/bummzack/sortablefile) | An extension that allows sorting of multiple attached images (extends UploadField) |
| [AutoCompleteField](https://github.com/tractorcow/silverstripe-autocomplete) | |

### Starter Themes

| Module | Notes |
|:---|:---|
| [Silverstripe Foundation](https://github.com/ryanwachtl/silverstripe-foundation) | A SilverStripe theme based on Foundation by Ryan Wachtl. I imageine this being good together with his [Foundation Forms](https://github.com/ryanwachtl/silverstripe-foundation-forms) module and his [Foundation Blog](https://github.com/ryanwachtl/silverstripe-foundation-blog) templates|



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


## Feeds
| Module | Notes |
|:---|:---|
| [Vimeo Service](https://github.com/anselmdk/Silverstripe-Vimeo-Service-module/commits/ss3) | |


## Social Media

| Module | Notes |
|:---|:---|
| [Facebook SDK](https://github.com/tractorcow/silverstripe-facebook-sdk) | Simple Silverstripe wrapper for the facebook PHP SDK |
| [Opengraph](https://github.com/tractorcow/silverstripe-opengraph) | Implementation of the Facebook Opengraph protocol for Silverstripe |
| [Twitter Feed](https://github.com/tylerkidd/silverstripe-twitter-feed) | |


## Utilities

| Module | Notes |
|:---|:---|
| [Silverstripe Tools](https://github.com/dimension27/silverstripe-tools) | Misc tools, including `BetterImage`, `FAQPage`, `StyledEmail` and `YoutubeShortCode` |
| [Serverstatus](https://github.com/amoebas/silverstripe-serverstatus) | |
| [Comments Notifications](https://github.com/tractorcow/silverstripe-comments-notifications) | Simple email notifications for comments posted against the Comments module |
| [Framework Test](https://github.com/silverstripe-labs/silverstripe-frameworktest) | Aids core and module developers in testing their code against a set of sample data and behaviour. |
| [Silverstripe Ipsum](https://github.com/sheadawson/silverstripe-ipsum) | A lorem ipsum text generator built on SilverStripe 3 |
| [Syncrotron](https://github.com/nyeholt/silverstripe-syncrotron) | A SilverStripe module for performing automated synchronisation of data between systems |


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





## Complete Systems (Sites/Webapps)

| Module | Notes |
|:---|:---|
| [SilverTicket](https://github.com/cam-findlay/silvertripe-silverticket) | |
| [SilverTwit](https://github.com/silverstripe-australia/silvertwit) | An entire project. Probably some good examples on a SS3 web app |
| [DMS](https://github.com/silverstripe-labs/silverstripe-dms) | Document Management System|
| [Silverstripe Express](https://packagist.org/packages/silverstripe/express) | |
| [Knowledgebase](https://github.com/tractorcow/silverstripe-knowledgebase) | Knowledge base module for silverstripe; Basic FAQ, categorisation, and article search (SS2.x) |


## Candidates for SS3 Upgrade

| Module | Notes |
|:---|:---|
| [Genericviews](https://github.com/chillu/silverstripe-genericviews) | Generic frontend 


