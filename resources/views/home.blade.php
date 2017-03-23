@extends('layouts.app')


<img src="{{ URL::asset('img/drawing-bg.png') }}" class="background-home">
<img src="{{ URL::asset('img/white-wallpaper.png') }}" class="content-top">


@section('content')

<div class="about-us-section">
    <div class="container">    
        <div class="row">
        <div class="col-md-1"></div>
          <div class="col-md-5 content-about-us">
              <p>
                  <th><h3 class="title"> HUMBLE BEGINNINGS </h3></th>
                  <hr class="primary"><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  <br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
          </div>
          <span class="about-us-pic col-md-5">
            <div data-aos="fade-zoom-in" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">   
              <img src="{{ URL::asset('img/about-us-pic.png') }}">
            </div>
          </span>
        </div>
    </div>
</div>

<section class="about-us-more">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
              <h2 class="section-heading title">ALWAYS AT YOUR SERVICE</h2>
              <hr class="primary">
          </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 text-center margin-top-10">
          <i class="fa fa-4x fa-diamond text-primary sr-icons" style="color: #3e2f2c;"></i>
            <h3>Solid Bondings</h3>
          <p>In Daily Bread, we make sure that all of us will always be a family.</p>
        </div>
        <div class="col-lg-3 col-md-6 text-center margin-top-10">
          <i class="fa fa-4x fa-paper-plane text-primary sr-icons" style="color: #3e2f2c;"></i>
            <h3>Secure &amp; Reachable</h3>
          <p>We have online reservations that guarantee a full service.</p>
        </div>
        <div class="col-lg-3 col-md-6 text-center margin-top-10">
          <i class="fa fa-4x fa-newspaper-o text-primary sr-icons" style="color: #3e2f2c;"></i>
            <h3>Fresh from Updates</h3>
          <p>Always ready to hear comments and suggestions.</p>
        </div>
        <div class="col-lg-3 col-md-6 text-center margin-top-10">
          <i class="fa fa-4x fa-heart text-primary sr-icons" style="color: #3e2f2c;"></i>
            <h3>Made with Love</h3>
          <p>Daily Bread will always treat all with love and sincerity.</p>
        </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="food-card">
      <span>
        <img class="shadow" src="{{ URL::asset('img/food-card.png') }}" width="60%" height="90%">
      </span>
    </div>
    <div class="label-card">
      <span>
        <img class="shadow" src="{{ URL::asset('img/label-card.png') }}" width="60%" height="90%">
      </span>
    </div>
  </div>
</div>

<div class="container">
<div>
  <span class="food-section">
    <div class="w3-content foods" style="max-width:410px;">
      <img class="mySlides" src="{{ URL::asset('img/main-1.jpg') }}" style="width:100%; height: 400px !important;">
      <img class="mySlides" src="{{ URL::asset('img/main-5.jpg') }}" style="width:100%; height: 400px !important;">
      <img class="mySlides" src="{{ URL::asset('img/main-6.jpg') }}" style="width:100%; height: 400px !important;">
    </div>
  </span>

  <div class="food-labels">
    <div class="row">
      <div class="col-md-3 margin-label">
        <button class="btn-default" onclick="currentDiv(1)" style="color: #3e2f2c;"> TAWERIZO </button>
      </div>
      <div class="col-md-4 margin-label">
        <button class="btn-default" onclick="currentDiv(2)" style="color: #3e2f2c;"> HOTSARU </button>
      </div>
      <div class="col-md-7 margin-label">
        <button class="btn-default" onclick="currentDiv(3)" style="color: #3e2f2c;"> CHOKOBREAD </button>
      </div>
    </div>
  </div>
</div>

<div>
  <span class="beverage-section">
    <div class="w3-content beverages" style="max-width:410px;">
      <img class="mySlides" src="{{ URL::asset('img/drink-1.jpg') }}" style="width:100%; height: 400px !important;">
      <img class="mySlides" src="{{ URL::asset('img/drink-3.jpg') }}" style="width:100%; height: 400px !important;">
      <img class="mySlides" src="{{ URL::asset('img/drink-2.jpg') }}" style="width:100%; height: 400px !important;">
    </div>
  </span>

  <div class="beverage-labels">
    <div class="row">
      <div class="margin-label">
        <button class="btn-default" onclick="currentDiv(4)" style="color: #3e2f2c;"> LEMON TEA </button>
      </div>
      <div class="margin-label">
        <button class="btn-default" onclick="currentDiv(5)" style="color: #3e2f2c;"> LAYER-O-LIC </button>
      </div>
      <div class="margin-label">
        <button class="btn-default" onclick="currentDiv(6)" style="color: #3e2f2c;"> COFO </button>
      </div>
    </div>
  </div>
