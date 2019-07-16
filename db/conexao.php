
<?php
$utf8=header("Content-Type: text/HTML; charset=utf-8");
$link=new mysqli('localhost','root','','controle');//Crio conexão nesta linha.
$link->set_charset('utf8');//seto o char para nao ter problemas de identificação.
