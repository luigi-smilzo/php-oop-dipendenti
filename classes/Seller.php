<?php 
include_once __DIR__ . '/person.php';

class Seller extends Person {
    // Properties
    public $experience;
    public $baseCountry;
    public $totalSales;
    public $sellerRating;

// Constructor
    function __construct($_id, $_firstName, $_lastName, $_age, $_experience, $_baseCountry, $_totalSales) {
        parent::__construct($_id, $_firstName, $_lastName, $_age);
        $this->experience = $_experience;
        $this->baseCountry = $_baseCountry;
        $this->totalSales = $_totalSales;
        $this->sellerRating = $this->sellerRating($this->totalSales, $this->experience);
    }

    // Methods
    private function sellerRating($_totalSales, $_experience) {
        return number_format(($_totalSales / $_experience), 2);
    }

    public function printSellerInfos() {
        // Exception
        if ( !is_int($this->totalSales) || !is_int($this->experience) ) {
            throw new Exception ('Invalid value');
        }

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
    new Seller ('a0001','Luigi', 'Smilzo', 30, 8, 'Italy', '120'), // <- ERROR ON PURPOSE (int)
    new Seller ('a0002','Francesco', 'Arzano', 20, 1, 'Italy', 15),
    new Seller ('a0003','Claudio', 'Esposito', 22, 2, 'Italy', 30),
    new Seller ('a0004','Michele', 'Giovannelli', 41, 15, 'Italy', 260),
];

