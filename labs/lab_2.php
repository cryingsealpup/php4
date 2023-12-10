<?php
require_once '../vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

//    Лабораторная 2.1 Реализация интерфейса кэширования
$cache = new FilesystemAdapter('', 0, '../cache/symphony');

$value = $cache->get('my_cache_key', function (ItemInterface $item) {
    $item->expiresAfter(3600);

    // ... выполнить какой-то HTTP-запрос или сложные вычисления
    $computedValue = 'foobar';

    return $computedValue;
});
echo $value;
// ... и удалить ключ кеша
$cache->delete('my_cache_key');


//    Лабораторная 2.2 Реализация другого интерфейса
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1/comments');
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1/comments');
echo $response->getBody();
