<?php 
include_once __DIR__ . '/person.php';

class Seller extends Person {
    public $experience;
    public $baseCountry;
    public $totalSales;
    public $sellerRating;

    function __construct($_id, $_firstName, $_lastName, $_age, $_experience, $_baseCountry, $_totalSales) {
        parent::__construct($_id, $_firstName, $_lastName, $_age);
        $this->experience = $_experience;
        $this->baseCountry = $_baseCountry;
        $this->totalSales = $_totalSales;
        $this->sellerRating = $this->sellerRating($this->totalSales, $this->experience);
    }

    private function sellerRating($_totalSales, $_experience) {
        return number_format(($_totalSales / $_experience), 2);
    }
}

// $sellers = [
//     new Seller ('a0001','Luigi', 'Smilzo', 30, 3,)
// ];

$seller1 = new Seller ('a0001','Luigi', 'Smilzo', 30, 3, 'Italy', 40);

var_dump($seller1);