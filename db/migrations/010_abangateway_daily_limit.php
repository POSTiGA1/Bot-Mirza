<?php

return static function (PDO $pdo, Schema $schema): void {
    if (!$schema->tableExists('PaySetting')) {
        return;
    }

    $stmt = $pdo->prepare('INSERT IGNORE INTO PaySetting (NamePay, ValuePay) VALUES (:name, :value)');
    $stmt->execute([':name' => 'dailylimitiranpay4', ':value' => '0']);
};
