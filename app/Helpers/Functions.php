<?php

function custom($key = '') {
    
}

function app_resource(): string {
  return custom('app_resource');
}

function get_asset($name): string {
  return asset(custom($name . '.' . app_resource()));
}
