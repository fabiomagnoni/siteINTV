 *\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 *\\\\\\\\\\\\\/\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 *\\\\\\\\\\\\\/\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/\/\/\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 *\\\\\\\/\/\\/\\\/\/\/\\\\/\/\/\\\\\/\/\/\\\\\/\\\\\\/\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 *\\\\\/\\\\\/\\\/\\\\\\\/\\\\\/\\\/\\\\\/\\\\\\/\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/\\\/\\\\\\\\
 *\\\\\\/\/\/\\\/\\\\\\\\\/\/\/\\\\\/\/\/\\\\\\\\/\\\\\/\/\/\\\/\/\/\\\\/\/\/\\\\/\\\/\\\\\\\\\
 *\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/\\\\/\\\\\/\\\/\\\\\\\/\\\\\\/\\\\\\/\\\/\\\/\\\\\\\\\\
 *\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/\\/\\\\\\/\/\/\\\\/\/\/\\\/\\\\\\\/\/\/\\\\\/\\\/\\\\\\\\\\\
 *\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 *
 * jquery.dragscroll.js
 * a scrolling plugin for the jQuery JavaScript Library
 *
 * Copyright 2011, Thomas Appel, http://thomas-appel.com, mail(at)thomas-appel.com
 * dual licensed under MIT and GPL license
 * http://dev.thomas-appel.com/licenses/mit.txt
 * http://dev.thomas-appel.com/licenses/gpl.txt
 *
 *
 *
 * changelog:
 * --------------------------------------------------------------------------------------------
 * - 0.2.b3:
 * --------------------------------------------------------------------------------------------
 *		- updated example
*		- code-refectoring
*		- updated minified version
 * --------------------------------------------------------------------------------------------
 * - 0.2.b3pre:
 * --------------------------------------------------------------------------------------------
 *		- fixed MSIE 6+ issues
 * --------------------------------------------------------------------------------------------
 * - 0.2.b2pre:
 * --------------------------------------------------------------------------------------------
 *		- removed some options: onScrollInit, workOnChildElement, onScrollDirChange
 *		- fixed some problemes
 *		- changed some internal functions
 *		- general refactoring issues
 * --------------------------------------------------------------------------------------------
 * - 0.2.b1pre:
 * --------------------------------------------------------------------------------------------
 *		- completely rewrote this plugin
 *		- added scrollbars
 *		- added mousewheel support
 * --------------------------------------------------------------------------------------------
 * - 0.1.b5b	fixed classname removal on plugin destruction
 * - 0.1.b5a	rewrote almost the whole scrolling mechanism
 * - 0.1.b4:	rewrote event unbinding (teardown,destroy), plugin is now self destroyable
 * - 0.1.b3:	fixed event unbinding (teardown)
 * - 0.1.b2:	fixed touch event support
 * - 0.1.b1:	plugin teardown method added
 * --------------------------------------------------------------------------------------------
 *
 * usage:
 * --------------------------------------------------------------------------------------------
 * - $('selector').dragscroll();
 * - if jquery.event.destroyed.js is available or if you use javascriptMVC,
 *   the plugin will detroy itself automatically
 *
 * - to destroy plugin manually call  $('selector').data('dragscroll').destroy();
 *
 * - see index.html in example directory for a more complex sample setup
 * - visit http://dev.thomas-appel.com/dragscroll for a live demo
 *
 *
 * Features to come:
 * --------------------------------------------------------------------------------------------
 * - pageup pagedown key support
 * known issues:
 * --------------------------------------------------------------------------------------------
 * - MSIE 8 doesn't fade out scrollbar handles
 * --------------------------------------------------------------------------------------------
 * @author Thomas Appel


 * jQuery Cycle Plugin (with Transition Definitions)
 * Examples and documentation at: http://jquery.malsup.com/cycle/
 * Copyright (c) 2007-2013 M. Alsup
 * Version: 3.0.1 (22-MAR-2013)
 * Dual licensed under the MIT and GPL licenses.
 * http://jquery.malsup.com/license.html
 * Requires: jQuery v1.7.1 or later
 * @version 0.2.b3pre
