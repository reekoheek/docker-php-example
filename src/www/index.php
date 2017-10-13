<?php

/**
 * Index file
 */

$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
case '/foo':
    echo 'Foo';
    break;
case '/bar':
    echo 'Bar';
    break;
default:
    echo 'Goto: <a href="/foo">foo</a> <a href="/bar">bar</a>';
    break;
}
