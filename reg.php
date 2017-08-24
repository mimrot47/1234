<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
       <script type="text/javascript">
               $(document).ready(function(){
                    $("#button").click(function(){
						 var button=$("#button").val();
                          var first_name=$("#first_name").val();
                          var last_name=$("#last_name").val();
						  
						 $.ajax({
                              type:"post",
                              url:"register-insert.php",
                              data:"first_name="+first_name+"&last_name="+last_name+"&button="+button,
                              success:function(data){
                                 $("#info").html(data);
								  $("#w8").html("");
                              }
 
                          });
 
                    });
               });
       </script>
</head>

<body>
<form>
First Name<input type="text" name="first_name" id="first_name" />
Last Name <input type="text" name="last_name" id="last_name" />
  <input type="button" value="add" name="button" id="button"  >
               <div id="w8"></div>
              <div id="info" ></div>
</form>
</body>
</html>