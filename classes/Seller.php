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
        if ( !is_int($_totalSales) || !is_int($_experience) ) {
            throw new Exception ('Please, insert a valid value');
        }
        return number_format(($_totalSales / $_experience), 2);
    }

    public function printSellerInfos() {
        echo "<td>$this->firstName</td>
            <td>$this->lastName</td>
            <td>$this->age</td>
            <td>$this->experience</td>
            <td>$this->baseCountry</td>
            <td>$this->totalSales</td>
            <td>$this->sellerRating</td>";
    }
}

$sellers = [
    new Seller ('a0001','Luigi', 'Smilzo', 30, 8, 'Italy', 120),
    new Seller ('a0002','Francesco', 'Arzano', 20, 1, 'Italy', 15),
    new Seller ('a0003','Claudio', 'Esposito', 22, 2, 'Italy', 30),
    new Seller ('a0004','Michele', 'Giovannelli', 41, 15, 'Italy', 260),
];

