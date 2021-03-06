<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: memory_driver_apcu.php 27635 2017-02-02 06:38:31Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
  exit('Access Denied');
}

class memory_driver_apcu
{

  public function init($config) {

  }

  public function get($key) {
    return apcu_fetch($key);
  }

  public function getMulti($keys) {
    return apcu_fetch($keys);
  }

  public function set($key, $value, $ttl = 0) {
    return apcu_store($key, $value, $ttl);
  }

  public function rm($key) {
    return apcu_delete($key);
  }

  public function clear() {
    return apcu_clear_cache('user');
  }

  public function inc($key, $step = 1) {
    return apcu_inc($key, $step) !== false ? apcu_fetch($key) : false;
  }

  public function dec($key, $step = 1) {
    return apcu_dec($key, $step) !== false ? apcu_fetch($key) : false;
  }

}