

$('#suma').click(function (e) { 
    $('#div_suma').css('display','block'); 
   $('#div_resta').css('display','none'); 
   $('#div_multiplicacion').css('display','none'); 
   $('#div_division').css('display','none');
                         
    e.preventDefault();
    
});
$('#resta').click(function (e) { 
    $('#div_resta').css('display','block'); 
   $('#div_suma').css('display','none'); 
   $('#div_multiplicacion').css('display','none'); 
   $('#div_division').css('display','none');
                         
    e.preventDefault();
    
});
$('#multiplicacion').click(function (e) { 
    $('#div_multiplicacion').css('display','block'); 
   $('#div_suma').css('display','none');  
   $('#div_resta').css('display','none'); 
   $('#div_division').css('display','none');
                        
    e.preventDefault();
    
});

$('#division').click(function (e) { 
$('#div_division').css('display','block'); 
    $('#div_multiplicacion').css('display','none'); 
   $('#div_suma').css('display','none');  
   $('#div_resta').css('display','none');   
                        
    e.preventDefault();
    
});

