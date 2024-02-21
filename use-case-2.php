<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-top: 20px;
        }

        .basket-section {
            margin-bottom: 30px;
        }

        .item-label {
            font-weight: bold;
            margin-right: 10px;
        }

        .price {
            font-weight: bold;
            color: #28a745;
            /* Green color for price */
        }

        .total {
            font-weight: bold;
            color: #007bff;
            /* Blue color for total */
        }

        .tva-section {
            margin-top: 20px;
        }
    </style>
    <title>Panier</title>
</head>

<body>
    <!-- Design réalisé avec ChatGPT pour + de clarté visuelle -->
    <h2>Exercice 2:</h2>
    <?php

class BasketItems
{
    public $banana2;
    public $apple2;
    public $wine2;

    public function __construct(float $banana2, float $apple2, float $wine2)
    {
        $this->banana2 = $banana2;
        $this->apple2 = $apple2;
        $this->wine2 = $wine2;
    }
}

class BasketQuantities extends BasketItems
{
    public $bananaquantity;
    public $applequantity;
    public $winequantity;

    public function __construct(float $bananaquantity, float $applequantity, float $winequantity, float $banana2, float $apple2, float $wine2)
    {
        parent::__construct($banana2, $apple2, $wine2);
        $this->bananaquantity = $bananaquantity;
        $this->applequantity = $applequantity;
        $this->winequantity = $winequantity;
    }

    function Discount($price)
    {
        return $price * 0.5;
    }

    function getPrice()
    {
        $total2 = "Your total without TVA is " . ($this->Discount($this->banana2) * $this->bananaquantity + $this->Discount($this->apple2) * $this->applequantity + $this->Discount($this->wine2) * $this->winequantity) . "€.";
        return $total2;
    }

    function getPriceTVA()
    {
        $fruit_tax_r = 0.06;
        $wine_tax_r = 0.21;
        
        $totalbanana = $this->Discount($this->banana2) * $this->bananaquantity;
        $totalapple = $this->Discount($this->apple2) * $this->applequantity;
        $totalwine = $this->Discount($this->wine2) * $this->winequantity;
        $total_before_tva = $totalbanana + $totalapple + $totalwine;

        $totaltva = "Your total TVA included is " . ($total_before_tva + ($totalbanana * $fruit_tax_r) + ($totalapple * $fruit_tax_r) + ($totalwine * $wine_tax_r)) . "€.";
        return $totaltva;
    }
}

$infos = new BasketQuantities(6, 3, 2, 1, 1.5, 10);
echo $infos->getPrice();
echo "<br>";
echo $infos->getPriceTVA();

?>

</body>

</html>