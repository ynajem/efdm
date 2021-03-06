<?php

use Carbon\Carbon;

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
  if (!$time) $time = date("H:i");
  $shift = 3;
  if ($time >= "08:00" and $time < "14:00") {
    $shift = 1;
  } elseif ($time >= "14:00" and $time < "21:00") {
    $shift = 2;
  }
  return $shift;
}

function getStartTime()
{
  $time = date("H:i");
  $date = date("Y-m-d");
  $shift = "08:00";
  if ($time >= "21:00" and $time <= "23:59") {
    $shift = "21:00";
  } elseif ($time >= "00:00" and $time < "08:00") {
    $shift = "21:00";
    $date = Carbon::now()->subDay()->format("Y-m-d");
  }
  elseif ($time >= "14:00" and $time < "21:00") {
    $shift = "14:00";
  }
  return "{$date} {$shift}";
}



function markdown($text)
{
  $parsedown = new Parsedown();
  return $parsedown->setBreaksEnabled(true)->text($text);
}

function me()
{
  return auth()->user();
}

function h_m($time)
{
  return date('H:i', strtotime($time));
}

function day($date)
{
  return date('d-m-Y', strtotime($date));
}

function entity()
{
  return auth()->user()->entity;
}
