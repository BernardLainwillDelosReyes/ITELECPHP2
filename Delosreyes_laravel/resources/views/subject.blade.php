@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">My Subjects</div>

				<div class="panel-body">
					<table class ="table table-hover table-striped">
						<thead>
							<tr>
								<th>Sched No.</th>
								<th>Course</th>
								<th>Time</th>
								<th>Days</th>
								<th>Room</th>
								<th>Units</th>
							</tr>
						<tbody>
							<tr>
								<td>IT-02600</td>
								<td>ITELECPHP2	LAB</td>
								<td>7:31 - 8:31 PM</td>
								<td>MWF</td>
								<td>544</td>
								<td></td>
							</tr>
							<tr>
								<td>-</td>
								<td>ITELECPHP2</td>
								<td>6:31 - 7:31 PM</td>
								<td>MWF</td>
								<td>530A</td>
								<td>3.0</td>
							</tr>
							<tr>
								<td>IT-02485</td>
								<td>CAPSTONE41</td>
								<td>7:30 - 9:00 AM</td>
								<td>TTH</td>
								<td>537</td>
								<td>3.0</td>
							</tr>
							<tr>
								<td>IT-01552</td>
								<td>FREEELCIS</td>
								<td>3:00 - 4:30 PM</td>
								<td>TTH</td>
								<td>536 C</td>
								<td>3.0</td>
							</tr>
							<tr>
								<td>IT-02543</td>
								<td>PRACT41</td>
								<td>12:00 - 3:00 PM</td>
								<td>TTH</td>
								<td>FLD</td>
								<td>6.0</td>
							</tr>
						</tbody>
      					</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
