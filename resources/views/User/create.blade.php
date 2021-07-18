@extends('layouts.app')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
{{-- Formulario crear usuario --}}
                <div class="card shadow my-4 border-0">
                    <form action="{{route('user.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if($errors->any())
								<div class="alert alert-danger">
									@foreach($errors->all() as $error)
										{{$error}} <br>
									@endforeach
								</div>
							@endif
                            <div class="form-row">
                                <div class="mb-3 col-sm-12">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="mb-3 col-sm-12">
                                        <input type="email" name="email" class="form-control" placeholder="Correo">
                                </div>
                                <div class="mb-3 col-sm-12">
                                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>
								<div class="col-auto">
									<button type="submit" class="btn btn-primary">
										Guardar
									</button>
								</div>
							</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
