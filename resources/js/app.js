import './bootstrap';

var $dec = document.querySelector('.decrement-btn');
var $in = document.querySelector('.increment-btn');
var $counter = document.querySelector('.counter');

$in.addEventListener('click', function(){
  $counter.value = parseInt($counter.value) + 1; // `parseInt` converts the `value` from a string to a number
}, false);

$dec.addEventListener('click', function(){
    $counter.value = parseInt($counter.value) - 1; // `parseInt` converts the `value` from a string to a number
  }, false);
