@extends('layouts.master')

@section('title')
Profile
@endsection

@section('content')

<div class="section">
	<div class="row">
		
		
        <div class="col s12 m12 medium">
          <div class="card hoverable z-depth-1">
            <div class="card-image">
              <img src="../images/img2.jpg">
              <span class="center card-title">Card</span>
            </div>
            <div class="card-content">
              <p class="center">Content | tagline | About</p>
            </div>
          </div>
        </div>

		<div class="col s12 m6">
          <div class="card hoverable z-depth-1">
            <div class="card-content center">
            
            <!--<a class='dropdown-button right' data-beloworigin="true" href='#' data-activates='dropdown1'>
              <i class="small material-icons grey-text">arrow_drop_down</i>
                </a>

                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!edit" class="black-text">Edit</a></li>
                    <li><a href="" class="black-text">Delete</a></li>
                  </ul>-->

              <span class="card-title blue-text center"><a href="">About</a></span>
              <p>Details</p>
              <br>
              <p class="grey-text">More details</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card hoverable z-depth-1">
            <div class="card-content center">
            
            <!--<a class='dropdown-button right' data-beloworigin="true" href='#' data-activates='dropdown1'>
              <i class="small material-icons grey-text">arrow_drop_down</i>
                </a>

                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!edit" class="black-text">Edit</a></li>
                    <li><a href="" class="black-text">Delete</a></li>
                  </ul>-->

              <span class="card-title blue-text center"><a href="">Work</a></span>
              <p>Details</p>
              <br>
              <p class="grey-text">More details</p>
            </div>
          </div>
        </div>
	</div>
</div>

<div class="section">
	<div class="row">
		<div class="col s12 m12">
          <div class="card hoverable z-depth-1">
            <div class="card-content">
            
            <a class='dropdown-button right' data-beloworigin="true" href='#' data-activates='dropdown1'>
              <i class="small material-icons grey-text">arrow_drop_down</i>
                </a>

                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!edit" class="black-text">Edit</a></li>
                    <li><a href="" class="black-text">Delete</a></li>
                  </ul>

              <span class="card-title blue-text"><a href="">Posts</a></span>
              <p>Post Content</p>
              <br>
              <p class="grey-text">More details</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text">Like</a>
              <a href="#" class="grey-text">Comment</a>
              <a href="#" class="grey-text">Share</a>
            </div>
          </div>
        </div>
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

@endsection