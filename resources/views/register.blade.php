<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Buat Akun
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="{!! asset('assets/vendors/base/vendors.bundle.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/demo/default/base/style.bundle.css') !!}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{!! asset('assets/demo/default/media/img/logo/favicon.ico') !!}" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url({!! asset('assets/app/media/img//bg/bg-3.jpg') !!}">
				<div class="m-login__wrapper-1 m-portlet-full-height">
					<div class="m-login__wrapper-1-1">
						<div class="m-login__contanier">
							<div class="m-login__content">
								<div class="m-login__logo">
									<a href="#">
										<img src="{!! asset('assets/app/media/img//logos/logo-2.png') !!}">
									</a>
								</div>
								<div class="m-login__title">
									<h3>
										QUEA
									</h3>
								</div>
								<div class="m-login__desc">
									Questions  - Answers
								</div>
								<div class="m-login__form-action">
									<a href="{{URL::to('/login')}}" class="btn btn-outline-focus m-btn--pill">
										Login
									</a>
								</div>
							</div>
						</div>
						<div class="m-login__border">
							<div></div>
						</div>
					</div>
				</div>
				<div class="m-login__wrapper-2 m-portlet-full-height">
					<div class="m-login__contanier">
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Daftar
								</h3>
								<div class="m-login__desc">
									Isi form di bawah ini:
								</div>
							</div>
							<form class="m-login__form m-form" action="{{ URL::to('/register')}}" method="POST" >
								{{ csrf_field() }}
								<div class="form-group m-form__group @if ($errors->has('email')) has-danger @endif">
									<input class="form-control m-input" type="email" placeholder="Email Anda" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <div class="form-control-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group m-form__group @if ($errors->has('username')) has-danger @endif" >
									<input class="form-control m-input" type="text" placeholder="Nama Anda" name="username" value="{{ old('username') }}" required>
                                    @if ($errors->has('name'))
                                        <div class="form-control-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
								</div>

								<div class="form-group m-form__group @if ($errors->has('password')) has-danger @endif">
									<input class="form-control m-input" type="password" placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <div class="form-control-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
								</div>

								<div class="m-login__form-sub @if ($errors->has('agree')) has-danger @endif">
									<label class="m-checkbox m-checkbox--focus  ">
										<input type="checkbox" name="agree" value="agree">
										Saya Setuju dengan
										<a href="#" class="m-link m-link--focus">
											syarat dan ketentuan yang berlaku
										</a>
										.
										<span></span>
									</label>
									@if ($errors->has('agree'))
                                        <div class="form-control-feedback">
                                            {{ $errors->first('agree') }}
                                        </div>
                                    @endif
									<span class="m-form__help"></span>									
								</div>
								<div class="m-login__form-action">
									<button type="submit"  class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
										Daftar
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="{!! asset('assets/demo/default/custom/components/inputmask/jquery.inputmask.bundle.js') !!}" type="text/javascript"></script>
		<script src="{!! asset('assets/vendors/base/vendors.bundle.js') !!}" type="text/javascript"></script>
		<script src="{!! asset('assets/demo/default/base/scripts.bundle.js') !!}" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="{!! asset('assets/snippets/custom/pages/user/login.js') !!}" type="text/javascript"></script>
		<!--end::Page Snippets -->
		<script type="text/javascript">
			
			$('.phone').inputmask({
				mask : "9999999999999",
				suffix: "",
				placeholder:"",
				removeMaskOnSubmit: true
			});
		</script>
        @if (Session::has('sweet_alert.alert'))
            <script>
                swal({!! Session::get('sweet_alert.alert') !!});
            </script>
        @endif
	</body>
	<!-- end::Body -->
</html>