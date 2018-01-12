<script type="text/javascript" src="validhf.js"></script>
<form method="post">
			<table>
			<caption>
			<font color="red" style="font:15pt Comic serif MS;
			text-shadow: 5px 5px 5px #1a1a00;
			color: red;"><img src="truck-icon.png" />&nbsp;POST&nbsp;YOUR&nbsp;LOAD&nbsp;</font>
				 </caption>
				 <tr>
				 	<td><label>Loading City</label><input id="lc" name="lc" type="text"/>
</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><label>Unloading City</label><input name="uc" id="uc" type="text"/></td>
				 </tr>
				 <tr><td><label>Loading Date</label><input type="text" id="ld" name="ld"></td><td>
				 	
 <label>Truck Size</label>

          <select style="width:175px;height:25px" name="ts" id="ts">

            <option hidden="hidden" value="">Select One Option</option>

            
            <option value="4">Weight 2.5 MT, Size 9'x6'x6',  TATA407 </option>

            
            <option value="5">Weight 3.5 MT, Size 14'x6'x6', CANTER </option>

            
            <option value="6">Weight 5.0 MT, Size 17'x6'x6', CANTER </option>

            
            <option value="7">Weight 7.5 MT, Size 19'x6'x6', LPT </option>

            
            <option value="8">Weight 9.0 MT, Size 18'x7'x7', 6 WHEELER TRUCK </option>

            
            <option value="9">Weight 14.0 MT, Size 32'x8'x8', CONTAINER XXL </option>

            
            <option value="10">Weight 15.0 MT, Size 22'x7'x7', 10 WHEELER TRUCK </option>

            
            <option value="11">Weight 20.0 MT, Size 24'x7'x7', 12 WHEELER TRUCK </option>

            
            <option value="14">Weight 26.0 MT, Size 40'x8'x7', TRAILER  </option>

            
            <option value="15">Weight 32.0 MT, Size 40'x8'x7', TRAILER </option>

            
            <option value="18">Weight 8 MT, Size 28'x8'x8', JCB LORRY </option>

            
            <option value="19">Weight 27 MT, Size 40'x8'x8', TRAILER </option>

            
            <option value="20">Weight 22 MT, Size 40'x8'x7', TRAILER </option>

            
            <option value="21">Weight 7.0 MT, Size 32'x8'x8', CONTAINER XL </option>

            
            <option value="22">Weight 6.5MT, Size 20'x8'x8', CONTAINER </option>

            
            <option value="23">Weight 8MT, Size 24'x8'x8', CONTAINER </option>

            
            <option value="26">Weight 9MT, Size 20'x8'x8', OPEN TRUCK </option>

            
            <option value="27">Weight 15MT, Size 22'x8'x8', OPEN TRUCK </option>

            
            <option value="28">Weight  25 MT, Size 28'x8'x7'  </option>

            
          </select>
				 </td></tr>

<tr>
	<td>
		<label>Material Weight (Tons)</label><input type="text" id="mw" name="mw">
	</td>
	<td>
		
		<label>Truck Type</label>

          <select style="width:175px;height:25px" name="truck_body">

            <option hidden="hidden" value="">Select One Option</option>

            
            <option value="1">Open Half Body</option>

            
            <option value="2">Open Full Body</option>

            
            <option value="5">Container</option>

            
            <option value="6">Flat Bed Trailer</option>

            
            <option value="7">Half Body Trailer</option>

            
            <option value="8">Semi Bed Trailer</option>

            
            <option value="9">Low Bed Trailer</option>

            
            <option value="10">TATA 407</option>

            
            <option value="11">CANTER</option>

            
            <option value="12">LPT</option>

            
            <option value="13">JCB LORRY</option>

            
            <option value="15">OPEN TRUCK</option>

            
            <option value="16">Hydraulic Axle</option>

            
            <option value="17">Ghoda</option>

            
          </select>
	</td>
</tr>
<tr>
<td>
	<label>Material Description</label>

          <textarea style="width:175px;" rows="1" id="md" name="md"></textarea>

</td>
	<td>
		 <label>Payment Terms</label>

          <select style="width:175px;height:25px" id="pt" name="pt">

            <option value="">Select One Option</option>

            
            <option value="10">Payment at loading time </option>

            
            <option value="9">Payment immediately upon delivery </option>

            
          </select>
	</td>
	<tr>
		<td><label>Mobile No.</label><input name="mn" id="mn" onblur="vmn()" onfocus="e1()" type="text"/>
</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
<label>Email:</label><input name="em" id="em" onfocus="e()" onblur="vem()" type="text"/></td>
	</tr>
</tr>
<tr>
    <td colspan="2">
    <center>
        <button type="submit" class="btn btn-success">Submit</button>
    </center>
    </td>
</tr>
</table>
</form>