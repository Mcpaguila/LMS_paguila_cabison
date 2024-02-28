<?php

class MilkTea {
  private $name;
  private $price;
  private $size;
  private $sweetnessLevel;
  private $toppings;

  public function __construct($name, $price, $size = "Regular", $sweetnessLevel = "Normal", $toppings = []) {
    $this->name = $name;
    $this->price = $price;
    $this->size = $size;
    $this->sweetnessLevel = $sweetnessLevel;
    $this->toppings = $toppings;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getSize() {
    return $this->size;
  }

  public function getSweetnessLevel() {
    return $this->sweetnessLevel;
  }

  public function getToppings() {
    return $this->toppings;
  }

  public function getDescription() {
    $description = "$this->size $this->name Milk Tea with $this->sweetnessLevel sweetness";
    if (!empty($this->toppings)) {
      $description .= " and " . implode(", ", $this->toppings) . " toppings";
    }
    return $description;
  }

  public function getTotalPrice() {
    // Add logic to calculate price based on size, toppings, etc.
    // This is just an example, replace with your specific pricing logic.
    $toppingPrice = 0.5 * count($this->toppings);
    return $this->price + $toppingPrice;
  }
}

// Create a MilkTea object
$mangoMilkTea = new MilkTea("Mango", 4.50, "Large", "Less Sugar", ["Boba", "Aloe Vera"]);

// Access properties and methods
echo "Milk Tea: " . $mangoMilkTea->getName() . "\n";
echo "Price: " . $mangoMilkTea->getPrice() . " USD\n";
echo "Size: " . $mangoMilkTea->getSize() . "\n";
echo "Sweetness: " . $mangoMilkTea->getSweetnessLevel() . "\n";
echo "Toppings: " . implode(", ", $mangoMilkTea->getToppings()) . "\n";
echo "Description: " . $mangoMilkTea->getDescription() . "\n";
echo "Total Price: " . $mangoMilkTea->getTotalPrice() . " USD\n";
?>