@extends('layouts.admin')




@section('content')



  

 
<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
 



<div class="card">
	<div class="card-header">
		<h4>category page</h4>
	</div>
	<div class="card-body">
		<table class="table border ydatatable " id="userTable">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($category as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->description}}</td>
					<td>
						
						   @php $prodID= Crypt::encrypt($item->id); @endphp
                 <!--Encrypt ID and store as $prodID-->
                 <a href="{{url('edit-prod',$prodID)}}" class="btn btn-danger">Edit</a>
				
						<a href="{{url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           

            
                    
           


 <script>  
 $(document).ready(function(){  
      $('#userTable').DataTable();  
 });  
 </script>  
 
 



	



@endsection








   







