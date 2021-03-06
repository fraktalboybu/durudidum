@extends('layouts.front_end.front_layout')
@section('content')
<section>

	<div class="s_big_infoboard">
		<div class="container">
			<div class="row"> 
				<div class="col-md-3">
					<span>
						Jenis Pencarian (Flight, Hotel, Flight + Hotel)
					</span>
				</div>
				<div class="col-md-6">
					<span>
						Round Trip (or not)
					</span>
					<span>
						IATA Asal (JKT)
					</span>
					<span>
						Kota Asal (Jakarta, Indonesia)
					</span>
					<span>
						IATA Tujuan (LAX)
					</span>
					<span>
						Kota Tujuan (Los Angeles, USA)
					</span>
					<span>
						Waktu Pergi (24 Dec 2014)
					</span>
					<span>
						Waktu Pulang (24 Jan 2015)
					</span>

				</div>
				<div class="col-md-3">

					<span>
						Jumlah Adult (0)
					</span>
					<span>
						Jumlah Kids (0)
					</span>
					<span>
						Jumlah Infants (0)
					</span>

				</div>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							Airline
						</th>
						<th>
							Departure
						</th>
						<th>
							Arrival
						</th>
						<th>
							Facility
						</th>
						<th>
							Duration
						</th>
						<th>
							Price / Person
						</th>
						<th>
						</th>
					</tr>
				</thead>
				<tbody class="f_tbody_search_flight">
					<tr data-toggle="modal" data-target=".pop_up_view_flight">
						<td>
							<img src="" class="" width="64" height="64">
							Garuda Indonesia
						</td>
						<td>
							14:45 Jakarta (CGK)
						</td>
						<td>
							17:35 Bali
						</td>
						<td>
							<img src="" width="32" height="32">
						</td>
						<td>
							1h 50m Non-stop
						</td>
						<td>
							IDR 525.000
						</td>
						<td>
							<a href="#" class="btn btn-warning">Book Now!</a>
						</td>
					</tr>
					<tr data-toggle="modal" data-target=".pop_up_view_flight">
						<td>
							<img src="" class="" width="64" height="64">
							Garuda Indonesia 
						</td>
						<td>
							14:45 Jakarta (CGK)
						</td>
						<td>
							17:35 Bali
						</td>
						<td>
							<img src="" width="32" height="32">
						</td>
						<td>
							1h 50m Non-stop
						</td>
						<td>
							IDR 525.000
						</td>
						<td>
							<a href="#" class="btn btn-warning">Book Now!</a>
						</td>
					</tr>
				</tbody>
			</table>
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

@include('pages.front_end.search_flight.pop_up_view_flight')
@stop