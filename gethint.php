<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ice Cream Flavors</title>
</head>
<body>

<?php
// Array with ice cream flavors

$a[] = "Vanilla";
$a[] = "Chocolate";
$a[] = "Strawberry";
$a[] = "Mint Chocolate Chip";
$a[] = "Chocolate Chip Cookie Dough";
$a[] = "Cookies and Cream";
$a[] = "Rocky Road";
$a[] = "Pistachio";
$a[] = "Butter Pecan";
$a[] = "Neapolitan";
$a[] = "Chocolate Chip";
$a[] = "Coffee";
$a[] = "Caramel Swirl";
$a[] = "Peanut Butter Cup";
$a[] = "Raspberry Ripple";
$a[] = "Cherry Garcia";
$a[] = "Lemon Sorbet";
$a[] = "Mango";
$a[] = "Green Tea";
$a[] = "Pumpkin Spice";
$a[] = "Birthday Cake";
$a[] = "Maple Walnut";
$a[] = "Tiramisu";
$a[] = "Cotton Candy";
$a[] = "Toffee Crunch";
$a[] = "Lime Sherbet";
$a[] = "Orange Creamsicle";
$a[] = "Coconut";
$a[] = "Black Raspberry";
$a[] = "Salted Caramel";
$a[] = "Mocha Almond Fudge";
$a[] = "White Chocolate Raspberry Truffle";
$a[] = "S'mores";
$a[] = "Red Velvet Cake";
$a[] = "Bubblegum";
$a[] = "Raisin";
$a[] = "Peach";
$a[] = "Banana";
$a[] = "Turtle";
$a[] = "Black Licorice";
$a[] = "Carrot Cake";
$a[] = "Cotton Candy";
$a[] = "Amaretto";
$a[] = "Grape Sorbet";
$a[] = "Apple Pie";
$a[] = "Ginger";
$a[] = "Cinnamon";
$a[] = "Honeycomb";
$a[] = "Eggnog";
$a[] = "Chili Chocolate";
$a[] = "Key Lime Pie";
$a[] = "Almond Joy";
$a[] = "Maple Bacon";
$a[] = "Sweet Corn";
$a[] = "Raspberry Cheesecake";
$a[] = "Caramelized Banana";
$a[] = "Kahlua Coffee";
$a[] = "White Chocolate Macadamia";
$a[] = "Lemon Meringue Pie";
$a[] = "Coconut Almond Fudge";
$a[] = "Saffron";
$a[] = "Lavender Honey";
$a[] = "Salted Caramel Pretzel";
$a[] = "Matcha Green Tea";
$a[] = "Red Bean";
$a[] = "Mochi";
$a[] = "Churro";
$a[] = "Black Sesame";
$a[] = "Gingerbread";
$a[] = "Bourbon Pecan";
$a[] = "Cranberry";
$a[] = "Pear";
$a[] = "Lemon Basil";
$a[] = "Avocado";
$a[] = "Sweet Potato";
$a[] = "Maple Pecan";
$a[] = "Graham Cracker";
$a[] = "Peanut Butter Fudge";
$a[] = "Honey Lavender";
$a[] = "Taro";
$a[] = "Mango Sticky Rice";
$a[] = "Dulce de Leche";
$a[] = "Cinnamon Bun";
$a[] = "Butter Almond";
$a[] = "Milk Chocolate";
$a[] = "Dark Chocolate";
$a[] = "Rum Raisin";
$a[] = "S'mores";
$a[] = "Tropical Fruit";
$a[] = "Wildberry";
$a[] = "Strawberry Cheesecake";
$a[] = "Passion Fruit";
$a[] = "Zabaglione";
$a[] = "Basil";
$a[] = "Sour Cherry";
$a[] = "Coconut Lime";
$a[] = "Peach Melba";
$a[] = "Fried Ice Cream";
$a[] = "Chocolate Hazelnut";
$a[] = "Cherry Almond";
$a[] = "Whiskey Caramel";
$a[] = "Whiskey Pecan";
$a[] = "Orange Sorbet";
$a[] = "Raisin Rum";
$a[] = "Fudge Brownie";
$a[] = "Mojito";
$a[] = "Mint Mojito";
$a[] = "Lemon Curd";
$a[] = "Maple Pecan";
$a[] = "Caramel Macchiato";
$a[] = "Rose";
$a[] = "Watermelon Sorbet";
$a[] = "Tangerine";
$a[] = "Lychee";
$a[] = "Coconut Rum";
$a[] = "Apple Cinnamon";
$a[] = "Sweet Cream";
$a[] = "Peach Melba";
$a[] = "Choco-Matcha";
$a[] = "Licorice";
$a[] = "Raisin Butter Pecan";
$a[] = "Butterfinger";
$a[] = "Fizzy Cola";
$a[] = "Brownie Batter";
$a[] = "Creme Brulee";
$a[] = "Toffee Butter Crunch";
$a[] = "Ginger Peach";
$a[] = "Coconut Raspberry";
$a[] = "Coconut Chocolate Chip";
$a[] = "Strawberry Banana";
$a[] = "Mocha Chip";
$a[] = "Toffee Almond";
$a[] = "Blueberry Cheesecake";
$a[] = "Carrot Cake";
$a[] = "Pineapple";
$a[] = "Strawberry Rhubarb";
$a[] = "Tahitian Vanilla";
$a[] = "Pecan Praline";
$a[] = "Choco Mint";
$a[] = "Raspberry Sorbet";
$a[] = "Pineapple Coconut";
$a[] = "Brown Sugar";
$a[] = "Plum Sorbet";
$a[] = "Coconut Chocolate Swirl";
$a[] = "Peach Cobbler";
$a[] = "Chocolate Raspberry Truffle";
$a[] = "Fruity Pebbles";
$a[] = "Oreo";
$a[] = "Lemonade Sorbet";
$a[] = "Ginger Chai";
$a[] = "Salted Caramel Brownie";
$a[] = "Candy Cane";
$a[] = "Cherry Vanilla";
$a[] = "Blackberry";



// Get the 'q' parameter from the URL
$q = $_REQUEST["q"];

$hint = "";

// Lookup all hints from the array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found, or output the correct values
echo $hint === "" ? "no suggestion" : $hint;
?>

</body>
</html>
