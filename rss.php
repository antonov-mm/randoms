<?php
$dom = new DomDocument('1.0', 'utf-8'); // Создаём XML-документ версии 1.0 с кодировкой utf-8

//добавление корня - <rss>
$rss = $dom->appendChild($dom->createElement('rss'));
$rss->setAttribute('xmlns:yandex', 'http://news.yandex.ru'); // Добавляем атрибут xmlns:yandex элементу <rss>
$rss->setAttribute('xmlns:media', 'http://search.yahoo.com/mrss/'); // Добавляем атрибут xmlns:media элементу <rss>
$rss->setAttribute('xmlns:turbo', 'http://turbo.yandex.ru'); // Добавляем атрибут xmlns:turbo элементу <rss>
$rss->setAttribute('version', '2.0'); // Добавляем атрибут version элементу <rss>

//добавление элемента <channel> в <rss>
$channel = $rss->appendChild($dom->createElement('channel'));



/* *********************
 * Основная информация
 * Информация о сайте-источнике
 */
// добавление элемента <title> в <channel>
$title = $channel->appendChild($dom->createElement('title'));
$title->appendChild($dom->createTextNode('Название канала')); // добавление элемента текстового узла <title> в <title>

// добавление элемента <link> в <channel>
$link = $channel->appendChild($dom->createElement('link'));
$link->appendChild($dom->createTextNode('http://www.example.com/')); // добавление элемента текстового узла <link> в <link>

// добавление элемента <description> в <channel>
$description = $channel->appendChild($dom->createElement('description'));
$description->appendChild($dom->createTextNode('Краткое описание канала')); // добавление элемента текстового узла <description> в <description>

// добавление элемента <language> в <channel>
$language = $channel->appendChild($dom->createElement('language'));
$language->appendChild($dom->createTextNode('ru')); // добавление элемента текстового узла <language> в <language>

// добавление элемента <turbo:analytics> в <channel>
$turbo_analytics = $channel->appendChild($dom->createElement('turbo:analytics'));
$turbo_analytics->appendChild($dom->createTextNode('')); // добавление элемента текстового узла <turbo:analytics> в <turbo:analytics>

// добавление элемента <turbo:adNetwork> в <channel>
$turbo_adNetwork = $channel->appendChild($dom->createElement('turbo:adNetwork'));
$turbo_adNetwork->appendChild($dom->createTextNode('')); // добавление элемента текстового узла <turbo:adNetwork> в <turbo:adNetwork>

/* *********************
 * Информация о странице
 */
//добавление элемента <item> в <channel>
$item = $channel->appendChild($dom->createElement('item'));
$item->setAttribute('turbo', 'true'); // Добавляем атрибут turbo элементу <item>

//добавление элемента <link> в <item>
$item_link = $item->appendChild($dom->createElement('link'));
$item_link->appendChild($dom->createTextNode('http://www.example.com/category/sub-category/page1.html')); // добавление элемента текстового узла <link> в <link>

//добавление элемента <turbo:source> в <item>
$item_turbo_source = $item->appendChild($dom->createElement('turbo:source'));
$item_turbo_source->appendChild($dom->createTextNode('')); // добавление элемента текстового узла <turbo:source> в <turbo:source>

//добавление элемента <turbo:topic> в <item>
$item_turbo_topic = $item->appendChild($dom->createElement('turbo:topic'));
$item_turbo_topic->appendChild($dom->createTextNode('')); // добавление элемента текстового узла <turbo:topic> в <turbo:topic>

//добавление элемента <pubDate> в <item>
$item_pubDate = $item->appendChild($dom->createElement('pubDate'));
$item_pubDate->appendChild($dom->createTextNode('Tue, 21 Apr 2015 14:15:00 +0300')); // добавление элемента текстового узла <pubDate> в <pubDate>

//добавление элемента <author> в <item>
$item_author = $item->appendChild($dom->createElement('author'));
$item_author->appendChild($dom->createTextNode('Иван Иванов')); // добавление элемента текстового узла <author> в <author>

//добавление элемента <metrics> в <item>
$item_metrics = $item->appendChild($dom->createElement('metrics'));

