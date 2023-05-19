<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = 0;
    if (isset($_POST['item'])) {
        foreach ($_POST['item'] as $item) {
            if ($item == "classicMilk") {
                $total += 5.00;
            } elseif ($item == "peachMilk") {
                $total += 5.50;
            } elseif ($item == "strawberryMilk") {
                $total += 5.50;
            } elseif ($item == "mangoMilk") {
                $total += 5.50;
            } elseif ($item == "mangoTea") {
                $total += 4.00;
            } elseif ($item == "passionFruitTea") {
                $total += 4.50;
            } elseif ($item == "greenTea") {
                $total += 4.50;
            } elseif ($item == "thaiTea") {
                $total += 4.00;
            } elseif ($item == "hotCocoa") {
                $total += 3.50;
            } elseif ($item == "curlyFries") {
                $total += 4.00;
            } elseif ($item == "sweetPotatoFries") {
                $total += 5.00;
            } elseif ($item == "cheeseSticks") {
                $total += 5.00;
            } elseif ($item == "popcornChicken") {
                $total += 5.50;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 5</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>
    <!-- <div class="images"> -->
    <form method="POST" id="menu" class="flex-col-cntr">
        <h1>Yummy Tea</h1>

        <section id="drinks" class="section-border">
            <h2><span>Drinks</span></h2>

            <h3>Milk Tea</h3>
            <div class="options">
                <div>
                    <input type="checkbox" id="classicMilk" name="item[]" value="classicMilk">
                    <label for="classicMilk">Classic Milk Tea $5.00</label>
                </div>
                <div>
                    <input type="checkbox" id="peachMilk" name="item[]" value="peachMilk">
                    <label for="peachMilk">Peach Milk Tea $5.50</label>
                </div>
                <div>
                    <input type="checkbox" id="strawberryMilk" name="item[]" value="strawberryMilk">
                    <label for="classicMilk">Strawberry Milk Tea $5.50</label>
                </div>
                <div>
                    <input type="checkbox" id="mangoMilk" name="item[]" value="mangoMilk">
                    <label for="mangoMilk">Mango Milk Tea $5.50</label>
                </div>
            </div>

            <h3>Fruit Tea</h3>
            <div class="options">
                <div>
                    <input type="checkbox" id="mangoTea" name="item[]" value="mangoTea">
                    <label for="mangoMilk">Mango Milk Tea $4.00</label>
                </div>
                <div>
                    <input type="checkbox" id="passionFruitTea" name="item[]" value="passionFruitTea">
                    <label for="passionFruitTea">Passion Fruit Tea $4.50</label>
                </div>
                <div>
                    <input type="checkbox" id="greenTea" name="item[]" value="greenTea">
                    <label for="greenTea">Green Tea $4.50</label>
                </div>
            </div>

            <h3>Hot Drinks</h3>
            <div class="options">
                <div>
                    <input type="checkbox" id="thaiTea" name="item[]" value="thaiTea">
                    <label for="thaiMilk">Thai Tea $4.00</label>
                </div>
                <div>
                    <input type="checkbox" id="hotCocoa" name="item[]" value="hotCocoa">
                    <label for="hotCocoa">Hot Cocoa $3.50</label>
                </div>
            </div>

        </section>

        <section id="foods" class="section-border">
            <h2><span>Food</span></h2>

            <h3>Fries</h3>
            <div class="options">
                <div>
                    <input type="checkbox" id="curlyFries" name="item[]" value="curlyFries">
                    <label for="curlyFries">Curly Fries $4.00</label>
                </div>
                <div>
                    <input type="checkbox" id="sweetPotatoFries" name="item[]" value="sweetPotatoFries">
                    <label for="sweetPotatoFries">Sweet Potato Fries $5.00</label>
                </div>
            </div>

            <h3>Other</h3>
            <div class="options">
                <div>
                    <input type="checkbox" id="cheeseSticks" name="item[]" value="cheeseSticks">
                    <label for="cheeseSticks">Cheese Sticks(5) $5.00</label>
                </div>
                <div>
                    <input type="checkbox" id="popcornChicken" name="item[]" value="popcornChicken">
                    <label for="popcornChicken">Popcorn Chicken $5.50</label>
                </div>
            </div>

        </section>

        <input type="submit" value="SUBMIT" id="submit">
    </form>

    <section id="payment" class="section-border">
        <h2><span>Payment</span></h2>

        <div>
            <h3>Your total is:</h3>
            <p id="total">
                <?php if (isset($total))
                    echo $total; ?>
            </p>
        </div>

    </section>

    <!-- </div> -->
</body>

</html>