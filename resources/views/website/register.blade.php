@extends('layouts.website')
@section('title', '註冊')

@section('banner')
@endsection

@section('content')
<div class="container">
	<div class="container">
	<div class="register">
		<h1>會員註冊</h1>
		  	  <form> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span>姓名</span>
						<input type="text"> 
					 
						 <span>Email Address</span>
						 <input type="text"> 
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>密碼</span>
								<input type="text">
								<span>確認密碼</span>
								<input type="text">
							</div>
					 </div>
					 <div class="clearfix"> </div>
				</form>
				
				<div class="register-but">
				   <form>
					   <input type="submit" value="送出">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
</div>

@endsection