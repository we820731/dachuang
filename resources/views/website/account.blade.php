@extends('layouts.website')
@section('title', '登入')

@section('banner')
@endsection

@section('content')
<div class="container">
	<h1>會員登入</h1>
	<div class="account_grid">
		<div class="col-md-6 login-right">
			<form>

				<span>帳號/Email Address</span>
				<input type="text"> 
				
				<span>密碼/Password</span>
				<input type="text"> 
				<div class="word-in">
					<a class="forgot" href="#">忘記帳號密碼?</a>
					<input type="submit" value="Login">
				</div>
		</form>
		</div>	
		<div class="col-md-6 login-left">
			<h4>註冊新會員</h4>
			<p>填寫基本資料，即可輕鬆加入大創娃娃屋會員，獲得更多會員專屬優惠哦!</p>
			<a class="acount-btn" href="/register">註冊新會員</a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

@endsection