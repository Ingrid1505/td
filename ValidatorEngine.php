<?php
namespace UPJV;
class Validateur
{
 public function check( $input )
 {
 if (strlen($input)<2)
 return false;
 else
 return true;
 }
}
