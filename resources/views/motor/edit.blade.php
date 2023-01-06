@extends('layouts.app')

@section('content')

<section class="content col-md-12">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif

    <div class="motord motord-secondary motord-outline">
        <div class="motord-header">
            <h3 class="motord-title">Form {{$title}} </h3>
        </div>
        <div class="motord-body">
            <form action="{{ route('motor.update', ['motor_id' => $motor->motor_id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p>Motorcycle Name</p>
                            <input type="text" class="form-control" required name="motor_name" value="{{ $motor->motor_name }}" >
                        </div>
                        <div class="form-group">
                            <p>Year</p>
                            <input type="number" class="form-control" required name="year" value="{{ $motor->year }}">
                        </div>
                        <div class="form-group">
                            <p>License Plat</p>
                            <input type="text" class="form-control" required name="license_plat" value="{{ $motor->license_plat }}">
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <div class="form-group">
                            <p>Price</p>
                            <input type="number" class="form-control" required name="price" value="{{ $motor->price }}">
                        </div>
                        <div class="form-group">
                            <p>Type</p>
                            <select name="type" class="form-control">
                                <option>- Select one -</option>
                                <option value="manual" {{ ($motor->type == 'manual' ? "selected":"") }}>Manual</option>
                                <option value="matic" {{ ($motor->type == 'matic' ? "selected":"") }}>Matic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Brand</p>
                            <select name="brand_id" class="form-control">
                                <option value="">- Select one -</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->brand_id}}" {{($motor->brand_id == $brand->brand_id ? 'selected' : '')}} >{{$brand->brand_name}}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
</section> 

@endsection