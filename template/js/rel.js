$(function(){
function check(){	  
     $("#name").blur(function(){
 
		if($(this).val().length < 7)
		{
			$(".name").html("<img src=\"../template/images/error.png\" class=\"img\" />");
			return false;
		}else{
			$(".name").html("<img src=\"../template/images/ok.png\" class=\"img\" />");
		}
	});
 
      $("#pw").blur(function(){
        if($(this).val().length <7)
        {
            $(".pw").html("<img src=\"../template/images/error.png\" class=\"img\" />");
			return false;
        } else {
            $(".pw").html("<img src=\"../template/images/ok.png\" class=\"img\" />");
        }
     });
	  $("#pw2").blur(function(){
        if(!$(this).val()|| $(this).val() != $("#pw").val() )
        {
            $(".pw2").html("<img src=\"../template/images/error.png\" class=\"img\" />");
			return false;
        } else {
            $(".pw2").html("<img src=\"../template/images/ok.png\" class=\"img\" />");
   		}
 
     });
	  $("#email").blur(function(){
        if(!$("#email").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/))
        {
            $(".email").html("<img src=\"../template/images/error.png\" class=\"img\" />");
			return false;
        } else {
            $(".email").html("<img src=\"../template/images/ok.png\" class=\"img\" />");
        }
     });
	  $("#tel").blur(function(){
	  var isMobile=/^(?:13\d|15\d)\d{5}(\d{3}|\*{3})$/;   
      var isPhone=/^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;
        if(!$(this).val().match(isMobile) && !$(this).val().match(isPhone)){     
            $(".tel").html("<img src=\"../template/images/error.png\" class=\"img\" />");
			return false;
        } else {
            $(".tel").html("<img src=\"../template/images/ok.png\" class=\"img\" />");
        }
     });
    
	 $("#name").focus(function(){
	$(".name").html("不能少于7位");		 
	 });
	 $("#tel").focus(function(){
	$(".tel").html("请填写正确的号码");		 
	 });
     $("#pw").focus(function(){
	$(".pw").html("不能少于7位");		 
	 });
}
check();

})