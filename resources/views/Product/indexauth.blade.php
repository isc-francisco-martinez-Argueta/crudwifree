@extends('layouts.app')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">

                <div class="d-flex justify-content-between">
                    <h1>Mis productos</h1>
                    <a href="{{ route('product.create')}}">
                        <button type="button" class="btn btn-outline-success  ">crear</button>
                    </a>
                </div>
                <br>
                {{-- Listado de usuarios --}}
                <table class="table text-center" >

					<thead>

						<tr>
							<th>id</th>
							<th>id Usuario</th>
							<th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
							<th colspan="2">&nbsp;</th>
						</tr>
					</thead>
                    <tbody>
						@foreach($products as $product)
						<tr >
							<td>{{$product->id}}</td>
							<td>{{$product->user_id}}</td>
							<td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>${{$product->price}}</td>
                            <td>
								<div class="row">
									<div width="10px" class="mr-1">
										<a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-secondary">
											Edit
										</a>
									</div>
                                    <div width="10px">
                                        <form action="{{route('product.destroy',$product->id)}}" method="POST"
                                            >
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-sm btn-danger" value="Elimnar">
                                        </form>
                                     </div>
                                </div>
                            </td>

						</tr>
						@endforeach
					</tbody>



				</table>
            </div>
        </div>
    </div>
@endsection
