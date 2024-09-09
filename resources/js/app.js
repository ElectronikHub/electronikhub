import './bootstrap';
import { Input, initTWE } from "tw-elements";
initTWE({ Input }, { allowReinits: true });



$(document).ready(function () {
    $("#anythingSearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myDIV .card").filter(function () {
            // change here to the parent as if you hide card only card will hide but col will still take the place
            $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
     });
 });



