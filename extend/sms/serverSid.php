<?php
//载入ucpass类
require_once('lib/Ucpaas.class.php');

//初始化必填
//填写在开发者控制台首页上的Account Sid
$options['accountsid']='7bfb2be380412d06a4d4e4521b64429f';
//填写在开发者控制台首页上的Auth Token
$options['token']='e456986f73262d935f6b5f9dec66c49c';

//初始化 $options必填
$ucpass = new Ucpaas($options);