<?php


ini_set('display_errors',1);
error_reporting(E_ALL ^ E_NOTICE);


ini_set('max_execution_time', 0);
ini_set('memory_limit', '512M');

if(!isset($_SERVER['DOCUMENT_ROOT']) || !strlen($_SERVER['DOCUMENT_ROOT']))
{    
    $_SERVER['DOCUMENT_ROOT'] = rtrim(realpath(pathinfo(__FILE__, PATHINFO_DIRNAME) . '/../../'), '/');
} 

require_once($_SERVER['DOCUMENT_ROOT'] . "/classes/stdf.php");
//require_once($_SERVER['DOCUMENT_ROOT'] . "/classes/config.php");
//require_once($_SERVER['DOCUMENT_ROOT'] . "/classes/profiler.php");
//require_once($_SERVER['DOCUMENT_ROOT'] . "/classes/billing.php");
//require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/reqv.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/sbr_meta.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/reserves/ReservesModelFactory.php');


//------------------------------------------------------------------------------


$results = array();


//------------------------------------------------------------------------------






/*
$results['insertArray'] = $DB->insert('activate_service',array(
    'code' => '777',
    'email' => 'kazakov@fl.ru',
    'data' => ''
),'code');
*/


/*
$res = $DB->row("
    SELECT * 
    FROM activate_service 
    WHERE
        code = ?
",'779');


$ar = $DB->array_to_php2($res['data']);

//print_r($res['data']);

//print_r(iconv('CP1251', 'UTF-8', $res['data']));
//print_r(PHP_EOL . PHP_EOL);
//print_r(iconv('CP1251', 'UTF-8', $ar[8]));

print_r($ar);
print_r(PHP_EOL . PHP_EOL);

$ar = $DB->array_to_php($res['data']);
print_r($ar);

exit;
*/

//��� ��������� ������������ ��������� ����������
//��� ����� ������� ���������� hstore

/*
$results['insertArray'] = $DB->query("
    INSERT INTO activate_service (code, email, data) 
    VALUES (?, ?, ?a) RETURNING code;
", 
 '780', 
 'kazakov@fl.ru',
 array(
     //'key' => 'value',
     779,
     1.1,
     'test',
     NULL,
     0,
     -1,
     true,
     false,
     '
<div class="referats__text"><p>������ ������.�������� ������������� ��� ��������� � ����������, ���������� � �����������, ���������� ������� ������ � ������� &mdash; ��� ����, ��� ��������� � ������, ��� � ���������� ������.</p><p>����� �� ������ ��������� �������, �� ����� �������� ���������� �����, ������ ������ �� ������ ������� �� ������ �������, ����� ������ ����� ��������� &mdash; ����� �������, ��������� ����� �� ������� ����������� ������ ���.</p><p>������ ����� �� ������ �������� ��� � ��������, ��� ������ ����� ������.��������� ����������.</p><p>�������� ��������� ����� ������������ ���������� ���������, ������ ��� �������������� � �������������� ������� � �������� ����������� ������ �� ������.�������� �����������.</p></div>     
     '
 )
 );
*/


//------------------------------------------------------------------------------

array_walk($results, function(&$value, $key){
    $value = sprintf('%s = %s'.PHP_EOL, $key, $value);
});

print_r(implode('', $results));

exit;