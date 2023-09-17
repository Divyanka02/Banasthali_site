<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Student Data Entry Portal, Student Result Management System In PPHP Mysql" />
    <meta name="author" content="Sudhanshu Pandey" />
    <title>STUDENT DATA ENTRY PORTAL - Result</title>
   <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- CUSTOM STYLE CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
     
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:500&subset=devanagari,latin" rel="stylesheet" type="text/css"/>
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <style>
  <style>
  body{
    font-family: 'Roboto', sans-serif;
	background-image:    url(../6subjects/images/a+e+d+resultbg.jpg);
    background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;              /* optional, center the image */
	}
</style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   
</head>
<body>
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

<div class="panel-body">
	<form action="result_hosting_form_action.php" role="form">
	
	<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                            <input type="text" name="sn" id="fname" class="form-control" placeholder="Smart ID.." required/>
                                        </div>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" name="stn" id="lname" class="form-control" placeholder="Full Name Of Student" required/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                            <input type="text" name="fn" id="login" class="form-control" placeholder="Full Name Of Father.." required/>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="date" data-date="" data-date-format="DD MMMM YYYY" placeholder="MM/DD/YYYY" name="dob" id="login" class="form-control" min="1990-01-01" max="2018-12-31" required/>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                                           <select class="form-control" name="gen" id="status" required>
  <option value="">-------------Slect Gender-------------</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
                                       
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="hin" id="login" class="form-control" placeholder="Computer Marks" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="eng" id="login" class="form-control" placeholder="English Marks" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="math" id="login" class="form-control" placeholder="Maths Marks" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="phy" id="login" class="form-control" placeholder="Physics Marks" required/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="chem" id="login" class="form-control" placeholder="Chemistry Marks" required/>
                                        </div>
                                    
                                     
                                     
                                     <div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<div class="checkbox">
  <label><input type="checkbox" value="Agreed" required><strong class="label label-primary">I Agree</strong></label>..<a href="#" data-toggle="modal" data-target="#t_and_c_m"><strong class="label label-danger">Terms and Conditions</a></strong> 
</div>
				
					</span>
				</div>
				
			</div>
            
                                    <hr />
                                    
                                     <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Submit Data</button> Or  <button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span> Reset The Form</button>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/plugins/bootstrap.js"></script>
    <script language="javascript" type="text/javascript">   
document.write("<div style='display:none;'>");   
</script><div>   
<h1><a href="http://resulthosting.in" title="Result Hosting" name="Result Hosting">Result Hosting</a></h1>
<h2><a href="https://resulthosting.in" title="Result Hosting" name="Result Hosting">Result Hosting</a></h2>  </div>
<script language="javascript" type="text/javascript">   
document.write("</div>");   
</script>
</div> 
</div> 
</body>
</html>