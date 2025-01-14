<!doctype html>
<html class="no-js" lang="zxx">

 @include('user.common.header')
<body>

<div class="body-wrapper">
 @include('user.common.menu')

    <!-- BREADCRUMB AREA START -->
  <div class="ltn__breadcrumb-area text-left  bg-image mb-0"  data-bg="/user-asset/img/bg/100.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title-top">
                    <div class="ltn__breadcrumb-inner">
                        <div class="ltn__breadcrumb-list">
                            <h1 class="page-title banner-head-color">Register Now</h1>
                            <ul class="banner-head-color">
                                <li><a href="/index" class="banner-head-color"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title" style="padding-top: 80px">Register <br>Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="/register" method="POST" class="ltn__form-box contact-form-box">
                             @csrf
                            <input type="text" name="name" placeholder="First Name" >
                            <!-- <div class="input-item"> -->
                            <!--<select class="nice-select" required="" tabindex="-1"  name="RoleId" >
                                    <option>SelectRole</option>
                                    @foreach($role as $roles)
                                       @if($roles['RoleName'] != "admin")
                                         <option value="{{$roles['RoleId']}}" > {{$roles['RoleName']}}
                                         </option>
                                       @endif
                                    @endforeach
                                </select>
                                @if($error == "please select role")
                                      <div>
                                        <p style="color: red">{{ $error }}</p>
                                      </div>
                                @endif  -->
                            <!-- </div> -->
                            <input type="text" name="RoleId" value="2" placeholder="Email*" hidden="" required="">
                            <input type="email" name="email" placeholder="Email*" required="">
                            <input type="text" name="Mobile" placeholder="Mobile*" required="">
                            <input type="password" name="password" placeholder="Password*" required="">
                            <input type="password" name="RePassword" placeholder="Confirm Password*" required="">
                             @if($errorone == "please Check the password")
                                      <div>
                                        <p style="color: red">{{ $errorone }}</p>
                                      </div>
                            @endif 
                            
                            <div class="btn-wrapper">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">SUBMIT</button>
                            </div>
                            <div class="btn-wrapper">
                                <a href="/admin-login" class="btn theme-btn-1 btn-effect-1 text-uppercase" style="color: #fff;" >ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

    <!-- FOOTER AREA START -->
    @include('user.common.footer')
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->


</body>
</html>

