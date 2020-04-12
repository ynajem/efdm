<?php

function options($options, $default = null)
{
  $r = array();
  foreach ($options as $key => $value) {
    $selected = ($key == $default) ? " selected" : "";
    $r[] = "<option value=\"{$key}\"{$selected}>{$value}</option>";
  }
  return join($r, '\n');
}

function multioptions($options, $defaults = [])
{
  $r = array();
  foreach ($options as $key => $value) {
    $selected = in_array($key, $defaults) ? " selected" : "";
    $r[] = "<option value=\"{$key}\"{$selected}>{$value}</option>";
  }
  return join($r, '\n');
}

function getShift($time = False)
{
  $shift = 3;
  if ($time <= "08:00" and $time > "14:00") {
    $shift = 1;
  } elseif ($time >= "14:00" and $time < "21:00") {
    $shift = 2;
  }
  return $shift;
}

function markdown($text)
{
  $parsedown = new Parsedown();
  return $parsedown->setBreaksEnabled(true)->text($text);
}
