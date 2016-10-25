// JavaScript Document

function validasi_email(string){
				var pattern1=/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;
						var 	pattern2=/^.+\@(\[?)[a-zA-Z0-9\-\_\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
						if((!pattern1.test(string) && pattern2.test(string))==false)
						{
						return false;}
				}

			function call_update(){
				var formx = document.form_update;
				
					i_email = formx.i_email.value;
					if(i_email == ""){
						swal({
							title: "Thanks for join !",
							text: "Any updates  will be shared to you",
							imageUrl: 'assets/images/candramelon.png'
						});
						return false;
					}else if(validasi_email(i_email)==false){
						swal({
							title: "Thanks for join !",
							text: "Any updates  will be shared to you",
							imageUrl: 'assets/images/candramelon.png'
						});
						return false;
					}else{
						
						swal({
						title: "Thanks for join !",
						text: "Any updates  will be shared to you",
						imageUrl: 'assets/images/candramelon.png',
						showCancelButton: false,
						confirmButtonColor: '#DD6B55',
						confirmButtonText: 'OK'
						},
						function(){
							window.location = 'index/proses.php?act=1&email=' + i_email;
						});
						return false;
						
						
					}
			}

			function submit_contact(){
				var formx = document.form_contact;
					
					i_name = formx.i_name.value;
					i_email = formx.i_email.value;
					//i_subject = formx.i_subject.value;
					i_message = formx.i_message.value;

					var count_error = 0;
					var message_error = '';
					
					if(i_name == ""){
						count_error = count_error + 1;
						message_error += "Name required<br>";
					}

					if(i_email == ""){
						count_error = count_error + 1;
						message_error += "Email required<br>";
					}else if(validasi_email(i_email)==false){
						count_error = count_error + 1;
						message_error += "Please use valid email address<br>";
					}
					/*if(i_subject == ""){
						count_error = count_error + 1;
						message_error += "Subject required<br>";
					}
					*/
					if(i_message == ""){
						count_error = count_error + 1;
						message_error += "Message required<br>";
					}

					var dataString = 'name=' + i_name + '&email=' + i_email + '&message=' + i_message;

					if(count_error > 0){


						swal({
							html:true,
							title: "Upps !",
							text: message_error,
							imageUrl: 'assets/images/candramelon.png'
						});
						return false;
					
					}else{
						
						
						swal({
						title: "Thanks !",
						text: "I will immediately reply your message",
						imageUrl: 'assets/images/candramelon.png',
						showCancelButton: false,
						confirmButtonColor: '#DD6B55',
						confirmButtonText: 'OK'
						},
						function(){
							$.ajax({
									type: "POST",
									url: "contact",
									data: dataString,
									cache: false,
									success: function(html) {
										 $('#form_contact')[0].reset();
									}
							});
						
						});
						return false;
						


						
					}
			}
			
			
			
		
			
			