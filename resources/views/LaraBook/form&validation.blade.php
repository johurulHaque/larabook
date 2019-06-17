@extends('LaraBook.index')
@section('title','form-validation')
@section('content')
<h2 class="text-center">Form ins and out(uu-end note in last point end-uu)</h2>
{{-- form some rule --}}
{{-- form some rule --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>((old('field_name'))) preserve the existing value if form is not submit</li>
	<li class="text-danger">@csrf --cross site request forgery </li>
	<li>If a field would null then must be ensure otherwise null value take as error (Ex:textarea)</li>
</ul>
<hr style="border-top: 2px dashed gray;">
{{-- Js validation --}}
{{-- Js validation --}}
<span class="alert alert-primary" style="font-size: 18px;">js validation -Project(UU)</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
<li>Showing  error msg by span/div such as id = "name_error".</li>
<li class="text-success">The condition inside if statement should if statement for dynamic check option.</li>
<p>Ex: color of under password field green,blue,orange etc check.if we apply if-else inside if then the result will be static (just try to skip if possible)</p>
<li class="alert alert-danger">In a block of code (such as if(if....)) property inherite .take care about it.</li>
<p>Ex: in the block of code display property is none then it will be inherited by the other block of the master block.Use diplay:property other block such that position</p>
<li class="text-danger">Use the regular onekeyup method is not work perfectly.Try it with onsubmit {Ex:!regex.test(fieldvalue) } method.</li>
<p>Note:regex.test(fieldvalue) to check the certain regex</p>
</ul>
<span class="alert alert-primary" style="font-size: 18px;">Important link</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
<li><a href="https://www.geeksforgeeks.org/write-regular-expressions/" target="_blank">Regex website.</a></li>
<li><a href="https://regex101.com/" target="_blank">Regex online check.</a></li>
<li><a href="https://www.youtube.com/watch?v=K0Lzrytqt0U" target="_blank">Regex youtube.</a></li>
</ul><br><br>
<span class="alert alert-warning" style="font-size: 18px;">Question section</span><br><br>
<p>2 3 4 number</p>
<hr style="border-top: 2px dashed gray;">
{{-- J-qeruy validation --}}
{{-- J-qeruy validation --}}
<span class="alert alert-primary" style="font-size: 18px;">j-query validation -Project(UU)</span><br><br>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li></li>
		<li></li>
		<li></li>
	</ul><br><br>
<hr style="border-top: 2px dashed gray;">
{{-- laravel validation --}}
{{-- laravel validation --}}
<span class="alert alert-primary" style="font-size: 18px;">laravel validation -Project(UU)</span><br><br>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li class="text-danger">Note: When using the regex / not_regex patterns, it may be necessary to specify rules in an array instead of using pipe delimiters, </li>
		<li class="text-danger">used confirmed after regex on rule.</li>
		<li class="text-danger">The regex rules share an error message by default—i.e. four failing regex rules result in one error message.</li>
		<li>email and email.email same.</li>
		<li class="text-danger">unique which table related (Ex:unique:users)</li>
		<li class="text-danger">:attribute to grab the field name in custome msg.</li>
		<li class="text-danger">If a field would null then must be ensure  otherwise null value take as error (both in migration as)</li>
		<li>bail sacn by serial --if aone error then dont check other</li>
		<li class="alert alert-danger">pass & cpass .msg gram cpass from pass(solve later project)</li>
	</ul><br><br>
{{-- validation role & messege --}}
<span class="alert alert-primary" style="font-size: 18px;">laravel validation & custome msg display.</span><br><br>
<h5>There are some way of displaying cumtom msg and validation</h5>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>$this ->validate($request,[rule],[optinal for custom msg]);</li>
	<li class="text-danger">In $request obj the data are in JSON format .That can retrive obj operator(->) [Ex:$car1 -> color ]</li>
	<li class="alert alert-danger">another stay  app>>http>>Request>>(make:request[name]) .
		<ul>How to use 
			<li>type hint the name of request instead of Request </li>
			<li>It check validate before go inside the function (hit the url)</li>
		</ul>
	</li>
</ul>

{{-- question laravel --}}
<span class="alert alert-warning" style="font-size: 18px;">Question section laravel</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>Regex custom msg how</li>
	<li>Mess between password and confirm password</li>
</ul>
@endsection