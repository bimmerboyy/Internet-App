
<html>
    <head>
        <title>Auta</title>
    </head>
    <body>

    <?php
     //Ukoliko je brend koji smo slektovali onda ce da ispise selected u option preko echo i 
            //samim tim ce biti prikazan selektovani element u drop baru
    $selectedBrand = '';
    if(isset($_GET['brand'])){
        $selectedBrand = $_GET['brand'];
    }
    
    $selectedBrand = $_GET['brand'];
    
    // echo $selectedBrand;
    ?>
    <form method="GET">
        <!--Dva znaka pitanja nam dodje kao isset tj proverava da li je seetovan brand
        ako nije setovano stavice da je prazno ako jeste setovano uzet cemo tu vrijendost i uporedjujemo 
        produzeni kod
        if(isset($_GET['brand'])){
            if($_GET['brand'] === 'BMW'){
                echo "selected";
            }
        }
        -->
        <select name="brand">
            <option value="ALL" <?php echo($_GET['brand'] ?? '') === 'ALL' ? 'selected' : ''; ?>>SVE</option> 
            <option value="BMW" <?php echo($_GET['brand'] ?? '') === 'BMW' ? 'selected' : ''; ?>>BMW</option>
            <option value="Audi" <?php echo($_GET['brand'] ?? '') === 'Audi' ? 'selected' : ''; ?>>Audi</option>
            <option value="Mercedes" <?php echo($_GET['brand'] ?? '') === 'Mercedes' ? 'selected' : ''; ?>>Mercedes</option>
        </select>

        <button type="submit">Pretrazi</button>
    </form>

<?php
//POST I GET METODE

// var_dump($_GET['brand']);


$cars =[
    'BMW' => ['E46','E39','E38','E70'],
    'Audi' =>  ['A5','A6','A8','Q7'],
    'Mercedes' => ['CLK AMG','E63 AMG','G63 AMG','S63 AMG']
];

foreach($cars as $brand => $models){
    if($selectedBrand === $brand || $selectedBrand === 'ALL'){
        echo "<h2>$brand</h2>";
        foreach($models as $model){
          echo "<p>$model</p>";
        }
    }
}
?>
    </body>
</html>