</div>

<div>
  <span class="dessert-section">
    <div class="w3-content desserts" style="max-width:410px;">
      <img class="mySlides" src="{{ URL::asset('img/dessert-1.jpg') }}" style="width:100%; height: 400px !important;">
      <img class="mySlides" src="{{ URL::asset('img/dessert-2.jpg') }}" style="width:100%; height: 400px !important;">
      <img class="mySlides" src="{{ URL::asset('img/dessert-3.jpg') }}" style="width:100%; height: 400px !important;">
    </div>
  </span>

  <div class="dessert-labels">
    <div class="row">
      <div class="margin-label">
        <button class="btn-default" onclick="currentDiv(7)" style="color: #3e2f2c;"> WAFFLE </button>
      </div>
      <div class="margin-label">
        <button class="btn-default" onclick="currentDiv(8)" style="color: #3e2f2c;"> ITALIAN BREAD </button>
      </div>
      <div class="margin-label">
        <button class="btn-default" onclick="currentDiv(9)" style="color: #3e2f2c;"> FRUIT SALAD </button>
      </div>
    </div>
  </div>
</div>
</div>


<div class="reservation-section">
  <img src="{{ URL::asset('img/white-wallpaper.png')}}" class="content-down">
</div>


<div class="content container">
  <div class="row">
    <div class="">
      <h1 class="col-md-12"><font style="font-family: 'Vintage_fair Regular';
        font-size: 130px !important;"> <i class="fa fa-ban"></i>&nbsp;<br><hr>SORRY,<br>ONLINE<br>RESERVATION IS<br>NOW UNDER<br>MAINTENANCE.<br><hr><i class="fa fa-wrench"> </i></font></h1>
    </div>
  </div>
</div>


<div class="container">
  <div class="modal fade" id="x" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModal"> Verification </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <p> Are you already sure you want to post your comment? </p><br><br>
            <i>
              *Blank comment will be " <i class="fa fa-hand-o-up" style="color: red;"></i> " by default.*
            </i>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="pursueComment">Yes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="top-contents">
        <div class="inner-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                  <img src="{{ URL::asset('img/main-3.jpg') }}" class="img-thumbnail"><br>
                  <form role="form" action="/comment" method="POST" class="get-comment">
                    {{ csrf_field() }}
                    <div class="input-group" id="comment-box">
                      <input type="hidden" name="comment_user_id" value="{{ $user -> id }}">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-pencil-square-o"></i></span>
                      <textarea placeholder="Fill-up here" id="form-comment" class="col-md-12 form-comment form-control textarea-sizing" name="form_comment">LIKE!</textarea>
                    </div>
                    <button type="button" data-toggle="modal" data-target="#x" class="btn btn-warning" id="getSubmit"> VERIFY </button>

                    <button type="submit" class="btn btn-warning" style="margin:5px;" id="passComment" disabled="disabled"> SUBMIT COMMENT </button>
                  </form>
                </div>
              </div>
            </div>
          </div>


  <script type="text/javascript">
    $('#pursueComment').click(function(){
      $('#getSubmit').fadeOut(100 , function(){
        $('#passComment').removeAttr('disabled');
      });
      $('#form-comment').attr('readonly' , 'readonly');
    });
  </script>

  <!-- COMMENT BOX -->

          <div class="col-sm-6">
            <div class="form-box">
                      <div class="form-top">
                          <div class="form-top-left">
                  <div class="col-sm-12">
                    <div class="comment-scroll col-md-12">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr class="bg-warning">
                            <th hidden> ID </th>
                            <th> COMMENTS! </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($comments as $comment)
                            <tr class="bg-info">
                              <td> {{ $comment -> form_comment }} </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<img src="{{ URL::asset('img/drawing-bg.png') }}">
<script src="{{ URL::asset('login-template/assets/js/scripts.js') }}"></script>

<script>
    AOS.init({
      offset: 200,
      duration: 600,
      easing: 'ease-in-sine',
      delay: 100,
    });



    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-opacity-off";
    } 
  </script>

@endsection
