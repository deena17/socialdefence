document.onmousedown=disableclick;
status="This function not allowed here";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
