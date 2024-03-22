AOS.init();
$(document).ready(function(){
        
    $(window).scroll(function(){
     var height=$(".calcu").height();
     var sumo=$(".miaw").height();
     var j=sumo+height;
     if($(window).scrollTop()>100)
     {
         $(".mymaaas").css("visibility","visible");
     }
     else
     {
         $(".mymaaas").css("visibility","hidden");
     }
     if($(window).scrollTop()>height-200 && $(window).scrollTop()<j)
     {
       //location.reload();
      alert(1);
     }
    });

 

  

       
         let start=0;
         let start2=0;
         let start3=0;
         let start4=0;
         let end1=$(".myone").html();
         let end2=$(".mytwo").html();
         let end3=$(".mythree").html();
         let end4=$(".myfour").html();
         const one=setInterval(function(){
             if(start<end1)
             {
                 start++;
             }
             $(".myone").html(start);
         
         },10);
         const two=setInterval(function(){
             if(start2<end2)
             {
                 start2++;
             }
             $(".mytwo").html(start2);
         },10);
         const three=setInterval(function(){
             if(start3<end3)
             {
                 start3++;
             }
             $(".mythree").html(start3);
         },10);
         const four=setInterval(function(){
             if(start4<end4)
             {
                 start4++;
             }
             $(".myfour").html(start4);
         },10);
        
         
        
     

     

});