@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing
                  <a class="pull-right btn btn-default btn-xs" href="/dashboard">Go Dashboard</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(array('action' => ['ListingsController@update',  $listing->id], 'method' => 'POST')) !!}
                      {{ Form::bsHidden('_method', 'PUT') }}
                      {{ Form::bsText('name', $listing->name, ['placeholder'=>'Company Name']) }}
                      {{ Form::bsText('email', $listing->email, ['placeholder'=>'Contact Email']) }}
                      {{ Form::bsText('website', $listing->website, ['placeholder'=>'Company Webisie']) }}
                      {{ Form::bsText('phone', $listing->phone, ['placeholder'=>'Contact Phone']) }}
                      {{ Form::bsText('address', $listing->address, ['placeholder'=>'Business Address']) }}
                      {{ Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'About This Business']) }}
                      {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection
