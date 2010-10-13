function getshortlink1r(elem,longlink){
var link=longlink;

if (window.XMLHttpRequest){           // code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
}else{                // code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                       
   	   if(!xmlhttp){  
   	   	   alert("Error creating the XMLHttpRequest object.");
   	   } else {
   	   	   try{
   	   	   	   xmlhttp.open("POST", location.href+'/wp-content/plugins/1rhu/public_api.php?url='+longlink, true);
   	   	   	   xmlhttp.onreadystatechange = function(){
   	   	   	   	   if (xmlhttp.readyState === 4 && xmlhttp.status==200){
   	   	   	   	   	   link = xmlhttp.responseText;
   	   	  	  	   elem.value=link;
   	   	   	   	   }
   	   	   	  }
   	   	   	   	   
   	   	   	   	   xmlhttp.send(null);
   	   	   	   
   	   	   }catch(e){
   	   	   	   alert("Can't connect to server:\n" + e.toString());
   	   	   }
   	   }
   	   return link;
}
