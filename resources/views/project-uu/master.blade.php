<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  	<title>eShop-@yield('title','Home')</title>
    @include('mplogin.partsial.link')
    @include('mplogin.partsial.script')
  </head>
  <body>
  	    {{-- START nav bar top --}}
	    {{-- START nav bar top --}}
    <div id="nav-bar">
        <div class="container">
            {{-- modal  register/sign in START --}}
            <div class="row row1">
                <ul class="nav-right-top pull-right">
                     {{-- Button trigger  for model --}}
                    <li class="upper-links"><a class="links" data-toggle="modal" data-target=".regitation-modal">REGISTER</a></li>
                    <li class="upper-links"><a class="links" data-toggle="modal" data-target="
                    .sign-in-modal">SIGN IN</a></li>
					{{-- blade --}}
                    @include('mplogin.partsial.register')
                </ul>
            </div>

            <!-- modal register/sign in END-->

            <!--START nav bottom part-->
            <div class="row row2">
                <div class="col-sm-2">
                    <h1 style="margin:0px;"><span class="nav-down">e-Shop</span></h1>
                </div>
          		{{-- input field --}}
                <div class="col-sm-8 col-xs-11">
                    <div class="row">
                        <input class="navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                        <button class="navbar-button  col-xs-1">
                            <span><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </div>
				{{-- cart --}}
                <div class="cart largenav col-sm-2">
                    <div class="cart-section">
                        <a  class="cart" href=""><span><i class="fa fa-cart-plus"></i></span></a>
                        <span class="item-number">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    nav bar END-->
    <!--    nav bar END-->
    <!--    nav bar END-->

 
  </body>
</html>


{{-- 
//project-uu
//project-uu
// Route::get('/',function(){
                                //  return view('mplogin.master');
// });
 --}}