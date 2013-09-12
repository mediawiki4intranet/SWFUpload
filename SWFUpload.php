<?php
/**
 * SWFUpload.php -- Flash applet support for uploading files into MediaWiki
 * Copyright 2009-2013 Vitaliy Filippov <vitalif@mail.ru>
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @file
 * @ingroup Extensions
 * @author Vitaliy Filippov <vitalif@mail.ru>
 */

// INSTALLATION:
// 1) Make sure Magic Quotes are DISABLED in your PHP settings!
//    This extension won't work when they're enabled.
// 2) Put the following into your LocalSettings.php:
//    require_once "$IP/extensions/SWFUpload/SWFUpload.php";

// NOTE: Included swfupload-*.js scripts are slightly changed to work
// with MW ResourceLoader: 'var SWFUpload' is substituted for 'window.SWFUpload'

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['SpecialSWFUpload'] = $dir . 'SWFUpload.body.php';
$wgExtensionMessagesFiles['SWFUpload'] = $dir . 'SWFUpload.i18n.php';
$wgSpecialPages['SWFUpload'] = 'SpecialSWFUpload';
$wgSpecialPageGroups['SWFUpload'] = 'media';

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
    'path'        => __FILE__,
    'name'        => 'SWFUpload',
    'version'     => '1.02 (2013-08-15)',
    'author'      => 'Vitaliy Filippov',
    'url'         => 'http://wiki.4intra.net/SWFUpload_(MediaWiki)',
    'description' => 'Flash applet support for uploading multiple files into MediaWiki',
);

$wgResourceModules['ext.SWFUpload'] = array(
    'scripts' => array(
        'data/swfupload.js',
        'data/swfupload.queue.js',
        'data/fileprogress.js',
        'data/handlers.js',
        'data/add.js'
    ),
    'styles' => 'data/swfupload.css',
    'messages' => array(
        'swfu-allfiles',
        'swfu-pending',
        'swfu-uploading',
        'swfu-finished',
        'swfu-cancelled',
        'swfu-upload-stopped',
        'swfu-queue-limit-exceeded-0',
        'swfu-queue-limit-exceeded-1',
        'swfu-queue-limit-exceeded-2',
        'swfu-queue-limit-exceeded-5',
        'swfu-file-too-big',
        'swfu-file-empty',
        'swfu-invalid-filetype',
        'swfu-unknown-error',
        'swfu-upload-error-http',
        'swfu-upload-error',
        'swfu-io-error',
        'swfu-security-error',
        'swfu-too-many-files',
        'swfu-validation-error',
        'swfu-num-files-uploaded-5',
        'swfu-num-files-uploaded-2',
        'swfu-num-files-uploaded-1',
        'swfu-num-files-uploaded-0',
    ),
    'localBasePath' => __DIR__,
    'remoteExtPath' => 'SWFUpload',
);

if (defined('MW_API') && isset($_REQUEST['action']) && $_REQUEST['action'] === 'upload' &&
    isset($_REQUEST['swfuploadNamePrefix']) && isset($_FILES['file']) &&
    isset($_REQUEST['swfuploadCookies']))
{
    $_COOKIE = unserialize($_POST['swfuploadCookies']);
    $_POST['filename'] = $_REQUEST['filename'] = $_REQUEST['swfuploadNamePrefix'].$_REQUEST['Filename'];
}
