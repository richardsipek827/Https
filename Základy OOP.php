<?php
declare(strict_types=1);
/**
 * @author Richard Sipek
 */
class User
{
    // konstruktor
    public function __construct()
    {
    }

    private $qeckPrivateRichardSipek = "Dick";
    private $dutPrivateRichardSipek = 789;
    public $qeckPublicRichardSipek = "Dick";
    public $dutPublicRichardSipek = 789;
    public $blackPublicRichardSipek = "buk";
    public $klavesnicePublicRichardSipek = "Evolve0";
    public $MysPublicRichardSipek = "BloodHand";
    protected $krysa1RichardSipek;
    protected $krysa2RichardSipek;
    protected $krysa3RichardSipek;
    /**
     * @return string
     */
    public function getqeckPublicRichardSipek(): string
    {
        return $this->qeckPublicRichardSipek;
    }

    public function getdutPublicRichardSipek (): int 
    {
        return $this->dutPublicRichardSipek;
    }

    public function getblackPublicRichardSipek(): string
    {
        return $this->blackPublicRichardSipek;
    }

    public function getklavesnicePublicRichardSipek(): string
    {
        return $this->klavesnicePublicRichardSipek;
    }

    public function getMysPublicRichardSipek(): string
    {
        return $this->MysPublicRichardSipek;
    }
    /**
     * @param int $qeckPrivateRichardSipek
     * @return int
     */
    public function setqeckPrivateRichardSipek(string $qeckPrivateRichardSipek): string
    {
        return $qeckPrivateRichardSipek;
    }
    /**
     * @param int $dutPrivateRichardSipek
     * @return int
     */
    public function setdutPrivateRichardSipek(int $dutPrivateRichardSipek): int
    {
        return $dutPrivateRichardSipek;
    }
}

$User = new User;
echo "<br>";
echo $User->setqeckPrivateRichardSipek("Dick");
echo "<br>";
echo $User->setdutPrivateRichardSipek(789);
echo "<br>";
echo $User->getqeckPublicRichardSipek();
echo "<br>";
echo $User->getdutPublicRichardSipek();
echo "<br>";
echo $User->getblackPublicRichardSipek();
echo "<br>";
echo $User->getklavesnicePublicRichardSipek();
echo "<br>";
echo $User->getMysPublicRichardSipek();
echo "<br>";
var_dump($User);
?>
