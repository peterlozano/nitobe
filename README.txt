-------------------------------------------------------------------------------
-- Nitobe for Drupal 6.
--
-- $Id: README.txt,v 1.1.2.4 2009/08/02 13:03:24 shannonlucas Exp $
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
-- Release notes.
-------------------------------------------------------------------------------
  A number of changes have been made that will have an impact on your site if 
you currently use Nitobe.

* Nitobe has been completely overhauled and a number of CSS classes have been
  changed or added. If you have sub-themed Nitobe, you will need to test this 
  release before deploying it to your live site. A number of fixes and 
  enhancements to the 960.gs grid system have been copied from Joon Park's
  NineSixty theme.

* Three-column layouts are now supported. When using two sidebars, they may be
  placed on either side of the content region, both to the right of the content
  region, or both to the left of the content region.

* The large block region below the content and sidebars is now four distinct
  regions.

* The theme is now a content-first theme. This means that, regardless of
  layout, the content region always appears first in the source file. This
  increases the accessibility of the pages to screen readers and is a search
  engine optimization.

* Headers are now more semantic. When viewing the front page, the site title is
  the H1 element, on a node page, the page title is the H1 element, and the
  site title is a SPAN element. All block headers are now H2 elements.

* Node tags and links are no longer re-processed by the theme. In prior
  releases, the theme regenerated the node taxonomy and node links. This caused
  problems with several add-on modules and was subject to a bug in Drupal's
  core Taxonomy system. The previous functionality, which placed commas between
  tags and vertical bars between links is now achieved by a regular expression
  on the pre-rendered $links and $terms variables.

* User pictures should now be compatible with modules that provide custom user
  pictures.

* Typography is now based on the typography used in the Blueprint CSS
  framework. This provides a better visual rhythm than the typography provided
  by the 960 Grid System.

* The site title effect which causes interword spacing to be removed and every
  other word to be an alternate color can now be turned off. This feature was
  present in an early version of Nitobe, but removed.

* The setting to allow the breadcrumb to be removed if it was a single item has
  been removed. If you need this functionality, consider using the Menu
  Breadcrumb module: http://drupal.org/project/menu_breadcrumb

* The list of header images is no longer cached unless caching is enabled in
  your site's performance section. In prior releases, this caused some
  confusion when users added header images as they would not appear for some
  time. If caching is disabled, the header image list will be reloaded each
  time a page is loaded.

* The ability to suppress the 'reply' link under each comment has been removed
  as this feature tended to cause problems.

* CSS support for the Book and Forum modules has been improved.

* The theme setting "Show date stamp" has been removed as this duplicated the
  functionality of the global "Display post information on" setting.

-------------------------------------------------------------------------------
-- General theme features.
-------------------------------------------------------------------------------
All default Drupal theme features are available. Nitobe also provides a default 
theme logo, default favicon, and a default user picture.

* Masthead images. A number of sample images are provided. These are 940 pixels 
  wide and 118 pixels high. Administrators may choose to display a random 
  header image or a specific fixed header image. The filename convention for
  these images is Image_Names.ext. When presented on the theme settings page,
  underscores in the filenames are replaced with spaces, and the extensions are
  not displayed. Images may be placed within subdirectories in headers 
  directory.

* Force masthead images. The masthead images appear in a region named masthead.
  By default, if there is any content placed in this region, the images are not
  displayed. The theme will force the display of the masthead images behind any
  content in that region if this option is enabled.

* Site title effect. By default, inter-word spacing is removed in the site 
  title, and every other word is given an alternate color. This effect can be 
  disabled in Nitobe's theme settings.

* Comments made by a node's author are provided distinct CSS classes in order 
  to clearly differentiate them from other comments.
  
* Strip "not verified". By default, Drupal adds " (not verified)" to the name 
  of a commenter who leaves a name but is not logged into the site. This can
  be turned off in Nitobe's theme settings. Comments by verified authors are 
  given a CSS class ("commenter-logged-in") indicating they are logged in
  regardless of this setting.

* The CSS class "original-author" is added to comments made by the node's
  original user.

* The default number of items in the pager control can be set form 3 to 10.
  Setting a small number here is useful when using a three column layout.


-------------------------------------------------------------------------------
-- Notes for translators.
-------------------------------------------------------------------------------
* In addition to the translatable text in the theme settings, several other 
  strings are available for translation including date formats, taxonomy term 
  separators, and node link separators. Formats are provided for translation so 
  that a locale-specific format can be provided, if desired.

* Input and suggestions on how best to support right-to-left (RTL) languages
  are welcome.
