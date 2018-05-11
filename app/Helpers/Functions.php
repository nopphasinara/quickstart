<?php

function custom($key = '') {
  if ($key) return config('custom.' . $key);
  return config('custom');
}

function app_resource(): string {
  return custom('app_resource');
}

function get_asset($name): string {
  return asset(custom($name . '.' . app_resource()));
}
