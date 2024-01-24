					let scanner = new Instascan.Scanner({
                        video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
					
					Instascan.Camera.getCameras().then(function (cameras){
						if(cameras.length>0){
							scanner.start(cameras[0]);
							$('[name="options"]').on('change',function(){
								if($(this).val()==1){
									if(cameras[0]!=""){
										scanner.start(cameras[0]);
									}else{
										alert('No Front camera found!');
									}
								}else if($(this).val()==2){
									if(cameras[1]!=""){
										scanner.start(cameras[1]);
									}else{
										alert('No Back camera found!');
									}
								}
							});
						}else{
							console.error('No cameras found.');
							alert('No cameras found.');
						}
					}).catch(function(e) {
                        console.error(e);
					});


                    scanner.addListener('scan', function(c) {
            document.getElementById('student_qrcode').value = c;
            document.forms[0].submit();

            document.getElementById('student_qrcode').reset();
        });
	
      document.oncontextmenu = document.body.oncontextmenu = function() {return false;}//disable right click