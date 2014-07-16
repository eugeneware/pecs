<?php
function after_each() {return call_user_func_array('\\pecs\\'.__FUNCTION__, func_get_args());}
function before_each() {return call_user_func_array('\\pecs\\'.__FUNCTION__, func_get_args());}
function describe() {return call_user_func_array('\\pecs\\'.__FUNCTION__, func_get_args());}
function it() {return call_user_func_array('\\pecs\\'.__FUNCTION__, func_get_args());}
function expect() {return call_user_func_array('\\pecs\\'.__FUNCTION__, func_get_args());}