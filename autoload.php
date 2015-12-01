<?php
/**
 * Joomlatools Platform - http://developer.joomlatools.org/platform
 *
 * @copyright	Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/joomlatools/joomlatools-platform for the canonical source repository
 */

JLoader::register('MediaHelperMedia', JPATH_ADMINISTRATOR . '/components/com_media/helper/media.php');
JLoader::registerAlias('JHelperMedia', 'MediaHelperMedia');

JLoader::register('JFormFieldMedia', JPATH_ADMINISTRATOR . '/components/com_media/models/fields/media.php');
