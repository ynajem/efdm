<?php

function options($array,$default=FALSE){
  $r = array();
  foreach ($array as $key => $value) {
    $selected = ($key==$default) ? " selected" : "";
    $r[] = "<option value=\"{$key}\"{$selected}>{$value}</option>";
  }
  return join($r,'');
}

function markdown($text)
{
  $parsedown = new Parsedown();
  return $parsedown->setBreaksEnabled(true)->text($text);
}

function esas($shift,$team){
  $all = [$shift->chefSalle,$shift->supervisor,$shift->chef,$shift->esa1,$shift->esa2,$shift->esa3,$shift->renfort1,$shift->renfort2];
  return array_intersect($all,$team);
}
