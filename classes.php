<?php
require 'tracy/tracy.phar';
require 'classes/UserRichardSipek.php';
use SipekRichardUser as user;
use SipekRichardCena as cena;
$UserRichardSipek = new user\UserRichardSipek;
$cena = new cena\CenaRichardSipek;
// vypisuji private atributy

echo "<br>";
echo $UserRichardSipek->setKonzolePrivateRichardSipek("PS4");
echo "<br>";
echo $UserRichardSipek->setNarozeniPrivateRichardSipek(2002);
echo "<br>";

// vypisuje public atributy

echo $UserRichardSipek->getKonzolePublicRichardSipek();
echo "<br>";
echo $UserRichardSipek->getNarozeniPublicRichardSipek();
echo "<br>";
echo $UserRichardSipek->getMobilPublicRichardSipek();
echo "<br>";
echo $UserRichardSipek->getPrijmeniPublicRichardSipek();
echo "<br>";
echo $UserRichardSipek->getJmenoPublicRichardSipek();
echo "<br>";
dump($UserRichardSipek);

echo $cena->getPriceRichardSipek(4894564.514232, 'CZK');
echo "<br>";
dump($cena);
?>