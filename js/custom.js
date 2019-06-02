/**
 * Created by Uroosa Sehar on 3/20/2017.
 */
    function selectedUser() {
        if(document.getElementById("user_type").value =="Admin") {

            $('#loginModal').modal('show');

        }
        else if(document.getElementById("user_type").value =="Teacher") {

            $('#loginModal').modal('show');
        }
    }

 function updateUser(){

     $('#updateUser').modal('show');
 }
function openNav() {
    document.getElementById("mySidenav").style.width = "15%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
var checkeventcount = 1,prevTarget;
$('.modal').on('show.bs.modal', function (e) {
    if(typeof prevTarget == 'undefined' || (checkeventcount==1 && e.target!=prevTarget))
    {
        prevTarget = e.target;
        checkeventcount++;
        e.preventDefault();
        $(e.target).appendTo('body').modal('show');
    }
    else if(e.target==prevTarget && checkeventcount==2)
    {
        checkeventcount--;
    }
});

/*

function validation(){
    var x, text;

    // Get the value of the input field with id=
    x = document.getElementById("updateStatus").value;

    if (x=="Yes" || x=="No") {
        text = "Input not valid";
        document.getElementById("error").innerHTML = text;
    }
}*/
/*
jquery code for getting value from jquery array into the drop down list
var myArray = ['1','2','3'];
 var option='';
 for(var i=0;i< myArray.length;i++){
 option += '<select><option value="'+ myArray[i] + '">' + myArray[i] + '</option><select>';
 }
 $('#addedTimes').append(option);*/

/*$(function(){
 $('a.save').click(function(e){

 var bla = $('select.timeSlots option:selected').text();
 alert(bla);
 });
 });
how to append the values to a text area on selecting from drop down
 <script>
 // for getting the sid from drop-down list and show it into the text field//
 (function() {

 // get references to select list and display text box
 var sel = document.getElementById('valueOfStd');
 var el = document.getElementById('std_id');


 function getSelectedOption(sel) {
 var opt;
 for ( var i = 0, len = sel.options.length; i < len; i++ ) {
 opt = sel.options[i];
 if ( opt.selected === true ) {
 break;
 }
 }
 return opt;
 }
 document.getElementById('valueOfStd').onchange = function () {
 el.value = sel.options[sel.selectedIndex].text;
 }


 }());

 </script>
 */