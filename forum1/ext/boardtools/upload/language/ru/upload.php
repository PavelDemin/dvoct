<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2015 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @translated by Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'				=> 'Загрузка Расширений',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'		=> 'Загрузка расширений',
	'ACP_UPLOAD_EXT_DESCRIPTION'		=> 'Устанавливайте/обновляйте/удаляйте расширения, управляйте их ZIP-файлами и выполняйте другие задачи - всё это без использования FTP.',
	'ACP_UPLOAD_EXT_TITLE_EXPLAIN'		=> 'Загрузка Расширений позволяет вам загружать ZIP-файлы расширений или удалять папки расширений с сервера.<br />Имея это расширение, вы можете устанавливать/обновлять/удалять расширения без использования FTP. Если загруженное вами расширение уже существует, его файлы будут заменены на загруженные вами.',
	'ACP_UPLOAD_EXT_HELP'				=> 'Загрузка Расширений: Руководство пользователя',
	'UPLOAD'							=> 'Загрузить',
	'BROWSE'							=> 'Обзор...',
	'EXTENSION_UPLOAD'					=> 'Загрузить расширение',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'Здесь вы можете загрузить со своего компьютера или с удалённого сервера ZIP-файл расширения, содержащий необходимые файлы для установки. “Загрузка Расширений” попытается распаковать архив и подготовить его для установки.<br />Выберите файл или укажите ссылку на источник в полях внизу.',
	'EXT_UPLOAD_ERROR'					=> 'Расширение не было загружено.',
	'EXT_UPLOAD_INIT_FAIL'				=> 'В процессе инициализации загрузки расширения возникла ошибка.',
	'EXT_NOT_WRITABLE'					=> array(
		'error'		=> 'Отсутствуют права на запись для папки ext/. Данные права необходимы для правильной загрузки расширений.',
		'solution'	=> 'Пожалуйста, исправьте права доступа или настройки и попробуйте снова.',
	),
	'EXT_TMP_NOT_WRITABLE'				=> array(
		'error'		=> 'Отсутствуют права на запись для папки ext/boardtools/upload/tmp. Данные права необходимы для правильной загрузки расширений.',
		'solution'	=> 'Пожалуйста, исправьте права доступа или настройки и попробуйте снова.',
	),
	'EXT_ALLOW_URL_FOPEN_DISABLED'		=> array(
			'error'		=> 'Настройка allow_url_fopen должна быть включена, чтобы можно было загружать информацию с удалённого ресурса.',
			'solution'	=> 'Пожалуйста, убедитесь, что настройка allow_url_fopen включена в вашем файле php.ini, и попробуйте снова.',
	),
	'EXT_OPENSSL_DISABLED'				=> array(
			'error'		=> 'Расширение openssl должно быть включено, чтобы можно было загружать информацию с ресурса https.',
			'solution'	=> 'Пожалуйста, убедитесь, что расширение openssl включено в вашем файле php.ini, и попробуйте снова.',
	),
	'NO_UPLOAD_FILE'					=> array(
		'error'		=> 'Файл не задан или в процессе загрузки произошла ошибка.',
		'solution'	=> 'Пожалуйста, убедитесь, что вы загружаете правильный ZIP-файл расширения, и попробуйте снова.',
	),
	'NOT_AN_EXTENSION'					=> 'Загруженный ZIP-файл не является расширением phpBB. Файл не был сохранён на сервере.',
	'EXT_ACTION_ERROR'					=> 'Запрошенное действие не может быть выполнено для выбранного расширения phpBB.<br />Примечание: расширением “Загрузка Расширений” можно управлять только через стандартный модуль управления расширениями.',

	'SOURCE'							=> 'Источник',
	'EXTENSION_UPDATE_NO_LINK'			=> 'Ссылка для загрузки расширения отсутствует.',
	'EXTENSION_TO_BE_ENABLED'			=> 'Загрузка Расширений будет отключена во время обновления и будет включена снова после его завершения.',
	'EXTENSION_UPLOAD_UPDATE'			=> 'Обновить расширение',
	'EXTENSION_UPLOAD_UPDATE_EXPLAIN'	=> '“Загрузка Расширений” осуществит загрузку по ссылке, отображаемой ниже.',

	'EXTENSION_UPLOADED'				=> 'Расширение “%s” загружено успешно.',
	'EXTENSIONS_AVAILABLE'				=> 'Деинсталлированные расширения',
	'EXTENSIONS_UPLOADED'				=> 'Загруженные расширения',
	'EXTENSIONS_UNAVAILABLE'			=> 'Неисправные расширения',
	'EXTENSIONS_UNAVAILABLE_EXPLAIN'	=> 'Расширения, перечисленные ниже, загружены на вашу конференцию, но по каким-либо причинам являются неисправными, в связи с чем эти расширения недоступны и не могут быть включены на вашей конференции. Пожалуйста, проверьте корректность файлов расширений либо используйте Инструмент очистки расширений, если вы хотите удалить файлы неисправных расширений с сервера.',
	'EXTENSION_BROKEN'					=> 'Неисправное расширение',
	'EXTENSION_BROKEN_ENABLED'			=> 'Это неисправное расширение включено!',
	'EXTENSION_BROKEN_DISABLED'			=> 'Это неисправное расширение отключено!',
	'EXTENSION_BROKEN_TITLE'			=> 'Это расширение неисправно!',
	'EXTENSION_BROKEN_DETAILS'			=> 'Нажмите здесь, чтобы узнать подробности.',
	'EXTENSION_BROKEN_EXPLAIN'			=> '<strong>Некоторые данные этого расширения всё ещё сохранены на сервере.</strong> Пожалуйста, выясните, почему это расширение неисправно. Вам может потребоваться помощь разработчиков расширения, также может понадобиться доступ к FTP, чтобы отредактировать некоторые файлы (либо вы можете загрузить исправленную версию). После этого вы снова сможете управлять расширением.<br /><h3>Что вы можете сделать:</h3><br /><strong>Обновить неисправное расширение.</strong><br /><ul><li>Убедитесь, что данное расширение отключено (нажмите на переключатель, если необходимо).</li><li>Выясните, доступна ли новая версия данного расширения. Попытайтесь загрузить её.</li><li>Если проблема всё ещё не решена, вы можете попросить помощи у разработчиков расширения.</ul><strong>или</strong><br /><br /><strong>Полностью удалить неисправное расширение.</strong><br /><ul><li>Убедитесь, что данное расширение отключено (нажмите на переключатель, если необходимо).</li><li>Убедитесь, что данные этого расширения удалены (нажмите на кнопку с изображением корзины, если необходимо).</li><li>Удалите файлы расширения, используя Инструмент очистки расширений.</ul>',

	'EXTENSION_UPLOADED_ENABLE'			=> 'Включить загруженное расширение',
	'ACP_UPLOAD_EXT_UNPACK'				=> 'Распаковать расширение',
	'ACP_UPLOAD_EXT_CONT'				=> 'Содержимое расширения “%s”',

	'EXT_LIST_DOWNLOAD'					=> 'Скачать полный список',
	'EXT_LIST_DOWNLOAD_ENGLISH'			=> 'Использовать английские наименования статусов',
	'EXT_LIST_DOWNLOAD_GROUP'			=> 'Группировать',
	'EXT_LIST_DOWNLOAD_GROUP_STANDARD'	=> 'загруженные/неисправные',
	'EXT_LIST_DOWNLOAD_GROUP_DISABLED'	=> 'включённые/отключённые/неисправные',
	'EXT_LIST_DOWNLOAD_GROUP_PURGED'	=> 'включённые/отключённые/деинсталлированные/неисправные',
	'EXT_LIST_DOWNLOAD_SHOW'			=> 'Включить имена',
	'EXT_LIST_DOWNLOAD_SHOW_FULL'		=> 'отображаемые имена и чистые имена',
	'EXT_LIST_DOWNLOAD_SHOW_CLEAN'		=> 'только чистые имена',
	'EXT_LIST_DOWNLOAD_SHOW_NAME'		=> 'только отображаемые имена',
	'EXT_LIST_DOWNLOAD_TITLE'			=> 'Полный список загруженных расширений',
	'EXT_LIST_DOWNLOAD_FOOTER'			=> 'Создан с помощью Загрузки Расширений',

	'EXT_ROW_ENABLED'					=> 'включено',
	'EXT_ROW_DISABLED'					=> 'отключено',
	'EXT_ROW_UNINSTALLED'				=> 'деинсталлировано',
	'EXT_ROWS_ENABLED'					=> 'Включённые:',
	'EXT_ROWS_DISABLED'					=> 'Отключённые:',
	'EXT_ROWS_UNINSTALLED'				=> 'Деинсталлированные:',
	'EXT_ROWS_UPLOADED'					=> 'Загруженные:',
	'EXT_ROWS_BROKEN'					=> 'Неисправные:',

	'EXTENSION_DELETE'					=> 'Удалить расширение',
	'EXTENSION_DELETE_CONFIRM'			=> 'Вы уверены, что хотите удалить расширение “%s”?',
	'EXTENSIONS_DELETE_CONFIRM'			=> array(
		2	=> 'Вы уверены, что хотите удалить <strong>%1$s</strong> расширения?',
		3	=> 'Вы уверены, что хотите удалить <strong>%1$s</strong> расширений?',
	),
	'EXT_DELETE_SUCCESS'				=> 'Расширение было успешно удалено.',
	'EXTS_DELETE_SUCCESS'				=> 'Расширения были успешно удалены.',
	'EXT_DELETE_ERROR'					=> 'Файл не задан или в процессе удаления произошла ошибка.',
	'EXT_DELETE_NO_FILE'				=> 'Файл для удаления не был задан.',
	'EXT_CANNOT_BE_PURGED'				=> 'Данные включённого расширения не могут быть удалены. Отключите расширение, прежде чем удалять его данные.',

	'EXTENSION_ZIP_DELETE'				=> 'Удалить ZIP-файл',
	'EXTENSION_ZIP_DELETE_CONFIRM'		=> 'Вы уверены, что хотите удалить ZIP-файл “%s”?',
	'EXTENSIONS_ZIP_DELETE_CONFIRM'		=> array(
		2	=> 'Вы уверены, что хотите удалить <strong>%1$s</strong> ZIP-файла?',
		3	=> 'Вы уверены, что хотите удалить <strong>%1$s</strong> ZIP-файлов?',
	),
	'EXT_ZIP_DELETE_SUCCESS'			=> 'ZIP-файл расширения был успешно удалён.',
	'EXT_ZIPS_DELETE_SUCCESS'			=> 'ZIP-файлы расширений были успешно удалены.',
	'EXT_ZIP_DELETE_ERROR'				=> 'Файл не задан или в процессе удаления произошла ошибка.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'Настройки расширения (имя поставщика и название расширения) некорректно заданы или отсутствуют в загруженном ZIP-файле. Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'Файл composer.json не был найден в загруженном ZIP-файле. Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_TRY_SELF'		=> 'Расширение “Загрузка Расширений” может быть обновлено только с помощью специального расширения по его обновлению либо с использованием FTP.',
	'ACP_UPLOAD_EXT_WRONG_RESTORE'		=> 'В процессе обновления установленного расширения произошла ошибка. Попробуйте обновить его ещё раз.',

	'DEVELOPER'							=> 'Разработчик',
	'DEVELOPERS'						=> 'Разработчики',

	'EXT_UPLOAD_SAVE_ZIP'				=> 'Сохранить загруженный ZIP-файл',
	'CHECKSUM'							=> 'Контрольная сумма',
	'RESTORE'							=> 'Восстановить',
	'ZIP_UPLOADED'						=> 'Загруженные ZIP-файлы расширений',
	'EXT_ENABLE'						=> 'Включить',
	'EXT_ENABLE_DISABLE'				=> 'Включить/Отключить расширение',
	'EXT_ENABLED'						=> 'Расширение было успешно включено.',
	'EXT_DISABLED'						=> 'Расширение было успешно отключено.',
	'EXT_PURGE'							=> 'Удалить данные этого расширения',
	'EXT_PURGED'						=> 'Данные этого расширения были успешно удалены.',
	'EXT_UPLOADED'						=> 'Процесс загрузки завершился успешно.',
	'EXT_UPDATE_ENABLE'					=> 'Нажмите на переключатель, чтобы включить расширение.',
	'EXT_UPDATE_CHECK_FILETREE'			=> 'Пожалуйста, проверьте дерево файлов расширения.',
	'EXT_UPDATE_ERROR'					=> 'Процесс обновления завершился с ошибкой.',
	'EXT_UPDATE_TIMEOUT'				=> 'Процесс обновления превысил лимит времени.',
	'EXT_UPDATES_AVAILABLE'				=> 'Доступны обновления',
	'EXT_UPDATE_METHODS_TITLE'			=> 'Доступные методы обновления',
	'EXT_UPLOAD_UPDATE_METHODS'			=> 'Вы можете обновить расширение одним из следующих способов:<ul><li><strong>Обновление с помощью специального инструмента.</strong> Загрузка Расширений может быть обновлена с использованием расширения “Обновление Загрузки Расширений”. Проверьте, доступен ли данный инструмент. Если у вас нет этого инструмента, то вам придётся пользоваться вторым методом.</li><li><strong>Метод FTP.</strong> Загрузку Расширений можно обновить стандартным способом. Скачайте новые файлы на свой компьютер (нажмите на кнопку внизу), отключите расширение в стандартном модуле управления расширениями, скопируйте новые файлы с использованием FTP-клиента и включите расширение в стандартном модуле управления расширениями.</li></ul>',
	'EXT_UPDATED'						=> 'Процесс обновления завершился успешно.',
	'EXT_UPDATED_LATEST_VERSION'		=> 'обновлено до последней версии',
	'EXT_SAVED_OLD_ZIP'					=> '<strong>ПРИМЕЧАНИЕ:</strong> предыдущая версия расширения была сохранена в файле <strong>%s</strong> на вашем сервере. Проверьте модуль “Управление ZIP-файлами”.',
	'EXT_RESTORE_LANGUAGE'				=> '<strong>Одна директория с языковыми файлами отсутствует в загруженной версии расширения.</strong> Вы можете восстановить директорию %s из сохранённого ZIP-архива предыдущей версии расширения. После этого вам может потребоваться обновление файлов этой директории для совместимости с загруженной версией расширения.',
	'EXT_RESTORE_LANGUAGES'				=> '<strong>Несколько директорий с языковыми файлами отсутствуют в загруженной версии расширения.</strong> Вы можете восстановить директории %1$s и %2$s из сохранённого ZIP-архива предыдущей версии расширения. После этого вам может потребоваться обновление файлов этих директорий для совместимости с загруженной версией расширения.',
	'EXT_LANGUAGES_RESTORED'			=> 'Процесс восстановления завершился успешно.',
	'EXT_SHOW_DESCRIPTION'				=> 'Показать описание расширения',
	'EXT_UPLOAD_BACK'					=> '« Вернуться в Загрузку Расширений',
	'EXT_RELOAD_PAGE'					=> 'Перезагрузить страницу',
	'EXT_REFRESH_PAGE'					=> 'Обновить страницу',
	'EXT_REFRESH_NOTICE'				=> 'Навигационное меню может быть устаревшим.',

	'ERROR_COPY_FILE'					=> 'Попытка скопировать файл “%1$s” в директорию “%2$s” завершилась с ошибкой.',
	'ERROR_CREATE_DIRECTORY'			=> 'Попытка создать директорию “%s” завершилась с ошибкой.',
	'ERROR_REMOVE_DIRECTORY'			=> 'Попытка удалить директорию “%s” завершилась с ошибкой.',
	'ERROR_CHECKSUM_MISMATCH'			=> '%s-хэш загруженного файла отличается от заданной контрольной суммы. Файл не был сохранён на сервере.',
	'ERROR_ZIP_NO_COMPOSER'				=> 'composer.json не был найден в заданном ZIP-файле.',
	'ERROR_DIRECTORIES_NOT_RESTORED'	=> 'Процесс восстановления не может быть завершён в связи с возникшими ошибками.',
	'ERROR_LANGUAGE_UNKNOWN_STRUCTURE'	=> 'Структура загруженного языкогого пакета не распознана. Файл не был сохранён на сервере.',
	'ERROR_LANGUAGE_NO_EXTENSION'		=> 'Имя расширения для языкового пакета не задано.',
	'ERROR_LANGUAGE_NOT_DEFINED'		=> 'Для правильной загрузки языкового пакета необходимо указать код ISO. Пожалуйста, заполните соответствующее поле формы и попробуйте снова.',

	'ACP_UPLOAD_EXT_DIR'				=> 'Путь к ZIP-файлам расширений',
	'ACP_UPLOAD_EXT_DIR_EXPLAIN'		=> 'Путь относительно корневой папки phpBB. Например, <samp>ext</samp>.<br />Вы можете изменить этот путь, чтобы хранить ZIP-файлы в специальной папке (например, если вы хотите разрешить пользователям загружать эти файлы, вы можете изменить путь на <em>downloads</em>, а если вы хотите запретить такие скачивания, вы можете изменить данный путь на путь к папке, расположенной на один уровень выше корня сайта (или вы можете создать папку с нужным файлом .htaccess)).',

	'ACP_UPLOAD_EXT_UPDATED'			=> 'Установленное расширение было обновлено.',
	'ACP_UPLOAD_EXT_UPDATED_EXPLAIN'	=> 'Вы загрузили ZIP-файл для установленного ранее расширения. Это расширение <strong>было автоматически отключено</strong>, чтобы сделать процесс обновления безопаснее. Теперь, пожалуйста, <strong>проверьте</strong> корректность загруженных файлов и <strong>включите</strong> расширение, если оно всё ещё должно использоваться на конференции.',

	'ACP_UPLOAD_EXT_NO_CHECKSUM_TITLE'	=> 'Контрольная сумма для загруженного файла не была указана.',
	'ACP_UPLOAD_EXT_NO_CHECKSUM'		=> 'Загрузка Расширений не смогла осуществить проверку безопасности, потому что <strong>контрольная сумма не была указана</strong> для загруженного ZIP-файла. Контрольная сумма проверяется для того, чтобы убедиться в том, что загруженный файл не был повреждён и не был скомпрометирован.',

	'VALID_PHPBB_EXTENSIONS'			=> 'Предлагаемые расширения с официального сайта phpbb.com',
	'SHOW_VALID_PHPBB_EXTENSIONS'		=> 'Показать предлагаемые расширения с официального сайта phpbb.com',
	'VALID_PHPBB_EXTENSIONS_TITLE'		=> 'Вы можете загружать расширения с официального сайта phpbb.com, а также проверять информацию об их обновлениях.',
	'VALID_PHPBB_EXTENSIONS_EMPTY_LIST'	=> 'На данный момент нет предлагаемых расширений. Пожалуйста, проверьте наличие обновлений Загрузки Расширений.',
	'POSSIBLE_SOLUTIONS'				=> 'Возможные решения',

	'ACP_UPLOAD_EXT_MANAGER_EXPLAIN'	=> 'Встроенный в Загрузку Расширений модуль управления расширениями позволяет вам управлять всеми расширениями вашей конференции и просматривать информацию о них.',
	'ACP_UPLOAD_ZIP_TITLE'				=> 'Управление ZIP-файлами',
	'ACP_UPLOAD_UNINSTALLED_TITLE'		=> 'Удаление расширений',

	'EXT_DETAILS_README'				=> 'Readme',
	'EXT_DETAILS_CHANGELOG'				=> 'Changelog',
	'EXT_DETAILS_LANGUAGES'				=> 'Языки',
	'EXT_DETAILS_FILETREE'				=> 'Дерево файлов',
	'EXT_DETAILS_TOOLS'					=> 'Инструменты',

	'DEFAULT'							=> 'по умолчанию',
	'EXT_LANGUAGE_ISO_CODE'				=> 'Код ISO',
	'EXT_LANGUAGES'						=> 'Загруженные языковые пакеты',
	'EXT_LANGUAGES_UPLOAD'				=> 'Загрузить языковой пакет',
	'EXT_LANGUAGES_UPLOAD_EXPLAIN'		=> 'Здесь вы можете загрузить со своего компьютера или с удалённого сервера ZIP-файл, содержащий необходимые языковые файлы этого расширения. “Загрузка Расширений” попытается распаковать архив и переместить файлы в нужную директорию.<br />Выберите файл или укажите ссылку на источник в полях внизу.<br />Не забудьте указать код ISO для загружаемого языкового пакета в соответствующем поле внизу (пример: <strong>en</strong>).<br /><strong>ВАЖНО!</strong> Ваша текущая директория с языковыми файлами этого расширения для языка с данным кодом ISO будет удалена, если она существует, <strong>ZIP-архив для неё не будет создан</strong>.',
	'EXT_LANGUAGE_UPLOADED'				=> 'Языковой пакет “%s” был загружен успешно.',
	'EXT_LANGUAGE_DELETE_CONFIRM'		=> 'Вы уверены, что хотите удалить языковой пакет “%s”?',
	'EXT_LANGUAGES_DELETE_CONFIRM'		=> array(
		2	=> 'Вы уверены, что хотите удалить <strong>%1$s</strong> языковых пакета?',
		3	=> 'Вы уверены, что хотите удалить <strong>%1$s</strong> языковых пакетов?',
	),
	'EXT_LANGUAGE_DELETE_SUCCESS'		=> 'Языковой пакет расширения был успешно удалён.',
	'EXT_LANGUAGES_DELETE_SUCCESS'		=> 'Языковые пакеты расширения были успешно удалены.',
	'EXT_LANGUAGE_DELETE_ERROR'			=> 'Файл не задан или в процессе удаления произошла ошибка.',

	'EXT_TOOLS_DOWNLOAD_TITLE'			=> 'Скачать пакет расширения',
	'EXT_TOOLS_DOWNLOAD'				=> 'Вы можете скачать правильно сформированный ZIP-файл расширения на свой компьютер. Вы также можете выбрать, нужно ли удалить суффикс-маркер предварительной версии, используемый при разработке расширения (например, чтобы сократить время подготовки расширения к загрузке в официальную базу данных расширений).',
	'EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX'	=> 'Удалить суффикс предварительной версии, если таковой существует',
	'EXT_DOWNLOAD_ERROR'				=> 'Попытка скачать расширение “%s” завершилась с ошибкой.',

	'EXT_LOAD_ERROR'					=> 'Загрузка завершилась с ошибкой',
	'EXT_LOAD_TIMEOUT'					=> 'Загрузка превысила лимит времени',
	'EXT_LOAD_ERROR_EXPLAIN'			=> 'Во время процесса загрузки произошла ошибка.',
	'EXT_LOAD_ERROR_SHOW'				=> 'Показать возникшие ошибки',
	'EXT_LOAD_SOLUTIONS'				=> 'Пожалуйста, проверьте логи ошибок сервера, устраните проблему и попробуйте снова.',

	'UPLOAD_DESCRIPTION_UPLOAD'			=> 'Загрузка расширений phpBB',
	'UPLOAD_DESCRIPTION_UPLOAD_CDB'		=> 'С официального сайта phpbb.com',
	'UPLOAD_DESCRIPTION_UPLOAD_LOCAL'	=> 'С локального компьютера',
	'UPLOAD_DESCRIPTION_UPLOAD_REMOTE'	=> 'С удалённого сервера',
	'UPLOAD_DESCRIPTION_UPDATE'			=> 'Обновление расширений phpBB',
	'UPLOAD_DESCRIPTION_UPDATE_ABOUT'	=> 'Вы можете обновлять любые установленные ранее расширения. Расширение, которое Вы захотите обновить, будет автоматически отключено, чтобы сделать процесс обновления безопаснее.',
	'UPLOAD_DESCRIPTION_MANAGE'			=> 'Управление расширениями phpBB',
	'UPLOAD_DESCRIPTION_MANAGE_ACTIONS'	=> 'Устанавливайте/удаляйте любые расширения',
	'UPLOAD_DESCRIPTION_MANAGE_LANG'	=> 'Загружайте языковые пакеты расширений и управляйте ими',
	'UPLOAD_DESCRIPTION_MANAGE_DETAILS'	=> 'Изучайте подробности и деревья файлов',
	'UPLOAD_DESCRIPTION_DESIGN'			=> 'Интерактивный интерфейс',
	'UPLOAD_DESCRIPTION_DESIGN_ABOUT'	=> 'Вы можете совершать действия быстрее, благодаря функциональности JavaScript. Цветные сообщения и подсказки помогут вам принимать правильные решения.',
	'UPLOAD_DESCRIPTION_ZIP'			=> 'Управление ZIP-файлами',
	'UPLOAD_DESCRIPTION_ZIP_SAVE'		=> 'Сохраняйте архивы в выбранной Вами папке',
	'UPLOAD_DESCRIPTION_ZIP_UNPACK'		=> 'Распакуйте ZIP-файл, чтобы установить расширение',
	'UPLOAD_DESCRIPTION_ZIP_DOWNLOAD'	=> 'Скачивайте корректные ZIP-файлы расширений',
	'UPLOAD_DESCRIPTION_CLEANER'		=> 'Инструмент очистки расширений',
	'UPLOAD_DESCRIPTION_CLEANER_ABOUT'	=> 'Вы можете удалять папки расширений или ZIP-файлы расширений с сервера.',
));
