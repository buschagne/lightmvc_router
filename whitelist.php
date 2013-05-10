<?php 


$safe = array(
    'ajax',
    'somecontroller',
    'foo',
    'bar',
);


if(!in_array($this->_controller, $safe))
{
    throw new Exception(); // replace me with your own error 404 stuff
}
