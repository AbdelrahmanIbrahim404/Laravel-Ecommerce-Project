@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('states/'.$state->id),'method'=>'put' ]) !!}
    <div class="form-group">
      {!! Form::label('state_name_ar',trans('admin.state_name_ar')) !!}
      {!! Form::text('state_name_ar',$state->state_name_ar,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('state_name_en',trans('admin.state_name_en')) !!}
      {!! Form::text('state_name_en',$state->state_name_en,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('country_id',trans('admin.country_id')) !!}
      {!! Form::select('country_id',App\Country::pluck('country_name_'.session('lang'),'id'),$state->country_id,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('city_id',trans('admin.city_id')) !!}
      {!! Form::select('city_id',App\city::pluck('city_name_'.session('lang'),'id'),$state->city_id,['class'=>'form-control']) !!}
    </div>

    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection