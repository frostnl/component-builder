@extends('layouts.default')

@section('content')

    <h1>Create a new component</h1>
    <hr>
    {!! Form::open(array('route' => 'components.store', 'method' => 'post', 'class' => 'form-horizontal')) !!}

        <!-- name Form Input -->
         <div class="form-group">
            {!! Form::label('name', 'name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
         </div>

        <!-- type Form Input -->
         <div class="form-group">
            {!! Form::label('type', 'type:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
            {!! Form::select('type', ['component'=>'component'], 'component', ['class' => 'form-control']) !!}
            </div>
         </div>

        <!-- creation date Form Input -->
        <div class="form-group">
            {!! Form::label('creation_date', 'creation date:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
            {!! Form::input('date', 'creation_date', null, ['class' => 'form-control']) !!}
            </div>
        </div>

         <!-- author Form Input -->
         <div class="form-group">
             {!! Form::label('author', 'author:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::text('author', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <!-- author_email Form Input -->
         <div class="form-group">
             {!! Form::label('author_email', 'author email:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::text('author_email', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <!-- author_url Form Input -->
         <div class="form-group">
             {!! Form::label('author_url', 'author url:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::text('author_url', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <!-- copyright Form Input -->
         <div class="form-group">
             {!! Form::label('copyright', 'copyright:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::text('copyright', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <!-- license Form Input -->
         <div class="form-group">
             {!! Form::label('license', 'license:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::text('license', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <!-- version Form Input -->
         <div class="form-group">
             {!! Form::label('version', 'version:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::text('version', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <!-- description Form Input -->
          <div class="form-group">
             {!! Form::label('description', 'description:', ['class' => 'col-sm-2 control-label']) !!}
             <div class="col-sm-10">
             {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
             </div>
          </div>


         {!! Form::submit("Create", array("class" => "btn btn-primary pull-right")) !!}
    {!! Form::close() !!}
@stop
