<?php
    $course = array(
        array('id' => 2,
            'name' => 'zend'),
        array('id' => 3,
            'name' => 'android'),
    );
    
    
   $string = 'this is  test';
print_r($course);



//mã hoá nó sang chuỗi json
$courseEncode = json_encode($course);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<script type="text/javascript" src="js/json2.js"></script>
<script type="text/javascript">

//trong javascript cần sử dụng array trong php thì sử dụng làm sao

	
	var str2 = '<?php echo $courseEncode;?>';
	console.log(str2);//ko thể truy cập đc
	var str2 = '<?php echo $courseEncode;?>';
	//chỉ đóng vai trò là chuỗi chứu kko phải là 1 mảng đối tượng
	console.log(str2[0].id);//ko thể truy cập đc
	



var str3 = JSON.parse(str2);
	
console.log(str3[0].id);//ko thể truy cập đc
</script>
</head>
<body>

</body>
</html>