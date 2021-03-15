<?php
require_once('./ToasterInterface.php');
abstract class KitchenAppliance implements ToasterInterface
{
  public function delayByTimer(int $timer)
  {
    sleep($timer);
  }
}
