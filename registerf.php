<link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet"  type="text/css" href="bootatrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/JQuery.js" ></script>
  <script  type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
	function show(i)
	{
		var obj=new XMLHttpRequest();
		obj.open("GET","city.php?s="+i.value,true);
		obj.send();
		obj.onreadystatechange=function()
		{
			document.getElementById('s').innerHTML=obj.responseText;
		}
	}
  </script>
  <div class="t">
<div class="panel panel-info" style="width:80%;margin-left:10%">
	<div class="panel-heading">
		<b>Business Registration</b>
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="panel-body">
				<b>JAY SHANKAR TRANSPORT</b>
				<form class="form-horizontal" method="get">
				<div class="form-group">
				 <div class="col-md-6 m-t-10">
						<label class="control-label">Name:</label>
						<div class="input-group">
							<span class="input-group-addon">
							</span><input type="text" style="width:300px" class="form-control"></input>
						</div>
						</div>
						<div class="col-md-6 m-t-10">
						<label class="control-label">Company Name:</label>
						<div class="input-group">
							<span class="input-group-addon">
							</span><input type="text" style="width:300px" class="form-control"></input>
						</div>
					</div>
					<div class="col-md-12 m-t-10">
						<label class="control-label">Address1:</label>
						<div class="input-group">
							<span class="input-group-addon">
							</span><input type="text"  class="form-control"></input>
						</div>
					</div3
					<div class="col-md-12 m-t-10">
						<label class="control-label">Address2:</label>
						<div class="input-group">
							<span class="input-group-addon">
							</span><input type="text" class="form-control"></input>
						</div>
					</div>

					<div class="col-md-6 m-t-10">
							<label class="control-label">State:</label>
						<select class="form-control" name="statename" onchange="show(this)" style="width:330px">
            <option hidden="hidden" value="">Select State</option>
                        <option value="Andaman and Nicobar Islands" data-id="1" >Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh" data-id="2" >Andhra Pradesh</option>
                        <option value="Arunachal Pradesh" data-id="3" >Arunachal Pradesh</option>
                        <option value="Assam" data-id="4" >Assam</option>
                        <option value="Bihar" data-id="5" >Bihar</option>
                        <option value="Chandigarh" data-id="6" >Chandigarh</option>
                        <option value="Chhattisgarh" data-id="7" >Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli" data-id="8" >Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu" data-id="9" >Daman and Diu</option>
                        <option value="Delhi" data-id="10" >Delhi</option>
                        <option value="Goa" data-id="11" >Goa</option>
                        <option value="Gujarat" data-id="12" >Gujarat</option>
                        <option value="Haryana" data-id="13" >Haryana</option>
                        <option value="Himachal Pradesh" data-id="14" >Himachal Pradesh</option>
                        <option value="Jammu and Kashmir" data-id="15" >Jammu and Kashmir</option>
                        <option value="Jharkhand" data-id="16" >Jharkhand</option>
                        <option value="Karnataka" data-id="17" >Karnataka</option>
                        <option value="Kerala" data-id="18" >Kerala</option>
                        <option value="Lakshadweep" data-id="19" >Lakshadweep</option>
                        <option value="Madhya Pradesh" data-id="20" >Madhya Pradesh</option>
                        <option value="Maharashtra" data-id="21" >Maharashtra</option>
                        <option value="Manipur" data-id="22" >Manipur</option>
                        <option value="Meghalaya" data-id="23" >Meghalaya</option>
                        <option value="Mizoram" data-id="24" >Mizoram</option>
                        <option value="Nagaland" data-id="25" >Nagaland</option>
                        <option value="Orissa" data-id="26" >Orissa</option>
                        <option value="Pondicherry" data-id="27" >Pondicherry</option>
                        <option value="Punjab" data-id="28" >Punjab</option>
                        <option value="Rajasthan" data-id="29" >Rajasthan</option>
                        <option value="Sikkim" data-id="30" >Sikkim</option>
                        <option value="Tamil Nadu" data-id="31" >Tamil Nadu</option>
                        <option value="Telangana" data-id="286" >Telangana</option>
                        <option value="Tripura" data-id="32" >Tripura</option>
                        <option value="Uttar Pradesh" data-id="33" >Uttar Pradesh</option>
                        <option value="Uttarakhand" data-id="34" >Uttarakhand</option>
                        <option value="West Bengal" data-id="35" >West Bengal</option>
                      </select>
						</div>
						<div class="col-md-6 m-t-10">
						<label class="control-label">City:</label>
							<select class="form-control" id="s" name="statename" style="width:330px">
            <option hidden="hidden" value="">Select City</option>
			</select>
						</div>

					<div class="col-md-12 m-t-10">
						<label class="control-label">Email:</label>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span><input type="email" class="form-control"></input>
						</div>
						</div>
					 <div class="col-md-6 m-t-10">
						<label class="control-label">Password:</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span>
							</span><input type="password" style="width:290px" class="form-control"></input>
						</div>
						</div>
						<div class="col-md-6 m-t-10">
						<label class="control-label">Confirm Password:</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span>
							</span><input type="password" style="width:290px" class="form-control"></input>
						</div>
						</div>
						<div class="col-md-6 m-t-10">
						<label class="control-label">Phone Number:</label>
						<div class="input-group">
							<span class="input-group-addon">
							</span><input type="text" style="width:300px" class="form-control"></input>
						</div>
						</div>
						<div class="col-md-6 m-t-10">
						<label class="control-label">Mobile Number:</label>
						<div class="input-group">
							<span class="input-group-addon">
							</span><input type="text" style="width:300px" class="form-control"></input>
						</div>
						<br>
					</div>
					
						<center><button class="btn btn-success">Register</button></center>
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
</div>