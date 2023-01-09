<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'geniuscourse');

/** Имя пользователя базы данных */
define('DB_USER', 'root');

/** Пароль к базе данных */
define('DB_PASSWORD', 'root');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Mq[&8]tpMo}Zx(V#s_6QjnCrN6R}F@/tH~54rTs~M.(<08Y5CJop6YOH%n;EJY0R');
define('SECURE_AUTH_KEY',  'YkSQ)<_N6ZRZ9^nj}TkyP4*Ej+rViSyh1.ur#t8R+d4H?F?HT2TW]N*tk6M}e]Q>');
define('LOGGED_IN_KEY',    'oGQ(& JUuOb^6=ls%lakDubfX(0GC!=Jq<EXe5|m9.(.[hm,waP%Elt,M7nXAj/5');
define('NONCE_KEY',        'i-@vP8N,<C?y3]xy|^.g~ny[VuNGNAbRu~kLUdOe8zX%xa^5.~php5Ykm09/+JpA');
define('AUTH_SALT',        '7cc5KaHHjD;w5B|+T8fd/y&2j{qmJa+.cTQm_>>$3!X@Kqq(nu?c)y4D%B5C]nGw');
define('SECURE_AUTH_SALT', 'g+$.oF+qwXKAZ+PlL*4w*8,L% ONGaRtd.4DnJFh/wU{gESieFOD@H-.)$k#(P3s');
define('LOGGED_IN_SALT',   'aL6(kk=;6=WuXw9Q?tY-q`[`BVMMj#*k=q=f>2JJ?TL`:v*9*s0bS|2h)aW6;<58');
define('NONCE_SALT',       'l._#SP$;5vS=0f00OpyxetFCQXA@1tJ%l*TT*N2zil/7C!)1V4|A,A]HZzkL@Liw');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'geni_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
