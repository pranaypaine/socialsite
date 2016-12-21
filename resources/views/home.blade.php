@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')

<div class="section">
  <div class="row">

@foreach ($posts as $post)
    
        <div class="col s12 m12">
          <div class="card hoverable z-depth-1">
            <div class="card-content">
            @if (Auth::user() == $post->user )
            <a class='dropdown-button right' data-beloworigin="true" href='#' data-activates='dropdown{{ $post->id }}'>
              <i class="small material-icons grey-text">arrow_drop_down</i>
                </a>

                  <ul id='dropdown{{ $post->id }}' class='dropdown-content'>
                    <li><a href="#editpost" class="modal-trigger black-text">Edit</a></li>
                    <li><a href="{{ route('post.delete', ['post_id' => $post->id]) }}" class="black-text">Delete</a></li>
                  </ul>
            @endif
              <span class="card-title blue-text"><a href="{{ route('profile', ['user_id' => $post->user->id ]) }}">{{ ucfirst($post->user->firstname) }}&nbsp;{{ ucfirst($post->user->lastname) }}</a></span>
              <p>{{$post->post}}</p>
              <br>
              <p class="grey-text">{{ date('F d, Y g:i a', strtotime($post->created_at)) }}</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text">Like</a>
              <a href="#" class="grey-text">Comment</a>
              <a href="#" class="grey-text">Share</a>
            </div>
          </div>
        </div>
      
@endforeach
  </div>
</div>


  <div class="fixed-action-btn" style="bottom: 45px; right: 35px;">
    <a class="btn-floating btn-large red modal-trigger z-depth-5 btn tooltipped" href="#addpost" data-position="left" data-delay="50" data-tooltip="Add a post">
      <i class="large material-icons">add</i>
    </a>
  </div>
  <div id="addpost" class="modal">
  <form method="POST" action="{{ route('createpost') }}">
    <div class="modal-content">
    <h5>Hey there..</h5>
    <textarea id="postcontent" name="postcontent" class="materialize-textarea" placeholder="What you wanna Say?"></textarea>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    </div>
    <div class="modal-footer">
      <button class="btn waves-effect waves-light grey lighten-5 blue-text" type="submit" name="submit">Post
        <i class="material-icons right">send</i>
        </button>
    </div>
    </form>
  </div>

  <div id="editpost" class="modal">
  <form method="POST" action="{{ route('createpost') }}">
    <div class="modal-content">
    <h5>Edit Post</h5>
    <textarea id="postcontent" name="postcontent" class="materialize-textarea" placeholder="What you wanna Say?"></textarea>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    </div>
    <div class="modal-footer">
      <button class="btn waves-effect waves-light grey lighten-5 blue-text" type="submit" name="submit">Update
        <i class="material-icons right">send</i>
        </button>
    </div>
    </form>
  </div>

  <!-- Modal Structure -->
  <div id="addpost1" class="modal modal-fixed-footer">
    <div class="modal-content">
    <textarea id="postcontent" name="postcontent" class="materialize-textarea" placeholder="What you wanna Say?"></textarea>
    </div>
    <div class="modal-footer">
      <button class="btn waves-effect waves-light grey lighten-1" type="submit" name="submit">Post
        <i class="material-icons right">send</i>
        </button>
    </div>
  </div>
          
@endsection