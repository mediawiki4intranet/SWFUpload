<?php
/**
 * SWFUpload.i18n.php -- Flash applet support for uploading files into MediaWiki
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

$messages = array();

/* English
 * @author Vitaliy Filippov <vitalif@mail.ru>
 */
$messages['en'] = array(
    'swfu-allfiles'               => "All files",
    'swfu-pending'                => "Pending...",
    'swfu-uploading'              => "Uploading...",
    'swfu-finished'               => "Uploaded.",
    'swfu-cancelled'              => "Cancelled.",
    'swfu-upload-stopped'         => "Uploading stopped.",
    'swfu-queue-limit-exceeded-0' => "Too many files selected!\nPlease wait for uploading current queue.",
    'swfu-queue-limit-exceeded-1' => "Too many files selected!\nYou can select only \$1 files.",
    'swfu-queue-limit-exceeded-2' => "Too many files selected!\nYou can select only \$1 files.",
    'swfu-queue-limit-exceeded-5' => "Too many files selected!\nYou can select only \$1 file.",
    'swfu-file-too-big'           => 'File is too big.',
    'swfu-file-empty'             => 'File does not exist or is empty.',
    'swfu-invalid-filetype'       => 'Unknown filetype.',
    'swfu-unknown-error'          => "Unknown error: \$1.",
    'swfu-upload-error-http'      => "Error uploading: HTTP \$1.",
    'swfu-upload-error'           => "Error uploading: \$1",
    'swfu-io-error'               => "Input/output error.",
    'swfu-security-error'         => "Security error.",
    'swfu-too-many-files'         => "Too many files uploaded.",
    'swfu-validation-error'       => "File could not be validated.",
    'swfu-num-files-uploaded-5'   => "\$1 files uploaded.",
    'swfu-num-files-uploaded-2'   => "\$1 files uploaded.",
    'swfu-num-files-uploaded-1'   => "\$1 file uploaded.",
    'swfu-num-files-uploaded-0'   => "",
    'swfupload-comment'                   => "Common description for uploaded files:",
    'swfupload-filename-prefix'           => "Filename prefix:&nbsp;",
    'swfupload-title'                     => "Upload multiple files",
    'swfupload'                           => "Upload files using Flash applet",
    'swfupload-cancelbtn'                 => "Cancel",
    'swfupload-def-category'              => '[[Category:Upload $1]]',
    'swfupload-page-text'                 =>
"You can upload multiple files using this page and simple Flash applet.

Please, use this promptly:
* You can overwrite old version of uploaded files, and in case of a big amount of files it'll be more complicated to find and restore them.
* Use file name prefix: non-empty prefix will be prepended to all file names, so it'll be simpler to distinguish between your own uploaded files and someone's else.
* You can enter <tt><nowiki>[[Category:Some category name]]</nowiki></tt> as a «description», so your ''new'' files will be uploaded to this category.",
    'swfupload-select-file'               => "Select files <font color=red><b>&rarr;</b></font>",
);

/* Русский
 * @author Vitaliy Filippov <vitalif@mail.ru>
 */
$messages['ru'] = array(
    'swfu-allfiles'               => "Все файлы",
    'swfu-pending'                => "Подготовка...",
    'swfu-uploading'              => "Загрузка...",
    'swfu-finished'               => "Загружен.",
    'swfu-cancelled'              => "Отменён.",
    'swfu-upload-stopped'         => "Загрузка остановлена.",
    'swfu-queue-limit-exceeded-0' => "Выбрано слишком много файлов!\nДождитесь загрузки уже выбранных файлов.",
    'swfu-queue-limit-exceeded-1' => "Выбрано слишком много файлов!\nВы можете выбрать ещё \$1 файл.",
    'swfu-queue-limit-exceeded-2' => "Выбрано слишком много файлов!\nВы можете выбрать ещё \$1 файла.",
    'swfu-queue-limit-exceeded-5' => "Выбрано слишком много файлов!\nВы можете выбрать ещё \$1 файлов.",
    'swfu-file-too-big'           => 'Размер файла превышает максимальный допустимый.',
    'swfu-file-empty'             => 'Файл пуст или не существует.',
    'swfu-invalid-filetype'       => 'Недопустимый тип файла.',
    'swfu-unknown-error'          => "Неизвестная ошибка: \$1.",
    'swfu-upload-error-http'      => "Ошибка загрузки (HTTP): \$1.",
    'swfu-upload-error'           => "Ошибка загрузки: \$1.",
    'swfu-io-error'               => "Ошибка ввода-вывода.",
    'swfu-security-error'         => "Ошибка доступа.",
    'swfu-too-many-files'         => "Слишком много загружаемых файлов.",
    'swfu-validation-error'       => "Файл не прошёл проверки.",
    'swfu-num-files-uploaded-5'   => "\$1 файлов загружено.",
    'swfu-num-files-uploaded-2'   => "\$1 файла загружено.",
    'swfu-num-files-uploaded-1'   => "\$1 файл загружен.",
    'swfu-num-files-uploaded-0'   => "",
    'swfupload-comment'                   => "Общее описание к загрузке файлов:",
    'swfupload-filename-prefix'           => "Префикс имени файла:&nbsp;",
    'swfupload-title'                     => "Загрузка множества файлов",
    'swfupload'                           => "Загрузить файлы через Flash-апплет",
    'swfupload-cancelbtn'                 => "Отменить",
    'swfupload-def-category'              => '[[Категория:Загружено $1]]',
    'swfupload-page-text'                 =>
"На данной странице Вы можете загрузить несколько файлов сразу.

Пожалуйста, будьте аккуратны с массовой загрузкой файлов:
* Вы можете перезаписать файлы, загруженные кем-то другим, и хотя старые версии файлов будут сохранены, в случае большого количества файлов их будет несколько тяжелее искать и восстанавливать.
* Используйте префикс имени файла: если Вы укажете непустой префикс, все Ваши загруженные файлы получат имена &lt;Префикс&gt;ИмяФайла, и отделить свои файлы от чужих будет намного проще.
* Вы можете ввести текст <tt><nowiki>[[Категория:Имя некоторой категории]]</nowiki></tt> как «описание» и ''новые'' файлы попадут в эту категорию.",
    'swfupload-select-file'               => "Выбрать файлы <font color=red><b>&rarr;</b></font>",
);
