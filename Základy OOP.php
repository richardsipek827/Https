<?php
class User
{
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

    public function getqeckPublicRichardSipek()
    {
        return $this->qeckPublicRichardSipek;
    }

    public function getdutPublicRichardSipek ()
    {
        return $this->dutPublicRichardSipek;
    }

    public function getblackPublicRichardSipek()
    {
        return $this->blackPublicRichardSipek;
    }

    public function getklavesnicePublicRichardSipek()
    {
        return $this->klavesnicePublicRichardSipek;
    }

    public function getMysPublicRichardSipek()
    {
        return $this->MysPublicRichardSipek;
    }
    public function setqeckPrivateRichardSipek($qeckPrivateRichardSipek)
    {
        return $qeckPrivateRichardSipek;
    }
    public function setdutPrivateRichardSipek($dutPrivateRichardSipek)
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
