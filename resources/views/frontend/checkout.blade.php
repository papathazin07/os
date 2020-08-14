@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3">Check Out</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Electric Guitar</td>
								<td>$230</td>
								<td>2</td>
								<td>$460</td>
							</tr>
							<tr>
								<td colspan="4">Total</td>
								<td>$460</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection