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

// ------


$(document).ready(function () {
    $("#anythingSearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myDIV .card").filter(function () {
            // change here to the parent as if you hide card only card will hide but col will still take the place
            $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
     });
 });
