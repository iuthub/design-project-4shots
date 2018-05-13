@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link href="{{ asset('css/registrationvalidation.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">REGISTER</div>
                <div ng-app="">
                    <div class="panel-body">
                        <form name = "myform" class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" ng-model="name"
                                    ng-pattern='/^[a-zA-Z!$#%]+$/' value="{{ old('name') }}"
                                    placeholder="Your name" required autofocus>
                                    <span class="invalid" ng-show="myform.name.$touched && myform.name.$error.required">The name is required.</span>
                                    <span class="invalid" ng-show="myform.name.$dirty && myform.name.$error.pattern"> Name is invalid. Type only english letters.</span>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                <label for="number" class="col-md-4 control-label">Phone number</label>
                                
                                <div class="col-md-6">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon">+998</div>
                                        <input id="number" type="text" class="form-control" name="number" ng-model="number"
                                        ng-pattern='/^[0-9]{2}[0-9]{3}[0-9]{4}$/' value="{{ old('number') }}"
                                    placeholder="(90) 900-90-90" required ></div>
                                    <span class="invalid" ng-show="myform.number.$touched && myform.number.$error.required">The phone number is required.</span>
                                    <span class="invalid" ng-show="myform.number.$dirty && myform.number.$error.pattern"> Phone number is invalid. Type only 9-digit number.</span>
                                    @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" ng-model="email" value="{{ old('email') }}" placeholder="example@gmail.com" ng-pattern='/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/' required>
                                    <span class="invalid" ng-show="myform.email.$touched && myform.email.$error.required">The email is required.</span>
                                    <span class="invalid" ng-show="myform.email.$dirty && myform.email.$error.pattern"> Email is invalid. Type in appropriate form.</span>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" ng-model="password" placeholder="Password" ng-minlength="6" required>
                                    <span class="invalid" ng-show="myform.password.$touched && myform.password.$error.required">The password is required.</span>
                                    <span class="invalid" ng-show="myform.password.$error.minlength">The password is too short</span>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" ng-model="password_confirmation" placeholder="Confirm password" ng-minlength="6" ng-pattern="password" required>
                                    <span class="invalid" ng-show="myform.password_confirmation.$touched && myform.password_confirmation.$error.required">The password confirmation is required.</span>
                                    <span class="invalid" ng-show="myform.password_confirmation.$error.pattern">The confirmation password is incorrect.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                    Sign up
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection