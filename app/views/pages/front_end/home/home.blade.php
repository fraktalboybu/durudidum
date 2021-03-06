@extends('layouts.front_end.front_layout')
@section('content')
<section>
	<div class="s_big_scenery"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div style="height: 350px;">
					<div class="s_tbl">
						<div class="s_cl">
							<span class="s_logo_only_white"></span>
							<div class="row">
								<div class="col-md-6 col-md-push-3">
									<p class="s_tagline" style="margin-top: 20px;">
										Your one click solution to reach the otherside of the world.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 

				<div class="s_quick_search">
					<ul class="s_quick_search_menu">
						<li>
							<a href="javascript:void(0)" id="f_0">Flight</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="f_1">Hotel</a>
						</li>
						<li class="s_quick_active">
							<a href="javascript:void(0)" id="f_2">Flight + Hotel</a>
						</li>
					</ul>
					
					<div class="s_quick_search_form hidden" id="f_0">
						<div class="s_cell_1-3">
							<div class="s_title">
								<span class="s_number">
									01
								</span>
								<span class="s_caption">
									City Destination
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Depart From</label>
												<input type="text" class="form-control s_city_dest_input" id="departFrom1" placeholder=""><span class="house_32"></span>
												<table class="table table-bordered table-striped">
													<tbody class="f_table_search1" id="searchContent1">
															<style>
															.f_table_search1 > tr:active > td {
																background-color: #E8CD02 !important;
															}
															</style>
													</tbody>
												</table>

											</div>
											<div class="form-group">
												<label for="">Arrive In</label>
												<input type="text" class="form-control s_city_dest_input" id="arriveIn1" placeholder=""><span class="house_32"></span>
												<table class="table table-bordered table-striped">
													<tbody class="f_table_search1A" id="searchContent1A">
															<style>
															.f_table_search1A > tr:active > td {
																background-color: #E8CD02 !important;
															}
															</style>
													</tbody>
												</table>
											</div>
									</div>
								</div>
							</div>

						</div>
						<div class="s_cell_1-3">
							<!-- <span class="s_seprtr s_left"></span>
							<span class="s_seprtr s_right"></span> -->
							<div class="s_title">
								<span class="s_number">
									02
								</span>
								<span class="s_caption">
									Flight Time
								</span>
								<div style="width: 140px; float: right;">
									<div class="radio">
										<label>
											<input type="radio" name="trip_type" id="f_rad_oneway" value="option1" checked>
											One-way
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="trip_type" id="f_rad_roundtrip" value="option2">
											Round Trip
										</label>
									</div>
								</div>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
											<div class="form-group" id="f_trip_type_oneway">
												<label for="">Depart Date</label>
												<input type="text" class="form-control s_flight_time_input" id="f_depart_date" placeholder=""><span class="clock_32"></span>
											</div>
											<div class="form-group hidden" id="f_trip_type_roundtrip">
												<label for="">Return Date</label>
												<input type="text" class="form-control s_flight_time_input" id="f_return_date" placeholder=""><span class="clock_32"></span>
											</div>
										<script>
										jQuery('#f_depart_date').datetimepicker({
											lang:'en',
											i18n:{
												de:{
													months:[
													'January','February','March','April',
													'May','June','July','August',
													'September','October','November','December',
													],
													dayOfWeek:[
													"Sun", "Mon", "Tue", "Wed", 
													"Thur", "Fri", "Sat",
													]
												}
											},
											timepicker:false,
											format:'d.m.Y',
 											minDate:'0',//yesterday is minimum date(for today use 0 or -1970/01/01)
 										});
										jQuery('#f_return_date').datetimepicker({
											lang:'en',
											i18n:{
												de:{
													months:[
													'January','February','March','April',
													'May','June','July','August',
													'September','October','November','December',
													],
													dayOfWeek:[
													"Sun", "Mon", "Tue", "Wed", 
													"Thur", "Fri", "Sat",
													]
												}
											},
											timepicker:false,
											format:'d.m.Y',
 											minDate:'0',//yesterday is minimum date(for today use 0 or -1970/01/01)
 										});
										</script>
										<script>
										$('[name="trip_type"]').click(function() {
										   if($('#f_rad_oneway').is(':checked')){ 
										   		$('#f_trip_type_oneway').removeClass('hidden');
										   		$('#f_trip_type_roundtrip').addClass('hidden');
										   }else{
										   		$('#f_trip_type_roundtrip').removeClass('hidden');
										   		$('#f_trip_type_oneway').removeClass('hidden');
										   }
										});
										</script>
									</div>
								</div>
							</div>
						</div>
						<div class="s_cell_1-3">
							<div class="s_title">
								<span class="s_number">
									03
								</span>
								<span class="s_caption">
									Passenger Ticket
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Adults</label>
												<input type="text" class="form-control" id="" value="1">
											</div>
									</div>
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Kids</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
									</div>
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Infants</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Rooms</label>
												<select class="form-control"> 
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</div>
									</div>
									<div class="col-xs-6 col-xs-push-2">
											<div class="form-group">
												<label for="">&nbsp;</label>
											</form>
												<button class="btn btn-success col-xs-12">
													Find Your Ticket
												</button>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="s_quick_search_form hidden" id="f_1">
						<div class="s_cell_1-2">
							<span class="s_seprtr s_right"></span>
							<div class="s_title">
								<span class="s_number">
									01
								</span>
								<span class="s_caption">
									City Destination
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-8 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Location</label>
												<input type="text" class="form-control s_indent_20" id="location" placeholder=""><span class="house_32"></span>
												<table class="table table-bordered table-striped">
													<tbody class="f_table_search2" id="searchContent2">
															<style>
															.f_table_search2 > tr:active > td {
																background-color: #E8CD02 !important;
															}
															</style>
													</tbody>
												</table>
											</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-xs-push-2">

										<div class="form-group">
											<label for="">Depart Date</label>
											<input type="text" class="form-control s_indent_20" id="f_checkin_date" placeholder=""><span class="clock_32"></span>
										</div>
									</div>
									<div class="col-xs-4 col-xs-push-2">


										<div class="form-group">
											<label for="">Night Stay</label>
											<input type="text" class="form-control" id="f_checkout_date" placeholder=""></span>
										</div>
									</div>
									<script>
									jQuery('#f_checkin_date').datetimepicker({
										lang:'en',
										i18n:{
											de:{
												months:[
												'January','February','March','April',
												'May','June','July','August',
												'September','October','November','December',
												],
												dayOfWeek:[
												"Sun", "Mon", "Tue", "Wed", 
												"Thur", "Fri", "Sat",
												]
											}
										},
										timepicker:false,
										format:'d.m.Y',
 											minDate:'0',//yesterday is minimum date(for today use 0 or -1970/01/01)
 										});
									</script>
								</div>
							</div>
						</div>
						<div class="s_cell_1-2">
							<div class="s_title">
								<span class="s_number">
									02
								</span>
								<span class="s_caption">
									Order Detail
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Adults</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
									</div>
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Kids</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
									</div>
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Infants</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Rooms</label>
												<select class="form-control"> 
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</div>
									</div>
									<div class="col-xs-6 col-xs-push-2">
											<div class="form-group">
												<label for="">&nbsp;</label>
										</form>
												<button class="btn btn-success col-xs-12">
													Find Your Ticket<!--hotel-->
												</button>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="s_quick_search_form" id="f_2">
						<div class="s_cell_1-3">
							<div class="s_title">
								<span class="s_number">
									01
								</span>
								<span class="s_caption">
									City Destination
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Depart From</label>
												<input type="hidden" id="depart_flight_hotel">
												<input type="text" class="form-control s_city_dest_input" id="departFrom" placeholder=""><span class="house_32"></span>
												<table class="table table-bordered table-striped">
													<tbody class="f_table_search" id="searchContent">
															<style>
															.f_table_search > tr:active > td {
																background-color: #E8CD02 !important;
															}
															</style>
													</tbody>
												</table>

											</div>
											<div class="form-group">
												<label for="">Arrive In</label>
												<input type="hidden" id="arrive_flight_hotel">
												<input type="text" class="form-control s_city_dest_input" id="arriveIn" placeholder=""><span class="house_32"></span>
												
												<table class="table table-bordered table-striped">
													<tbody class="f_table_searchA" id="searchContentA">
															<style>
															.f_table_searchA > tr:active > td {
																background-color: #E8CD02 !important;
															}
															</style>
													</tbody>
												</table>
											</div>
									</div>
								</div>
							</div>

						</div>
						<div class="s_cell_1-3">
							<!-- <span class="s_seprtr s_left"></span>
							<span class="s_seprtr s_right"></span> -->
							<div class="s_title">
								<span class="s_number">
									02
								</span>
								<span class="s_caption">
									Flight Time
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
											<div class="form-group">
												<label for="">Depart Date</label>
												<input type="text" class="form-control s_flight_time_input" id="f_fdepart_date" placeholder=""><span class="clock_32"></span>
											</div>
											<div class="form-group">
												<label for="">Return Date</label>
												<input type="text" class="form-control s_flight_time_input" id="f_freturn_date" placeholder=""><span class="clock_32"></span>
											</div>
										<script>
										jQuery('#f_fdepart_date').datetimepicker({
											lang:'en',
											i18n:{
												de:{
													months:[
													'January','February','March','April',
													'May','June','July','August',
													'September','October','November','December',
													],
													dayOfWeek:[
													"Sun", "Mon", "Tue", "Wed", 
													"Thur", "Fri", "Sat",
													]
												}
											},
											timepicker:false,
											format:'d.m.Y',
 											minDate:'0',//yesterday is minimum date(for today use 0 or -1970/01/01)
 										});
										jQuery('#f_freturn_date').datetimepicker({
											lang:'en',
											i18n:{
												de:{
													months:[
													'January','February','March','April',
													'May','June','July','August',
													'September','October','November','December',
													],
													dayOfWeek:[
													"Sun", "Mon", "Tue", "Wed", 
													"Thur", "Fri", "Sat",
													]
												}
											},
											timepicker:false,
											format:'d.m.Y',
 											minDate:'0',//yesterday is minimum date(for today use 0 or -1970/01/01)
 										});
										</script>
									</div>
								</div>
							</div>
						</div>
						<div class="s_cell_1-3">
							<div class="s_title">
								<span class="s_number">
									03
								</span>
								<span class="s_caption">
									Passenger Ticket
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 20px;">
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Adults</label>
												<input type="text" class="form-control" id="f_adults" placeholder="" value="1">
											</div>
									</div>
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Kids</label>
												<input type="text" class="form-control" id="f_kids" placeholder="">
											</div>
									</div>
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Infants</label>
												<input type="text" class="form-control" id="f_infants" placeholder="">
											</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
											<div class="form-group">
												<label for="">Rooms</label>
												<select class="form-control" id="f_rooms"> 
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</div>
									</div>
									<div class="col-xs-6 col-xs-push-2">
											<div class="form-group">
												<label for="">&nbsp;</label>
										</form>
												<button class="btn btn-success col-xs-12" id="find_flight_hotel">
													Find Your Ticket <!-- flight and hotel -->
												</button>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<script>
				$('body').on('click','.s_quick_search_menu > li > a', function(){
					var id = $(this).attr('id');
					$(this).parent().addClass('s_quick_active');
					$(this).parent().siblings().removeClass('s_quick_active');
					$(this).closest('.s_quick_search').children('.s_quick_search_form').addClass('hidden');
					$(this).closest('.s_quick_search').children('#'+ id +'').removeClass('hidden');
				});
				</script>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 30px;">
		<div class="row">
			<div class="col-md-12">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
