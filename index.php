<?php
// Ecommerce
class User
{
  public $username;
  public $email;
  private $password;
  private $creditCard;
  public $shopping_cart;

  function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function setPassword(String $password)
  {
    $this->password = hash('md5', $password);
  }

  public function setCreditCard(int $creditCard)
  {
    $this->creditCard = $creditCard;
  }

  public function setShopping_cart(int $shopping_cart)
  {
    $this->shopping_cart = $shopping_cart;
  }
}

class PremiumUser extends User
{
  protected $discount;
  protected $account_coins;

  function __construct($username, $email, $password, $creditCard, $shopping_cart, int $discount, int $account_coins)
  {
    parent::__construct($username, $email, $password, $creditCard, $shopping_cart);
    $this->discount = $discount;
    $this->account_coins = $account_coins;
  }
}

class Product
{
  public $name;
  public $desc;
  public $price;
  public $material;
  public $instock;

  function __construct(string $name, string $desc, float $price, string $material, bool $instock = false)
  {
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
    $this->material = $material;
    $this->instock = $instock;
  }
}

$user_1 = new User('Rabokse', 'Rabo@gmail.com');
$user_1->setCreditCard(2133233532);
$user_1->setPassword('TantoNonLaDecifrate');

var_dump($user_1);
