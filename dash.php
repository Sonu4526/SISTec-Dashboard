<?php include "index.html"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Minor Project</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

<script>
$(document).ready(function()
{
 
  //listen to dropdown for change
  $("#sel1").change(function(){
    //unhides current item
    $('#'+$(this).val()).show();
  });
  
});
</script>


</head>
<body>

	<!--- Content -->

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Team </label>
								<input type="text" placeholder="Enter your Team Name" class="form-control">
							</div>

							<div class="col-sm-6 form-group">
 								
                                <label for="sel1">Team Members </label>
                                <select class="form-control"  id="sel1">
                                <option value="sec1">1</option>
                                <option value="sec2">2</option>
                                <option value="sec3">3</option>
                                <option value="sec4">4</option>
                                <option value="sec5">5</option>
                                </select>

							</div>
						</div>
				

                        <div id="sec1"> 
						<!-- Details of Member 1 -->
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Team Member 1 :</label>
								
							</div>
							<div class="col-sm-9 form-group">
 								<hr style="border: 1px solid lightgrey;">
                               
							</div>
						</div>
                         
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Enrollment Number</label>
								<input type="text" placeholder="Enter your Enrollment No..." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
 								<label>Full Name</label>
								<input type="text" placeholder="Enter your Name..." class="form-control">
                               					
						    </div>
                        </div>


						<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-2 form-group">
							<label for="sel1">Section  </label>
                                <select class="form-control" id="sel1">
                                <option>A</option>
                                <option>B</option>
                                <option>IT</option>
                                </select>
                            </div>
							<div class="col-sm-5 form-group">
								<label>Email Id</label>
								<input type="text" placeholder="Enter your Email..." class="form-control">
							</div>
                            
							<div class="col-sm-5 form-group">
 								<label>Phone Number</label>
								<input type="text" placeholder="Enter your Number..." class="form-control">
                               
							</div>
						</div>
                       </div>
                    </div>





                    <hr>
                    





                      <div id="sec2" style="display: none;"> 
						<!-- Details of Member 1 -->
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Team Member 2 :</label>
								
							</div>
							<div class="col-sm-9 form-group">
 								<hr style="border: 1px solid lightgrey;">
                               
							</div>
						</div>
                         
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Enrollment Number</label>
								<input type="text" placeholder="Enter your Enrollment No..." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
 								<label>Full Name</label>
								<input type="text" placeholder="Enter your Name..." class="form-control">
                               					
						    </div>
                        </div>


						<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-2 form-group">
							<label for="sel1">Section  </label>
                                <select class="form-control" id="sel1">
                                <option>A</option>
                                <option>B</option>
                                <option>IT</option>
                                </select>
                            </div>
							<div class="col-sm-5 form-group">
								<label>Email Id</label>
								<input type="text" placeholder="Enter your Email..." class="form-control">
							</div>
                            
							<div class="col-sm-5 form-group">
 								<label>Phone Number</label>
								<input type="text" placeholder="Enter your Number..." class="form-control">
                               
							</div>
						</div>
                       </div>
                    </div>







                    <hr>

















                      <div id="sec3" style="display: none;"> 
						<!-- Details of Member 1 -->
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Team Member 3 :</label>
								
							</div>
							<div class="col-sm-9 form-group">
 								<hr style="border: 1px solid lightgrey;">
                               
							</div>
						</div>
                         
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Enrollment Number</label>
								<input type="text" placeholder="Enter your Enrollment No..." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
 								<label>Full Name</label>
								<input type="text" placeholder="Enter your Name..." class="form-control">
                               					
						    </div>
                        </div>


						<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-2 form-group">
							<label for="sel1">Section  </label>
                                <select class="form-control" id="sel1">
                                <option>A</option>
                                <option>B</option>
                                <option>IT</option>
                                </select>
                            </div>
							<div class="col-sm-5 form-group">
								<label>Email Id</label>
								<input type="text" placeholder="Enter your Email..." class="form-control">
							</div>
                            
							<div class="col-sm-5 form-group">
 								<label>Phone Number</label>
								<input type="text" placeholder="Enter your Number..." class="form-control">
                               
							</div>
						</div>
                       </div>
                    </div>









                    <hr>


















                      <div id="sec4" style="display: none;"> 
						<!-- Details of Member 1 -->
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Team Member 4 :</label>
								
							</div>
							<div class="col-sm-9 form-group">
 								<hr style="border: 1px solid lightgrey;">
                               
							</div>
						</div>
                         
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Enrollment Number</label>
								<input type="text" placeholder="Enter your Enrollment No..." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
 								<label>Full Name</label>
								<input type="text" placeholder="Enter your Name..." class="form-control">
                               					
						    </div>
                        </div>


						<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-2 form-group">
							<label for="sel1">Section  </label>
                                <select class="form-control" id="sel1">
                                <option>A</option>
                                <option>B</option>
                                <option>IT</option>
                                </select>
                            </div>
							<div class="col-sm-5 form-group">
								<label>Email Id</label>
								<input type="text" placeholder="Enter your Email..." class="form-control">
							</div>
                            
							<div class="col-sm-5 form-group">
 								<label>Phone Number</label>
								<input type="text" placeholder="Enter your Number..." class="form-control">
                               
							</div>
						</div>
                       </div>
                    </div>

                    




                    <hr>
















                      <div id="sec5" style="display: none;"> 
						<!-- Details of Member 1 -->
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Team Member 5 :</label>
								
							</div>
							<div class="col-sm-9 form-group">
 								<hr style="border: 1px solid lightgrey;">
                               
							</div>
						</div>
                         
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Enrollment Number</label>
								<input type="text" placeholder="Enter your Enrollment No..." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
 								<label>Full Name</label>
								<input type="text" placeholder="Enter your Name..." class="form-control">
                               					
						    </div>
                        </div>


						<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-2 form-group">
							<label for="sel1">Section  </label>
                                <select class="form-control" id="sel1">
                                <option>A</option>
                                <option>B</option>
                                <option>IT</option>
                                </select>
                            </div>
							<div class="col-sm-5 form-group">
								<label>Email Id</label>
								<input type="text" placeholder="Enter your Email..." class="form-control">
							</div>
                            
							<div class="col-sm-5 form-group">
 								<label>Phone Number</label>
								<input type="text" placeholder="Enter your Number..." class="form-control">
                               
							</div>
						</div>
                       </div>
                    </div>






                       <div class="col-sm-12">
						<div class="form-group">
							<label>Title</label>
							<textarea placeholder="Description of your Title.." rows="3" class="form-control"></textarea>
						</div>	
							
					<div class="form-group">
						<label>Technology</label>
						<input type="text" placeholder="Technology used.." class="form-control">
					</div>
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>

				</form> 
				</div>
	</div>
	</div>

</body>
</html>