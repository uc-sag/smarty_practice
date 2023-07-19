<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();
 $smarty->setTemplateDir('./templates/');
 $smarty->setCompileDir('./templates_c/');
 $smarty->setCacheDir('./cache/');

 

$smarty->assign('name', 'John Doe');
$smarty->assign('age', 25);
$smarty->assign('x', 'Hello');
$smarty->assign('val', 'India');
$smarty->assign('selected_id', '1');
$smarty->assign('foo', 'check');
$data = array(
    'name'=>'sagar',
    'age'=>23,
    'address'=>'bhadohi',
);
$smarty->assign('data', $data);
$arr = array("one","two","three");
$smarty->assign('arr', $arr);


$smarty->assign('logged_in', false);
$smarty->assign('value', 24);
$smarty->assign('Contacts',
    array('fax' => '555-222-9876',
          'email' => 'zaphod@slartibartfast.example.com',
          'phone' => array('home' => '555-444-3333',
                           'cell' => '555-111-1234')
                           )
         );


$data = $smarty->createData();
$data->assign('foo','data');
$data->assign('bar','bar-data');

define('MY_CONST_VAL','CHERRIES');

$smarty->assign('articleTitle', 'next x-men film, x3, delayed.');

$smarty->assign('para',
                 "War Dims Hope for Peace. Child's Death Ruins Couple's Holiday.\n\n
                 Man is Fatally Slain. Death Causes Loneliness, Feeling of Isolation."
                );


$config['date'] = '%I:%M %p';
$config['time'] = '%H:%M:%S';
$smarty->assign('config', $config);
$smarty->assign('yesterday', strtotime('-1 day'));

$smarty->assign('articleTitle2', "Infertility unlikely to\nbe passed on, experts say.");
$smarty->assign('number', 23.5787446);


$smarty->display('example.tpl');


?>