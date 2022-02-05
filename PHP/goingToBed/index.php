<?php

class StringUtils
{
 public static function secondCase($string) {
 if (strlen($string) >= 2) {
  $string[1] = strtoupper($string[1]);
}
return $string;
}
}

class Pajamas
{
  private $owner, $fit, $color;
  function __construct(
  $owner = "unclaimed",
  $fit = "fine",
  $color = "white"
) {
  $this->owner = StringUtils::secondCase($owner);
  $this->fit = $fit;
  $this->color = $color
