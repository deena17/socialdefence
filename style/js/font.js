	 $(document).ready(function() { 
		$('#incfont').click(function(){	   
        curSize= parseInt($('#content').css('font-size')) + 2;
		if(curSize<=20){
        $('#content').css('font-size', curSize);
        $('.maincontent').css('font-size',curSize);
}
        });  
$('#incfont').click(function(){	   
        curSize= parseInt($('.table').css('font-size')) + 2;
		if(curSize<=20)
        $('.table').css('font-size', curSize);
        });  
		$('#decfont').click(function(){	   
        curSize= parseInt($('#content').css('font-size')) - 2;
		if(curSize>=12)
{
        $('#content').css('font-size', curSize);
        $('.content').css('font-size',curSize);
} 
       }); 
$('#decfont').click(function(){	   
        curSize= parseInt($('.table').css('font-size')) - 2;
		if(curSize>=12)
        $('.table').css('font-size', curSize);
        });
$('#black').click(function(){	   
         $('.wrapper').css("background-color","black");
         $('.wrapper').css("color","white");
         $('.body-content').css("background-color","black");
         $('.content').css("color","white");
         $('.content').css("background-color","black");
         $('.body-content').css("color","white");
         $('.nav').css("background-color","grey");
         $('.footer').css("background-color","grey");
                }); 
$('#white').click(function(){	   
         $('.wrapper').css("background-color","white");
         $('.wrapper').css("color","black");
         $('.content').css("background-color","white");
         $('.content').css("color","black");
         $('.body-content').css("background-color","white");
         $('.body-content').css("color","black");
         $('.nav').css("background-color","#2E4053");
         $('.footer').css("background-color","#2E4053");
                }); 
	});

