@extends('layouts.app')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">

                <div class="d-flex justify-content-between">
                    <h1>Usuarios</h1>
                    <a href="{{ route('user.create')}}">
                        <button type="button" class="btn btn-outline-success  ">crear</button>
                    </a>
                </div>
                <br>
                {{-- Listado de usuarios --}}
                <table class="table text-center" >

					<thead>
						<tr>
							<th>id</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th colspan="2">&nbsp;</th>
						</tr>
					</thead>
                    <tbody>
						@foreach($users as $user)
						<tr >
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
                            <td>
								<div class="row">
									<div width="10px" class="mr-1">
										<a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-secondary">
											Edit
										</a>
									</div>
                                    <div width="10px">
                                        <form action="{{route('user.destroy',$user->id)}}" method="POST"
                                            onsubmit="return saludo();">
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
