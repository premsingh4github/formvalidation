<!DOCTYPE html>
<html>
<head>
	<title>validation lab</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/formValidation.min.css">
</head>
<body>
	<div class="container">
	        <div class="row">
	            <div class="col-sm-8 col-sm-offset-2">
	                <div class="page-header">
	                    <h2>Bootstrap Form</h2>
	                </div>

                    <form id='myForm' class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Full name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="firstName" placeholder="First name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Last name</label>
                            
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Name</label>
                            
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="userName" placeholder="User Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                            </div>
                        </div>

                        
                    </form>
	                <form id="defaultForm" method="post" class="form-horizontal" action="target.php">
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">Full name</label>
	                        <div class="col-sm-4">
	                            <input type="text" class="form-control" name="firstName" placeholder="First name" />
	                        </div>
	                        <div class="col-sm-4">
	                            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">Username</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="username" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">Email address</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="email" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">Password</label>
	                        <div class="col-sm-5">
	                            <input type="password" class="form-control" name="password" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">Gender</label>
	                        <div class="col-sm-6">
	                            <div class="radio">
	                                <label>
	                                    <input type="radio" name="gender" value="male" /> Male
	                                </label>
	                            </div>
	                            <div class="radio">
	                                <label>
	                                    <input type="radio" name="gender" value="female" /> Female
	                                </label>
	                            </div>
	                            <div class="radio">
	                                <label>
	                                    <input type="radio" name="gender" value="other" /> Other
	                                </label>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-3 control-label" id="captchaOperation"></label>
	                        <div class="col-sm-2">
	                            <input type="text" class="form-control" name="captcha" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <div class="col-sm-6 col-sm-offset-3">
	                            <div class="checkbox">
	                                <label>
	                                    <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
	                                </label>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <div class="col-sm-9 col-sm-offset-3">
	                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/formValidationBootstrap.js"></script>
<script src="js/custom.js"></script>

</body>
</html>