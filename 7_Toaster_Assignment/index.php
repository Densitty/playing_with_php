<?php

/**
 * Build a Toaster class. The Toaster should be able to handle you pressing a lever, pop the lever when it's done and handle anything else.
 */

/**
 * Bonus 1 - Figure out how to make PHP wait for a given number of seconds before automatically popping the lever
 * Bonus 2 - Make it extend an abstact class called KitchenAppliance and handle the timer function there
 * Bonus 3 - Make it implement an interface that defines the methods your KitchenAppliance must implement
 */

require_once('./KitchenAppliance.php');
/*
  a class can extend an abstract class and also implement an interface at the same time;
  Format - class Toaster extends AbstractClass implements InterfaceClass 
 */

class Toaster extends KitchenAppliance
{
  public function pressLever()
  {
    echo 'Pressing the lever.';
    echo "<br/>";
    // to make PHP wait for some time before we pop the lever, we delay the execution;
    // sleep(5); /* [Bonus 1] */
    // instead of delaying the execution in line 22, we use an abstract class and method to carry it out [Bonus 2]
    $this->delayByTimer(5);
    // effect not perfectly seen in browser compared to console
    return $this->popLever();
  }



  private function popLever()
  {
    return 'Popping the lever';
  }
}

$toaster = new Toaster();
echo $toaster->pressLever();