//добавление элемента <yandex> в <metrics>
$item_metrics_yandex = $item_metrics->appendChild($dom->createElement('yandex'));
$item_metrics_yandex->setAttribute('schema_identifier', 'Идентификатор'); // Добавляем атрибут schema_identifier элементу <yandex>

//добавление элемента <breadcrumblist> в <yandex>
$item_metrics_yandex_breadcrumblist = $item_metrics_yandex->appendChild($dom->createElement('breadcrumblist'));

//добавление элемента <breadcrumb> в <breadcrumblist>
$item_metrics_yandex_breadcrumblist_breadcrumb_0 = $item_metrics_yandex_breadcrumblist->appendChild($dom->createElement('breadcrumb'));
$item_metrics_yandex_breadcrumblist_breadcrumb_0->setAttribute('url', 'http://example.com/'); // Добавляем атрибут url элементу <breadcrumb>
$item_metrics_yandex_breadcrumblist_breadcrumb_0->setAttribute('text', 'Домашняя'); // Добавляем атрибут text элементу <breadcrumb>

//добавление элемента <breadcrumb> в <breadcrumblist>
$item_metrics_yandex_breadcrumblist_breadcrumb_1 = $item_metrics_yandex_breadcrumblist->appendChild($dom->createElement('breadcrumb'));
$item_metrics_yandex_breadcrumblist_breadcrumb_1->setAttribute('url', 'http://example.com/category/'); // Добавляем атрибут url элементу <breadcrumb>
$item_metrics_yandex_breadcrumblist_breadcrumb_1->setAttribute('text', 'Категория'); // Добавляем атрибут text элементу <breadcrumb>

//добавление элемента <breadcrumb> в <breadcrumblist>
$item_metrics_yandex_breadcrumblist_breadcrumb_2 = $item_metrics_yandex_breadcrumblist->appendChild($dom->createElement('breadcrumb'));
$item_metrics_yandex_breadcrumblist_breadcrumb_2->setAttribute('url', 'http://example.com/category/sub-category/'); // Добавляем атрибут url элементу <breadcrumb>
$item_metrics_yandex_breadcrumblist_breadcrumb_2->setAttribute('text', 'Подкатегория'); // Добавляем атрибут text элементу <breadcrumb>

//добавление элемента <breadcrumb> в <breadcrumblist>
$item_metrics_yandex_breadcrumblist_breadcrumb_3 = $item_metrics_yandex_breadcrumblist->appendChild($dom->createElement('breadcrumb'));
$item_metrics_yandex_breadcrumblist_breadcrumb_3->setAttribute('url', 'http://example.com/category/sub-category/page1.html'); // Добавляем атрибут url элементу <breadcrumb>
$item_metrics_yandex_breadcrumblist_breadcrumb_3->setAttribute('text', 'Пример страницы'); // Добавляем атрибут text элементу <breadcrumb>

//добавление элемента <yandex:related> в <item>
$item_yandex_related = $item->appendChild($dom->createElement('yandex:related'));
$item_yandex_related->appendChild($dom->createTextNode('')); // добавление элемента текстового узла <yandex:related> в <yandex:related>

/* *********************
 * Содержимое страницы
 */
// Очищаем содержимое страницы
$txt_content = '';

$txt_content_HEADER = '
    <header>
        <h1>Заголовок страницы</h1>
        <figure>
            <img src=""/>
        </figure>
        <h2>Заголовок второго уровня</h2>
        <menu>
            <a href="">Текст ссылки</a>
            <a href="">Текст ссылки</a>
        </menu>
    </header>
    ';
$txt_content_CONTENT = '<p>В нашем меню всегда есть свежие, вкусные и полезные блюда.</p>
    ';

// Собираем содержимое страницы
$txt_content = $txt_content_HEADER . $txt_content_CONTENT;

//добавление элемента <turbo:content> в <item>
$item_turbo_content = $item->appendChild($dom->createElement('turbo:content'));
$item_turbo_content->appendChild($dom->createCDATASection($txt_content)); // добавление элемента текстового узла <yandex:related> в <yandex:related>



/* *********************
 * Создание файла
 */
//генерация xml
$dom->formatOutput = true; // установка атрибута formatOutput
                           // domDocument в значение true
// save XML as string or file
$test1 = $dom->saveXML(); // передача строки в rss-yturbo
$dom->save('rss-yturbo.xml'); // сохранение файла
?>