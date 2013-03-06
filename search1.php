<html>
<head> 
<script language="javascript" type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script>
	 function fncsave() 
	 {
			    $.ajax({ 
			      type: "POST",
			      url: 'search2.php',                  //the script to call to get data          
			     //data: "",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
			     data: $('#myform').serialize(),
			     	    
			       success: function(data){
			    	   $("#mytable").html(' ');
						$("#mytable").append(data);
			    	   
			   	    	
			        }
			        
	 			});
		    }
	</script>
</head>
<body>
<form id="myform">
Search: <input type="text" name="search"><br/>
<br/>
<br/>
<table id="mytable" border="1">
<tr>
<th>I D</th>
<th>Suggestions</th>
</tr>
<tr>
<td> 1 </td>
<td> 1</td>
</tr>
<tr>
<td>2 </td>
<td> 2</td>
</tr>
<tr>
<td> 3</td>
<td> 3</td>
</tr>
<tr>
<td> 4</td>
<td> 4</td>
</tr>
</table> 
</form>
</body>
</html>