@extends('layouts.master')

@section('title')
Social Site
@endsection

@section('content')
    <div class="row">
        <form class="col s12 m6" action="{{ route('signup') }}" method="POST">
        <h1 class="blue-text center">Sign Up</h1>
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <div class="col s12 center">
        <button class="btn waves-effect waves-light blue" type="submit" name="submit">Sign up
        <i class="material-icons right">send</i>
        </button>
      </div>
    </form>

    <form class="col s12 m6" action="{{ route('login') }}" method="POST">
    <h1 class="blue-text center">Login</h1>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <div class="col s12 center">
        <button class="btn waves-effect waves-light blue" type="submit" name="submit">login
        <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
    </div>
@endsection