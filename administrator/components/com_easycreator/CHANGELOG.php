<?php
// @codingStandardsIgnoreStart
/**
 * CHANGELOG.---
 *
 * This is the changelog for EasyCreator.<br>
 * <b>Please</b> be patient =;)
 *
 * @package    EasyCreator
 * @subpackage Documentation
 * @author     Nikolai Plath
 * @author     Created on 03-Mar-2008
 * @license    GNU/GPL, see JROOT/LICENSE.php
 */

//-- No direct access to this changelog...
defined('_JEXEC') || die('=;)');

//-- For phpDocumentor documentation we need to construct a function =;)
/**
 * CHANGELOG.
 * {@source}
 */
function CHANGELOG()
{
/*
<description>
EasyCreator is a developer tool.
It tries to speed up the developing process of custom components, modules, plugin and templates.
You can create a 'frame' for your extension and an installable zip package with just a few 'clicks'.

<b>From version 0.0.14 onwards the g11n language library is required for foreign (non English) languages !</b>
</description>
_______________________________________________
_______________________________________________

This is the changelog for EasyCreator

Please be patient =;)
_______________________________________________
_______________________________________________

Legend:

 * -> Security Fix
 # -> Bug Fix
 + -> Addition
 ^ -> Change
 - -> Removed
 ! -> Note
______________________________________________

---------- 0.0.16 ----------

2012-04-06
47d30f6 Add a method to verify removed files on extension upgrade (EasyCreator only (for now..))
ad3d03e Change return falses to exceptions
c909e79 Fix wrong link to J API in JHelp
8b9a9a1 Update changelog
649168d Modify old changelog

2012-03-29
0ab5175 Fix edit link not working from list layout in extension template component mvc_9_16

2012-03-28
5094206 Format and docblocks
a577bd9 Format and docblocks
c818d63 Add option to generate xml files for extension database installation

2012-03-22
75f124e Update language files
bb1a0d5 Fix set packing formats from component defaults for new projects

2012-03-21
44fd27f Update changelog
b336e4d Fix insert parts not working due to recent class rename
18711b7 Enhance the CLI builder

2012-03-18
d773ede Fix wrong info links

2012-03-17
39c9cb8 Change the bug tracker link to github

2012-03-16
8e14976 Fix can not create any project in J 1.5
e0d0f1d Add a PHPStorm logo
29110ca Update language files
10aea3f Change: Translations of extension template types are now done in the specific adapters

2012-03-14
956b536 Update changelog
81baa55 Add new selenium tests
fb9add7 Rename and move database helpers
b8add90 Add a replacement class for extension templates for easier access
edd8443 Fix wrong class name EcrTemplateInfo => EcrProjectTemplateInfo
eb53035 Rename and move project related classes

2012-03-13
a32e593 Rename the project base class
0aa3339 Move and rename project base class and types classes
590d01a Formatting and Docblocks
04e707d Fix: can not completely remove CLIApps and WebApps
c58a5f5 Add additional explanatory notes to extension templates
ae8dbae Add additional explanatory notes to extension templates

2012-03-10
11f088a Add new extension templates for CLI- and Webapplications from joomla-platform-examples
e8b4988 Update changelog
e7c6c3c Modify changelogger to include the abbreviated commit hash for every commit

2012-03-09
d95466b Add a script to extract translators names from language files to include them in the credits
3668325 Modify the credits file to include new translators from opentranslators/transifex

2012-03-08
873233c Code style
442a31e Add support for project specific package file names

2012-03-07
fee7091 Modify credits for JApplication extension templates
d10d7fd Code formatting
cfde6d4 Fix JCompat not working for J 2.5 when packing
c165ebe Change: Compression format for new and registered projects is now taken from default
d99a1b1 Change: JCompat is set to the version of the actual running Joomla! instance
3d4dad5 Hide some experimental code
a821ac0 Correct a language string
48b31d6 Remove obsolete code
b5c37d7 Fix js and config language file creation for non ini language files
4c3ec71 Update language templates
32676dc Update language templates

2012-03-06
9551b98 Language update Thanks to: ar-AR: ahmadalfy, AminosAmigos da-DK: Brian Rønnow de-DE: Michael es-ES: javier Fernández Llata fr-FR: Marcos Peebles hu-HU: Sándor Balikó id-ID: uring nl-NL: Steven Zeegers pl-PL: Begina Felicysym pt-BR: Manoel Silva sv-SE: Joel Hansen, linus.pettersson, Tess Neale
4a2f56b Add a new icon for JApplications

2012-03-05
c7ff402 Code style and docblocks
0bc198c Fix CLI app and runner
cb98d0e Add a new extension type: Web Application

2012-03-04
23616cb Update .gitignore
c02423d Update DTD links

2012-03-03
be960ce Update changelog

---------- 0.0.15.4 ----------

2012-03-03
e0e2d6c Bump version 0.0.15.4
ef75349 Fix Code style
1146947 Fix fatal error on creating packages - Thanks Douglas Machado

2012-02-26
d47fbf2 Update .gitignore
45e11cb Add a CLI runner
86abe99 Add a new project type: CLI Application

2012-02-25
96fd723 Refactored css ;)
6dd0f28 Refactored css ;)
40da989 Modify .gitignore
b470a78 Merge remote branch 'origin/master'
a50cea7 Formatting
e233740 Cleanup javascript dbtables
5513526 Merge pull request #4 from klauswilms/master
1fa44f9 Klaus Wilms: correcting php short tags

2012-02-24
147485d Fix the changelogger to include fellow contributers names - Thanks in advance :)
a93b605 Language manager fix for J! 2.5
407997c Update manifest
985dfa5 Modify db designer in extension startup

2012-02-23
28f51bd Merge pull request #3 from klauswilms/master

2012-02-22
fec37ea Klaus Wilms: I made some corrections in the php tags. you wrote <?=, but I think its asp? so i changed it to <?php. After the opening php tag I missed the echo command, and at the end before closing tag I missed the semicolon. I test it on a local installation, and it works fine for me.

2012-02-20
2fdd21b Update changelog

---------- 0.0.15.3 ----------

2012-02-20
58e442e Bump version 0.0.15.3
a961a91 Fix a fatal error when the g11n class is not available on project with non ini language files
e878298 Fix completely fail in J! 1.5 due to clashing spl_autoloader and J's old __autioload() method - Thanks deck1187hw and suhreed

2012-02-14
3fb892a Add magic properties to docblocks

2012-02-13
d3c6a01 Update changelog

---------- 0.0.15.2 ----------

2012-02-13
73d7640 Bump version 0.0.15.2
deedb93 Missing file stubs
2d764e1 Support for multiple sub bar tasks (ecr)
e0ed1f5 Remove JsonResponse class
a74e6d5 Fix data designer table columns in J 2.5.1
9d3387c Remove g11n task (for now)
df43c04 Remove custom coding standards (for now)
c44807f Fix debugger class name
c4eddad Revising docblocks in all template parts
593a446 Fix missing fields in simple model template
4d0449e Change project link in footer from joomlacode to github

2012-02-12
75b3f17 Correct some bad links, switch vcs link to github
880c48d Refactor EasyTemplateInfo => EcrTemplateinfo
976ebb0 Fix header path when inserting new parts
0c098e0 Fix a typo in function name
b2752b4 Add missing dependency to JUri to the cli builder script ( :( )

2012-02-04
7364f04 Update changelog
5b225c1 Formatting
26eba29 Bump version to 0.0.15.1
70e6226 Add a CLI builder script
49ede99 Add cli output to the logger
5a9aac9 Add EcrZiperException
9b7a4cd Refactor the Ziper

2012-02-03
673608e Add a missing <p>

---------- 0.0.15.1 ----------

2012-02-03
128db38 Fix a fatal startup error in PHP 5.2 - please update to PHP 5.3 =;)
b54a12c Add a tiny changelog generator
891e01b Update changelog

---------- 0.0.15 ----------

2012-02-03
d5c2e17 Formatting

2012-02-02
e95e95c Icon name changes and format
6b1f2f7 Add mod_version to known J 2.5 core projects
b842eea Fix a nasty bug that prevents the stuffer form from saving added menu items and update servers correctly, formatting

2012-01-30
aaf19a3 Code style

2012-01-29
946262f Fix admin list views in J! 2.5
7d64e98 Code style - Fix single line comments
02f5767 Formatting
4831225 Fix another 2.5 option
f25baa5 Refactor EcrBuilder

2012-01-25
79646c2 Changes JVersion for extension templates from 1.7 to 2.5 ;)
1f5ba79 Fix Missing function parameters in extending classes

2012-01-19
1410a5c Fix g11n language loading in frontend sandbox - Thanks Troy
86192e8 dummy2
7d89503 dummy
6931c78 Simplify Projecthelper - a bit
5e0b379 Fix Projecthelper

---------- 0.0.14.4 ----------

2012-01-19
308fb34 Rename Pear tar and zip and the php_file_tree class
f7a9840 Rename EasyPearHelper(s) => EcrPearHelper(s)
713da99 Rename dbUpdater => EcrDbUpdater
842f1c0 Rename EasyProjectMatrix => EcrProjectMatrix
3ac7e4a Rename EcrLanguageConverter and Ecrg11nHelper
ca01f75 Fix wrong extension in ecrStylesheet()
886faed Simplified acrStylesheet() and ecrScript() calls
a430195 Add suport for multiple style sheets in ecrStylesheet()
6733fc5 Rename EasyLanguage => EcrLanguage
43c641f Adapt the JMethodLister to J! 2.5 (phew....)
ce9cd5c Modify (C) date
381d2bd Remove missing from Renames
986a8ea Rename EasyPart => EcrProjectPart
fa4faea Rename EasyAutoCode => EcrAutoCode
6d291a2 Rename EasyXMLElement => EcrXMLElement
93485d0 Formatting
60d1898 Rename EasyTable => EcrTable including other table related classes
4435931 Rename EasyProfiler => EcrProfiler
94f2455 Leftover from EcrProject refactoring
948d665 Rename JoomlaManifest => EcrManifest
b9012f0 Rename EasyTemplateHelper => EcrTemplateHelper
c228072 Rename EasyFile => EcrFile
00cbea4 Add support for a new version replacement in filename creation -> VCSREV

2012-01-17
6210808 Add support for mutpile file header types
0d00f89 Move install.sql files to a mysql subfolder
1c9362d Change comments in language files
093becd Move header template files

2012-01-16
9daa17e Rename EasyLogger => EcrLogger
170f3ae Rename EasyProject => EcrProject as well as extending classes
ad55f5c Rename EasyReflection => EcrReflection
7cca07e Add J! 1.5 deprecation notes
6054be3 Rename EasyLanguageHelper => EcrLanguageHelper
349c5e0 Rename EasyProjectHelper => EcrProjectHelper
a4d77d2 Update xml
bd1b47e Modify readme
d5ecd8f Modify readme

---------- 0.0.14.3.3 ----------

2012-01-15
a5fb0e0 Formatting
66df249 Formatting

---------- 0.0.14.3.2 ----------

2012-01-15
0fffa50 Refactor Joomla! manifest class
9679525 Fix git version info
6d6f11d Rename classes EasyBuilder => EcrBuilder, EasyArchive => EcrArchive, EasyCreatorHelper => EcrHelper
74bb1fb Fix frontend g11n call to removed function
a8fb0ec Fix wrong paths in frontend sandbox
4a8403b Modify .gitignore
7d2d1ea Fix autoloader
faab1d3 Renaming SQL package to sql
d9a2b26 Renaming classes for auto_loading

2012-01-14
6579e33 Add SQL dropTable format
8509093 Update DTD location in manifest.xml(s)
b6e238e Add support for multiple database types
a2e3cb9 Add git version information to footer
ea72b8e Fix Can not save project config **sometimes**
2f4704c Add SQL formatters for MySQL, Postgre and SQLite
5a73ba7 Fix MysqlExporter
e78b87b Add pre-commit hook script for reference
6e3ac65 Add  .git/hooks/pre-commit generated version information to the footer
52095a6 Add db icon
d85788f Add SQL formatters

---------- 0.0.14.3.1 ----------

2012-01-09
c51359c Remove obsolete files
7514d9d Remove obsolete documentation
0581cd7 Add missing J! 2.5 fixes

2012-01-08
efcc724 Fix another JParameter usage
08b6509 Fix template component 9_16, cleanup queries, removed JParameter

2012-01-07
e08d96e Code style
b55b772 Code style
2a18983 Remove deprecated JError - part 4
3353895 Remove deprecated JError - part 3
de6bfc4 Remove deprecated JError - part 2
617c537 Remove bad link :(
1f63def Remove bad link :(
be42af7 Remove deprecated JError - 1st part
abd9799 More J! 2.5 work
20ba497 Code style
21125f7 Removing obsolete svn ids
f8010c4 Prepare for J! 2.5
e874ad5 Merge remote branch 'elkuku/master'

2011-10-29
df75cc8 elkuku: First check if the g11n language library is installed as a PEAR package
b1f08b3 elkuku: Switched template compat versions from 1.6 to 1.7

2011-10-21
7661c8e Add link to ghpage
c251f68 Add Ohloh stats

2011-10-20
40e1d6c Add Transifex stats

2011-10-18
13ef33e elkuku: Add code preview to code sniffer

2011-10-10
40bcb04 elkuku: Remove Joomla coding standard

2011-10-03
c02ca3a elkuku: Update language zh-CN
36d1dc7 elkuku: Update language template headers
be42131 elkuku: Add Transifex config file
75d907d elkuku: Update language fr-FR
87ade4b elkuku: Update language nl-NL
679b461 elkuku: Add language pt-BR
354d768 elkuku: Update language pl-PL
ea0a544 elkuku: Update language zh-CN
83d09b0 elkuku: Add language id-ID
0984b7f elkuku: Add language hu-HU
ad4de11 elkuku: Add language da-DK
eb2fb8f elkuku: Add language ar-AR
816eabb elkuku: Update language es-ES
33af3c1 elkuku: Add language sv-SE
02117cb elkuku: Garbage in language template :P
aa5f61c elkuku: Update language

2011-09-30
ed0579c elkuku: Add experimental ant script

2011-09-26
4e94777 elkuku: Fix package names must be lower case

2011-09-18
e0d447c elkuku: Fix g11n loading plugins and templates
7fb58c9 elkuku: Modify icon
21f8003 elkuku: Add nl-NL and sv-SE language - Thx Transifex =;)
c9d4262 elkuku: Fix g11n lookup for templates and plugins

2011-08-28
471cd81 elkuku: preference of JPATH_PLATFORM over JPATH_LIBRARIES

2011-08-24
49ea421 elkuku: Fixed "add elements" not working on Windows in J! 1.7 - Thanks Apfelkuchen
684ad96 elkuku: +icons
52fe266 elkuku: icons

2011-08-19
74b4c2d elkuku: test

2011-08-15
652fd34 elkuku: Added automatic language file handling for po files using gettext utilities

2011-08-12
73f7adb elkuku: Added interface for PHPLOC
d26f122 elkuku: formatting

2011-08-11
62daddf elkuku: moved defines and functions to includes folder

2011-08-08
7450f92 elkuku: new zipper view, work on db updates

2011-08-07
8ecc008 elkuku: removed jquery libs

2011-08-06
4c1fab8 elkuku: strict standards

2011-08-05
ea15491 elkuku: + readme for github
469cf21 elkuku: + pagoda box file
1a099ce elkuku: more eye candy
aa3e19a elkuku: # errors on compressed md5 file

2011-08-04
10ba8d3 elkuku: code style
6c51f1a elkuku: adapting to JForm

2011-08-03
3354421 elkuku:  ^ Config now uses JForm

--------------- 0.0.14.3 BETA -- [29-Jun-2011] ---------------------
Download: http://joomlacode.org/gf/project/elkuku/frs/?action=FrsReleaseView&release_id=15410

27-Jul-2011
 # Fixed a whole lot of path errors on windows in J! 1.7 - Thanks Rita & Krishna

22-Jul-2011
 + 1.6+ Define updateserver(s) for projects
 + Generate SQL install / uninstall files
 + Generate update SQL files for previous versions

08-Jul-2011
 + Added posibility to specify a custom output directory for created zip packages

08-Jul-2011
 # Fixed setting method="upgrade" not read from install.xml - Thanks Kharlanki
 # Fixed Can not delete admin submenu entries in J! 1.5 - Thanks Kharlanki
 # Fixed notices in packager when projects CHANGELOG is not under svn version control - Thanks Kharlanki

02-Jul-2011
 + Added PEARs SQL parser class
 ^ Today I learned about css border-radius... can you see it ? =;)

22-Jun-2011
 + Small optional compression on md5 checksum files

--------------- 0.0.14.2 BETA -- [22-Jun-2011] ---------------------
Download: http://joomlacode.org/gf/project/elkuku/frs/?action=FrsReleaseView&release_id=15067

22-Jun-2011
 # Fixed errors on creating extensions type "package" for J! 1.6 - Thanks Greg Keys

--------------- 0.0.14.1 BETA -- [12-Jun-2011] ---------------------
Download: http://joomlacode.org/gf/project/elkuku/frs/?action=FrsReleaseView&release_id=15022

12-Jun-2011
 ^ Mootools fixes Fx.Style => Fx.Tween
 ^ Changed DTD location to joomlacode.org
 - Mootools fixes Json.evaluate => JSON.decode
 - Removed Mootools compat
 + Header templates for css and js files - Thanks 7list
 + JVersion selector in wizard step 1

08-Jun-2011
 + More modifications for J! 1.7
 + Templates for 1.6 plugins Editor, Extension and Search
 + Templates for 1.6 modules front- and backend
 - Removed qTabs

07-Jun-2011
 + Added modifications for J! 1.7
 # Fixed a fatal error on PHP 5.3 - "Serialization of EasyXMLElement is not allowed" - Thanks Joni

29-May-2011
 # Fixed Code editor does not display ini files - Thanks 7list
 # Fixed can not uninstall template projects - Thanks 7list

24-May-2011
 # Fixed media folders in manifest.xml

21-May-2011
 ^ Created a g11n dummy to make the g11n library optional - if not installed, only english language will be available
 # fixed parameters in J 1.6

18-May-2011
 # Fixed admin menus in J! 1.6
 + Drag & Drop in admin menu manager (J >= 1.6 only)

--------------- 0.0.14 BETA -- [12-May-2011] ---------------------
Download: http://joomlacode.org/gf/project/elkuku/frs/?action=FrsReleaseView&release_id=14856

10-May-2011
 - Removed MooTools compat for Ajax
 + New example plugins for J! 1.6

03-May-2011
 + Added AutoCodes for 1.6 select queries and xml forms
 # Fixed some uninstaller issues

01-Jan-2011
 ! EasyCreator now uses the g11n language library

11-Dec-2010
 # Fiexed various errors when registering and building libraries
 # Fixed incorrect extension name in admin menu when registering components in J! SVN > 18779

25-Oct-2010
 ^ Upgrade HighCharts to version 2.0.5

07-Oct-2010
 + Drag & Drop ordering for 1.6 packages

07-Sep-2010
 # Fixed spaces in language files causes errors

07-Sep-2010
 + Added access keys in translation interface - e.g.: 'g' + 's' = 'Google translate' + 'Save'

05-Sep-2010
 + Support for translations of Joomla.JText javascript strings in translation manager

05-Sep-2010
 + Implemented J! 1.6's Joomla.JText Javascript translation with compat for J! 1.5 and a special loader =;)

01-Sep-2010
 + Option to set a default font size for Editarea code editor

20-Aug-2010
 + 1.6 Support for script.php files for the J! installer
 + 1.6 Support for multiple language file locations preferencing the extension directory
 # Fixed translation interface in 1.6

03-Aug-2010
 # Fixed plugins in 1.6
 # Fixed unwanted Thumbs.db files on windows systems

17-Jul-2010
 # Fixed Failed to include EasyCreator project file for projects other than component

06-Jun-2010
 # Fixed can not register plugins with the same name but different groups - Thanks kenmcd
 + Added DTDs for project xml and startup xml at http://xml.der-beta-server.de/dtd/easycreator/0.0.14/

--------------- 0.0.13 BETA -- [04-Jun-2010] ---------------------
Download: http://joomlacode.org/gf/project/elkuku/frs/?action=FrsReleaseView&release_id=13122

31-May-2010
 + Added extension type 'Joomla! 1.6 package'

28-May-2010
 + Added Selenium test runner to CodeEyes

14-May-2010
 + Added qtabs for slicker project display

14-May-2010
 + Added first component template for J! 1.6 - mvc_9_16
 + Support for J! 1.6 media tag
 + Support for J! 1.6 update.sql files
 + Added extension type 'Joomla! 1.6 library'

07-May-2010
 # Fixed [#20347] Error saving translations containing an ampersand (&) - Thanks Santiago Galindo

28-Apr-2010
 + Added krumo for internal debugging

24-Apr-2010
 + Language converter for INI and PHP files J! 1.5 => 1.6

21-Apr-2010
 # Fixed module and plugin parameters and languages missing in packages

10-Apr-2010
 + Added pchart for statistics

08-Apr-2010
 # Fixed broken Plugin parameters
 # Fixed broken Plugin translations
 ^ Updated DTD location to http://joomla.org/xml/dtd/1.5
 + Project specific settings for creating packages

04-Apr-2010
 # Fixed broken XML file translations

02-Apr-2010 Martin Riethmayer
 # authorEmail and authorUrl are case-sensitive in the install manifest, correcting from all small case.

27-Mar-2010
 + Added highcharts.js from www.highcharts.com
 + Refactored the statistics and added some charts
 + Added code to comment ratio calculation to statistics

25-Mar-2010
 + EasyCreator now checks a md5 file on his installation
 + Added md5 checksum routine to component extension templates

24-Mar-2010
 # Fixed [#20003] Module and Plugin translation broken - Thanks Santiago Galindo.

21-Mar-2010
 + Option to specify a custom list postfix in creation wizard
 ^ Changed hardcoded list postfix 's' to a custom one in all suitable ExtensionTemplates

20-Mar-2010
 # Fixed broken "Project Info" - Thanks Michael (Mitomedia)

18-Mar-2010
 + Alpha status for EasyAutoCode
 + Custom table fields and AutoCodes in ExtensionTemplate mvc_5 and mvc_9
 ^ Build packages are now located in folder 'builds'
 ^ Moved folders 'logs' and 'scripts' to extension root

03-Mar-2010
 + Option to create a md5 checksum file for packages

26-Feb-2010
 # Fixed broken translation engine - modal js missing

--------------- 0.0.12.1 BETA -- [22-Feb-2010] ---------------------

19-Feb-2010
 + Admin submenu ordering

12-Feb-2010
 # Fixed manifest XML not validating against J!'s DTD
 + Option to deactivate UTF8 and BOM checking for language files - subtile error..

10-Feb-2010
 # Fixed error on saving plugin configuration
 # Fixed [#19768] error on creating zip packages - windows only
 # Fixed error on deleting package files - windows only
 + Config option to specify the location of a local J! API copy - for J! Help

12-Jan-2010
 ^ PHP install files are placed in a separate 'install' directory when packing the extension

12-Jan-2010
 # Fixed error when packing a site module - Thanks MartinR (ripper17)
 # Fixed Opera bug: Registering projects not working properly - Thanks Martin (ripper17)
 + Parameters from config.xml and manifest.xml will be added to install manifest on packing - Thanks Martin (ripper17)

--------------- 0.0.12 BETA -- [02-Jan-2010] ---------------------

01-Jan-2010
 + Added Extension template type 'template' named 'Blueprint'
 - Removed Extension templates 'Beez Copy' and 'MilkyWay Copy'
 - Removed old help screens - added link to documentation wiki

30-Dec-2009
 ^ Optimized Install file detection

22-Nov-2009
 ^ Refactored all extension templates. Using XML files now
 ^ EasyCreator project file is in XML format now
 + Option to include EasyCreator project file in final package
 + Creating skeleton UnitTest classes for project classes

20-Oct-2009
 + Added profiler for J! 1.6
 + Added Mootools compat 1.1 => 1.2 - Json (sry: JSON...)

18-Oct-2009
 + Added PEAR and PEAR::Archive_Tar as they will be removed in J! 1.6

15-Oct-2009
 + Added Language file 'overview' in Language Manager
 - Removed language creation from startup Wizard
 - Removed language creation from extension Setup
 ^ Changed EasyCreator Config from lightbox to a 'normal' view

06-Oct-2009
 + Joomla! doctype DTD will be added to manifest

05-Oct-2009
 + Introducing EasyCodeEye
 + Added Interface to PEAR::phpcpd - PHP Copy & Paste Detector
 + Added Interface to PEAR::phpDocumentor
 + Added Interface to PEAR::phpUnit

28-Sep-2009
 ^ Refactored manifest class to use PHPs SimpleXML
 ^ Refactored Toolbars to be tableless
 + Added Mootools compat 1.1 => 1.2 - Ajax
 ! We should now run on Joomla! 1.6 (tested on alpha2) =;)

21-Sep-2009
 + Option to place empty index.html in every directory on building the project
 ^ Package install file placed in subfolder /install
 # Fixed [#18718] code deleted on saving when an ampersand (&) is found

23-Aug-2009
 + Added an interface to PEAR::CodeSniffer
 + Added the first Joomla! coding standards to be used with CodeSniffer - WIP

--------------- 0.0.11 BETA -- [22-Aug-2009] ---------------------

17-Aug-2009
 + Added option to include 'method=upgrade' in install XML - this should be improved in J! 1.6
 + Added Easy Tooltips

11-Aug-2009
 + ohloh button - please use it =;)

09-Aug-2009
 + Added Joomla! Framework search engine

12-Jul-2009
 + Highlighting php code in log files
 ^ Changed TreeIt class to php_file_tree function (see: credits)

11-Jul-2009
 + Added template using J! categories
 ! Enabled EditArea Autocomplete (experimental!)
 ! Changed EditArea reg_syntax/php.js file - added Joomla! classes and methods

21-Jun-2009
 # Fixed not correctly handling plugin language files

16-Jun-2009
 + Custom file names for package files

12-May-2009
 + Context menu with file/folder operations for 'Template' section
 ^ tweaked EditArea to dynamically change the syntax also for ini files

12-May-2009
 + Ajax loading file contents from file tree for editing
 + Simple context menu for file tree - (new, rename, delete..)

--------------- 0.0.10 BETA -- [12-May-2009] ---------------------

12-May-2009
 ^ Moved Archive to Packer view

10-May-2009
 + Custom options for extension templates
 + Plugin extension template in custom folder
 + Option to delete translations

02-May-2009
 # Fixed custom folders for plugins not included in packages

30-Apr-2009
 ^ Changed all models to helpers !

29-Apr-2009
 - removed DirectoryInfo class

27-Apr-2009
 ^ Refactoring of 'Add Elements' - all code comes from templates now
 ^ Improved logging
 ^ Updated EditArea to version 0.8.1.1
 + Added a 'create table + admin' part - Thanks hidabe
 + Added a 'map table + admin' part

23-Apr-2009
 ^ Facelifting for EasyCreator - green is easy =;)

19-Apr-2009
 ^ Cleanup language manager

16-Apr-2009
 + Using lightbox & ajax for translation

29-Mar-2009
 + Added DokuWiki DifferenceEngine for language file diffs - see: helpers/DifferenceEngine.php
 - Removed old diff routine
 # Misspelled param in user plugin example

--------------- 0.0.9 BETA -- [28-Feb-2009] ---------------------

27-Feb-2009
 + Support for packages
 + Install & uninstall file for packages - BIG Thanks to Andrew Eddie - jxtended.com

01-Feb-2009
 # Fixed language file names for plugins

25-Jan-2009
 ^ Using the J! 1.5 <folder> tag in XML manifest for copying complete folders

19-Jan-2009
 # Stripping bad characters from name of created extensions - Thanks keran

--------------- 0.0.8 BETA -- [28-Dec-2008] ---------------------

23-Dec-2008
 # Fixed wrong entry for uninstall file in XML manifest (on windows) - Thanks baijianpeng
 # Fixed wrong template file in system plugin template

20-Dec-2008
 + Added a template for a system plugin
 # Fixed languages files / menu language files not added to XML if added afterwards

19-Dec-2008
 + Added simplified chinese to language selector
 # Fixed languages files / uninstall file missing in new created XML - Thanks baijianpeng

17-Dec-2008
 + Added chinese language - Thanks baijianpeng

06-Dec-2008
 # Fixed missing field for entry file in creating form

05-Dec-2008
 # Fixed path errors on creating XML install file (on windows) - Thanks ricola
 # Fixed install/uninstall file not registered in importing projects
 + Added a menu icon to all extension templates

04-Dec-2008
 + Support for tar.gz format in packages (while PEAR packages are still included in J!)
 + Support for parameters in XML install file (templates still WIP)
 # Fixed creationDate in XML install file
 # Fixed lightbox, ajax loader gif in template mvc_6

02-Dec-2008
 + Added a warning message if a live install is detected ( + option to switch this off in config)

--------------- 0.0.7.1 BETA -- [01-Dec-2008] ---------------------

30-Nov-2008
 # Fixed saving templates not working
 # Fixed registering existing extensions not properly
 # Fixed admin menu designer displayed for all extension types :~|
 # Fixed missing field for install XML file in creating form
 + Added a template for a backend module

26-Nov-2008
 # Fixed group/client not set for modules/plugins in XML install file

20-Nov-2008
 + Use Google translation API as an 'aid' (optional of course)

--------------- 0.0.7 BETA -- [23-Nov-2008] ---------------------

16-Nov-2008
 + Added polish language - Thanks keran

15-Nov-2008
 + Added J! core example plugins for content, user and authentication as templates
 + Added more reference links from docs.joomla.org
 - Removed screenshots from help leading to smaller install file size
 # Smaller install file size should fix error 'blank page after install' - time out - Thanks keran

13-Nov-2008
 # Fixed path issues on windows systems

11-Nov-2008
 + Admin menu translation for components
 + Check language files for correct UTF-8 encoding and presence of a BOM
 + Option to remove the BOM from language files

07-Nov-2008
 + New languages for J! 1.5.8

06-Nov-2008
 + Admin menu designer for components
 ^ Code cleanup
 ^ Start adding access modifiers so - PHP 5 is required now !

30-Oct-2008
 # Fixed path issues on windows leading to 'file not found' in multiple occasions ;(
 # Fixed error caused by incompatible PHP function money_format() on windows
 + Added french language - Thanks crony

--------------- 0.0.6 BETA -- [22-Oct-2008] ---------------------

22-Oct-2008
 + JDump will be used for some debugging output (if installed)
 ^ Updated EditArea to version 0.7.2.3

20-Oct-2008
 + Form for extension setup
 ^ Changed structure of all extension templates !
 ^ Moved the templates folder to component root

16-Oct-2008
 + Language selector in wizard step 4
 + Language selector in extension setup form
 + Adding and editing admin menu entries for components
 + Adding code structures like view, controller, model or table to components

--------------- 0.0.5 BETA -- [09-Oct-2008] ---------------------

08-Oct-2008
 + Option to leave the editor open after saving
 + Option to switch EditAreaLoader version
 + Some HTML tags and Joomla! constants for inserting via EditArea
 ^ Changed template MVC 6 to a MooTools demo component
 ^ Updated EditArea to version 0.7.2.2

06-Oct-2008
 + Inspect your code with PHP 5's reflection class - look in 'project info'

03-Oct-2008
 + Using existing Rhuk MilkyWay and Beez templates as templates for new templates =;)

02-Oct-2008
 + Version check with Soeren Eberhardt's version manager

01-Oct-2008
 + Option to include Joomla! core projects
 ^ Reworked language manager - added MooTools drag & drop + sortables
 ^ Overall facelifting

24-Sep-2008
 + Parameter handling for projects
 + Frontend sandbox for testing projects

--------------- 0.0.4 ALPHA -- [17-Sep-2008] ---------------------

15-Sep-2008
 + Create + edit language files
 + Extension template component MVC 7 - Component with editor
 + Credits and long description link for extension templates
 + Logging facility
 # Fixed errors in template com MVC 3
 # Fixed language creation for new registered projects

12-Sep-2008
 + Salary calculator ($Xline=;)

--------------- 0.0.3 ALPHA -- [10-Sep-2008] ---------------------

10-Sep-2008
 # Fixed path issues on windows systems

09-Sep-2008
 ! OK, we are using the standard Joomla! installer now (!)
 # Language check not working properly

--------------- 0.0.2 ALPHA -- [08-Sep-2008] ---------------------

08-Sep-2008
 + Load core language for compare

03-Sep-2008
 + Importing of existing components, modules, plugins and templates

01-Sep-2008
 + Wizard for new projects

31-Aug-2008
 + Import of existing projects

09-Aug-2008
 ^ Improved language handling - analysis of php and XML files, compare ini files

08-Aug-2008
 + AJAX component template

30-Jul-2008
 ^ Improved building of modules and plugins

29-Jul-2008
 + Admin menu and submenu entries in cfg file
 + Form for edit cfg file

23-Jul-2008
 + Description files for extension templates

22-Jul-2008
 ^ Updated EditArea to version 0.7.1.3 -> fixes bug in FF 3

10-Jul-2008
 + Multiple language files will be created

--------------- 0.0.1 ALPHA -- [03-Mar-2008] ---------------------

03-Mar-2008
 ! Startup.

*/
}//--This is the END
