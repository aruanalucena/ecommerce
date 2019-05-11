<?php
include __DIR__ . 'vendor/autoload.php';

$pagarme = new pagarMe\client('ak_test_HIBffxVS9uV8OISdCViVRM4W54ahdq');

$transacao = $pagarme->transactions()->get([
    'id'=>'6337493'
]);
echo $transacacao->status;