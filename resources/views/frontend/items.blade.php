@extends('frontendtemplate')
@section('sidebar')
	@include('frontend.sidebar')
@endsection
@section('content')
<div class="col-lg-9">
	<h2 id="name"> </h2>

	<div id="myItems" class="row">
		
	</div>

	
</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			showItems(0);

			function showItems(id){
			$.post("{{route('getitems')}}",{sid:id},function(res){
				// console.log(res);
				var html='';
				$.each(res,function(i,v){
					var url = '/itemdetail/'+v.id;
					html+=`<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="${v.photo}" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">${v.name}</a>
					</h4>
					<h5>${v.price}</h5>
					<p class="card-text">${v.description}</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info btn-sm order" data-id="${v.id}" data-name="${v.name}" data-photo="${v.photo}" data-price="${v.price}" data-discount="${v.disount}">Add to Cart</a>
					<a href="${url}" class="btn btn-primary btn-sm float-right order" >Detail</a>
				</div>
			</div>
		</div>`
				})
				$("#myItems").html(html);
			})
			}
			$('.filter').click(function(){
				var id = $(this).data('id');
				var name = $(this).data('name');
				$("#name").text(name);
				showItems(id);
			})
		})
	</script>
@endsection	