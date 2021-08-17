<?php
require __DIR__.'/vendor/autoload.php';

    // Создание клиента
    $subdomain = 'hayksakoyan';            // Поддомен в амо срм
    $login     = 'hayk.sakoyan@tumo.org';            // Логин в амо срм
    $apikey    = 'a8f15a8275ea22bbdd5a86095ba5cfc2ebea5bc6';            // api ключ

    try {
        $amo = new \AmoCRM\Client($subdomain, $login, $apikey);
        
        // Если не указывать логин, вернутся сведения о владельце API ключа.
        $account = $amo->account->getUserByLogin();

        $unsortedId = 'a1587c45b09329a19bdf592c8a45ee37b6f095700be10f943d46820bcaee';

        // Метод для принятия неразобранных заявок.
        print_r($amo->unsorted->apiAccept($unsortedId, $account['id']));

    } catch (\AmoCRM\Exception $e) {
        printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
    }

?>
