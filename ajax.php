<?
	
	if (isset($_GET['action']) && $_GET['action']=='send_form'){
		foreach ($_GET as $key => $val) {
			${$key} = $val;
		}
		
		$to  = "site@site.com" ;		
		$from  = "site@site.com" ;		

		
							
		$subject = $form_name." \r\n"; 
		
		if($action_type=='form_feedback'){
		
			$emessage = "
			<html>
				Имя:".$uname."<br/>Телефон:".$phone1." ".$phone2." ".$phone3."
			</html>";
		}						
			$headers  = "Content-type: text/html; charset=utf-8 \r\n";
			$headers .= "From: ".$from."\r\n";
								
			mail($to, $subject, $emessage, $headers);
			
			echo 'sended';
	}
?>