</section>
<script>
	<!-- click button flight and hotel -->
	$('body').on('click', '#find_flight_hotel', function(){
		var id_depart = $('#depart_flight_hotel').val(); //id depart
		var id_arrive = $('#arrive_flight_hotel').val(); //id arrive
		var depart_date = $('#f_fdepart_date').val(); //depart date
		var return_date = $('#f_freturn_date').val(); //return date
		var adults = $('#f_adults').val(); //banyak adults
		var kids = $('#f_kids').val(); //banyak kids
		var infants = $('#f_infants').val(); //banyak infants		
		var rooms = $('#f_rooms option:selected' ).text(); //banyak rooms
		
		// session_start();
		// $_SESSION['id_depart']=id_depart;
		// $_SESSION['id_arrive']=id_arrive;
		// $_SESSION['depart_date']=depart_date;
		// $_SESSION['return_date']=return_date;
		// $_SESSION['adults']=adults;
		// $_SESSION['kids']=kids;
		// $_SESSION['infants']=infants;
		// $_SESSION['rooms']=rooms;
						
		//window.location = "http://localhost/durudidum_new/public/test/search_flight_hotel?"+"id_depart="+id_depart+"&id_arrive="+id_arrive+"&depart_date="+depart_date+"&return_date="+return_date+"&adults="+adults+"&kids="+kids+"&infants="+infants+"&rooms="+rooms;
		window.location = "http://localhost/durudidum_new/public/test/search_flight_hotel";
	});
	

	var trigger = false;
	$('body').on('keyup','#departFrom',function()
	{
		trigger = false;
		$('#searchContent').html("");
		$keyword = $('#departFrom').val();
		$data = "";
		$.ajax({
			type: 'GET',
			url: '{{URL::route('allAirport')}}',
			data: {
				'keyword' : $keyword
			},
			success: function(response){
				$data = "";
				$.each(response , function(i,resp)
				{
					
					$data = $data + "<tr id='row_"+resp.id + "' class='search_row' style='border-bottom: 1px solid #000 !important;' data-dismiss='modal'><td><span style='display: block;'>";
					$data = $data + "<td>"+resp.nama_bandara+" ( "+resp.kode_bandara + " ) - "+ resp.city.nama_kota;
					$data = $data + "</td><input type='hidden' value='"+resp.id+"' />";
					$data = $data + "</tr>";
				});
				if(trigger == false){
					$('#searchContent').html($data);
					//$('#f_table_suggestion_pelanggan').removeClass('hidden');
					$('#searchContent').removeClass('hidden');
				}
			},error: function(xhr, textStatus, errorThrown){
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
				alert("responseText: "+xhr.responseText);
			}
		},'json');
	});
	
	$('body').on('click','#searchContent > tr > td',function(){
		//alert($(this).text());
		//alert($(this).next().val());
		$('#depart_flight_hotel').val($(this).next().val());
		$('#departFrom').val($(this).text());
		trigger = true;
		//$('#f_table_suggestion_pelanggan ').addClass('hidden');
		$('#searchContent').addClass('hidden');
	});
	
	$('body').on('keyup','#arriveIn',function()
	{
		trigger = false;
		$('#searchContentA').html("");
		$keyword = $('#arriveIn').val();
		$data = "";
		$.ajax({
			type: 'GET',
			url: '{{URL::route('allAirport')}}',
			data: {
				'keyword' : $keyword
			},
			success: function(response){
				$data = "";
				$.each(response , function(i,resp)
				{
					
					$data = $data + "<tr id='row_"+resp.id + "' class='search_row' style='border-bottom: 1px solid #000 !important;' data-dismiss='modal'><td><span style='display: block;'>";
					$data = $data + "<td>"+resp.nama_bandara+" ( "+resp.kode_bandara + " ) - "+ resp.city.nama_kota;
					$data = $data + "</td><input type='hidden' value='"+resp.id+"' />";
					$data = $data + "</tr>";
				});
				if(trigger == false){
					$('#searchContentA').html($data);
					//$('#f_table_suggestion_pelanggan').removeClass('hidden');
					$('#searchContentA').removeClass('hidden');
				}
			},error: function(xhr, textStatus, errorThrown){
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
				alert("responseText: "+xhr.responseText);
			}
		},'json');
	});
	
	$('body').on('click','#searchContentA > tr > td',function(){
		//alert($(this).text());
		//alert($(this).next().val());
		$('#arrive_flight_hotel').val($(this).next().val());
		$('#arriveIn').val($(this).text());
		trigger = true;
		//$('#f_table_suggestion_pelanggan ').addClass('hidden');
		$('#searchContentA').addClass('hidden');
	});
	
	$('body').on('keyup','#departFrom1',function()
	{
		trigger = false;
		$('#searchContent1').html("");
		$keyword = $('#departFrom1').val();
		$data = "";
		$.ajax({
			type: 'GET',
			url: '{{URL::route('allAirport')}}',
			data: {
				'keyword' : $keyword
			},
			success: function(response){
				$data = "";
				$.each(response , function(i,resp)
				{
					
					$data = $data + "<tr id='row_"+resp.id + "' class='search_row' style='border-bottom: 1px solid #000 !important;' data-dismiss='modal'><td><span style='display: block;'>";
					$data = $data + "<td>"+resp.nama_bandara+" ( "+resp.kode_bandara + " ) - "+ resp.city.nama_kota;
					$data = $data + "</td></tr>";
				});
				if(trigger == false){
					$('#searchContent1').html($data);
					//$('#f_table_suggestion_pelanggan').removeClass('hidden');
					$('#searchContent1').removeClass('hidden');
				}
			},error: function(xhr, textStatus, errorThrown){
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
				alert("responseText: "+xhr.responseText);
			}
		},'json');
	});
	
	$('body').on('click','#searchContent1 > tr > td',function(){
		//alert($(this).text());
		$('#departFrom1').val($(this).text());
		trigger = true;
		//$('#f_table_suggestion_pelanggan ').addClass('hidden');
		$('#searchContent1').addClass('hidden');
	});
	
	$('body').on('keyup','#arriveIn1',function()
	{
		trigger = false;
		$('#searchContent1A').html("");
		$keyword = $('#arriveIn1').val();
		$data = "";
		$.ajax({
			type: 'GET',
			url: '{{URL::route('allAirport')}}',
			data: {
				'keyword' : $keyword
			},
			success: function(response){
				$data = "";
				$.each(response , function(i,resp)
				{
					
					$data = $data + "<tr id='row_"+resp.id + "' class='search_row' style='border-bottom: 1px solid #000 !important;' data-dismiss='modal'><td><span style='display: block;'>";
					$data = $data + "<td>"+resp.nama_bandara+" ( "+resp.kode_bandara + " ) - "+ resp.city.nama_kota;
					$data = $data + "</td></tr>";
				});
				if(trigger == false){
					$('#searchContent1A').html($data);
					//$('#f_table_suggestion_pelanggan').removeClass('hidden');
					$('#searchContent1A').removeClass('hidden');
				}
			},error: function(xhr, textStatus, errorThrown){
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
				alert("responseText: "+xhr.responseText);
			}
		},'json');
	});
	
	$('body').on('click','#searchContent1A > tr > td',function(){
		//alert($(this).text());
		$('#arriveIn1').val($(this).text());
		trigger = true;
		//$('#f_table_suggestion_pelanggan ').addClass('hidden');
		$('#searchContent1A').addClass('hidden');
	});
	
	$('body').on('keyup','#location',function()
	{
		trigger = false;
		$('#searchContent2').html("");
		$keyword = $('#location').val();
		$data = "";
		$.ajax({
			type: 'GET',
			url: '{{URL::route('allCities')}}',
			data: {
				'keyword' : $keyword
			},
			success: function(response){
				$data = "";
				$.each(response , function(i,resp)
				{
					$area = "";
					if(resp.nama_area == '-')
					{
						$area = "";
					}else
					{
						$area = " , "+resp.nama_area;
					}
					$data = $data + "<tr id='row_"+resp.id + "' class='search_row' style='border-bottom: 1px solid #000 !important;' data-dismiss='modal'><td><span style='display: block;'>";
					$data = $data + "<td>"+resp.nama_kota+$area;
					$data = $data + "</td></tr>";
				});
				if(trigger == false){
					$('#searchContent2').html($data);
					//$('#f_table_suggestion_pelanggan').removeClass('hidden');
					$('#searchContent2').removeClass('hidden');
				}
			},error: function(xhr, textStatus, errorThrown){
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
				alert("responseText: "+xhr.responseText);
			}
		},'json');
	});
	
	$('body').on('click','#searchContent2 > tr > td',function(){
		//alert($(this).text());
		$('#location').val($(this).text());
		trigger = true;
		//$('#f_table_suggestion_pelanggan ').addClass('hidden');
		$('#searchContent2').addClass('hidden');
	});
	
	$('body').on('click',function(){
		//alert($(this).text());
		trigger = true;
		//$('#f_table_suggestion_pelanggan ').addClass('hidden');
		$('#searchContent').addClass('hidden');
		$('#searchContentA').addClass('hidden');
		$('#searchContent1').addClass('hidden');
		$('#searchContent1A').addClass('hidden');
		$('#searchContent2').addClass('hidden');
	});
</script>
@stop