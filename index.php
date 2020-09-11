<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />    
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
	<title>Request Hotspot Account</title>
	
	<!-- Pakai jquery biar bisa tanpa ngeload halaman lainnya saat diproses -->
	<script src="asset/jquery-3.4.1.min.js"></script>
	
	<!-- Pakai Bootstrap Biar Lebih Ganteng -->
	<link rel="stylesheet" href="asset/bootstrap.min.css" />
	<script src="asset/bootstrap.min.js"></script>
	
	<!-- Coding Proses Jquerynya -->
	<script src="asset/coding_jquerynya.js"></script>
</head>
<body >

        <div >
            <div class="row"><br></div>
            <div class="row">
                <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                            <h3 class="text-center mb-4">TAZKIASPOT MATRICULATION<br><small>Hotspot Account Request Form</small></h3>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                                  </li>
                                  <!-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lecturer</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Staff</a>
                                  </li> -->
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <br>
                                    <form name="mahasiswaForm" action="" method="post">
                                        <fieldset>
                                            <div class="form-group has-error">
                                                <input class="form-control input-lg" placeholder="Full Name *" type="text" id="nama" autofocus required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="NIM *" type="number" id="nim" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Email *"  type="email" id="email" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Generation *" type="number" id="angk" required>
                                            </div>
                                            <!-- <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Mac Address (Optional) e.g. 38:2F:0C:8B:41:E5" name="mac" value="" type="text" id="mac">
                                            </div> -->
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="No WA" type="number" id="telp" required>
                                            </div>
                                            <!-- <input class="btn btn-lg btn-primary btn-block" value="Send" type="submit" name="mhsSubmit"><br> -->
			<div class="form-group">
				<button type="button" id="btn_proses" class="btn btn-lg btn-primary btn-block" onClick='proses_kirim($("#nama").val(),$("#nim").val(),$("#email").val(),$("#angk").val(),$("#telp").val());' >Send</button>
				&nbsp;
				<button type="button" id="btn_reset" class="btn btn-lg btn-warning btn-block" onClick='reset_inputan();' >Reset</button>
			</div> 
			<div class="form-group">
				Status : <span id="status_pengiriman"></span>
			</div>                                           
                                        </fieldset>
                                    </form>      
                                  </div>
                                  <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <br>
                                    <form name="dosenForm" action="" method="post">
                                        <fieldset>
                                            <div class="form-group has-error">
                                                <input class="form-control input-lg" placeholder="Full Name *" name="nama" type="text" id="dsender" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="NIK *" name="nik" type="number" id="dsender" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Email *" name="dsender" type="email" id="dsender" value="" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Mac Address (Optional) e.g. 38:2F:0C:8B:41:E5" name="mac" value="" type="text" id="dsender">
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="No WA (optional)" name="telp" value="" type="number" id="dsender">
                                            </div>
                                            <input class="btn btn-lg btn-primary btn-block" value="Send" type="submit" name="dsnSubmit">
                                        </fieldset>
                                    </form>       
                                  </div>
                                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                  <br>
                                    <form name="staffForm" action="" method="post">
                                        <fieldset>
                                            <div class="form-group has-error">
                                                <input class="form-control input-lg" placeholder="Full Name *" name="nama" type="text" id="dsender" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="NIK *" name="nik" type="number" id="dsender" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Email *" name="dsender" type="email" id="dsender" value="" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Division *" name="div" value="" type="text" id="dsender" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="Mac Address (Optional) e.g. 38:2F:0C:8B:41:E5" name="mac" value="" type="text" id="dsender">
                                            </div>
                                            <div class="form-group has-success">
                                                <input class="form-control input-lg" placeholder="No WA (optional)" name="telp" value="" type="number" id="dsender">
                                            </div>
                                            <input class="btn btn-lg btn-primary btn-block" value="Send" type="submit" name="stfSubmit">
                                        </fieldset>
                                    </form>       
                                  </div> -->
                                </div>                            
                        </div>
                </div>
            </div>
        </div>
</body>
</html>