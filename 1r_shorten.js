function hitenter(myfield, e){
var keycode;

if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   myfield.value=getshortlink1r(myfield, myfield.value);
   return false;

   }   else
   return true;

}
