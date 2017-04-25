$(document).ready(function(){
    
    //initial page
    $('#main').load('parts/content1.php');
   
    //handle the clicks
    $('nav > a').click(function(){
     
    //change the i'm here id to the page clicked
   
        
     var page=$(this).attr('href');
      
     
        // code to be executed if clicked on a page
    $('#main').load('parts/'+page+'.php');
        
     // var mybodyid = page;
     // var mynavid = '#nav_' + mybodyid;
      //alert("mybodyid is " + mybodyid);
     // alert("mynavid is " + mynavid);
      // Set iamhere id
     //$(mynavid).attr('id', 'iamhere');
    

                     
      return false;                    
    });
  
 });
       
    $(function(){
    $("nav > a").click(function(){
     $(this).addClass("active").siblings().removeClass("active");
       
    });
    
});  

   
   
     