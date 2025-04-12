<?php

class Customer
{
  var $first_name;
  var $last_name;
  var $email;
  var $phone;
  var $is_subscribed = false;

  function __construct($first_name, $last_name, $email, $phone)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->setPhone($phone); // Use the setter to validate the phone number
  }

  function setPhone($phone)
  {
    if (!is_int($phone)) {
      throw new InvalidArgumentException("Phone number must be an integer.");
    }
    $this->phone = $phone;
  }

  function set_subscribe($is_subscribed)
  {
    return $this->is_subscribed = $is_subscribed ? true : false;
  }

  public function getFullName()
  {
    return $this->first_name . " " . $this->last_name;
  }

  public function getAllInfo()
  {
    return [
      'first_name' => $this->first_name,
      'last_name' => $this->last_name,
      'email' => $this->email,
      'phone' => $this->phone,
      'is_subscribed' => $this->is_subscribed ? 'Yes' : 'No'
    ];
  }
}

// Example usage
$cam = new Customer('Cam', 'Wheatley', 'cameron_2000@live.co.uk', 7712345678);
$cam->set_subscribe(true);

print_r($cam->getAllInfo());

$cam->set_subscribe(false);
print_r($cam->getAllInfo());

$jack = new Customer('Jack', 'Earl', 'jack.earl@yahoo.com', 7712345678);
$jack->set_subscribe(true);
print_r($jack->getAllInfo());
