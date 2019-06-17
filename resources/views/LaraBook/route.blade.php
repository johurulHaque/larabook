@extends('LaraBook.index')
@section('title','route')
@section('content')
<h1>Route at a galance</h1>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li class="alert alert-success"></li>
</ul><br>
{{-- index/number  array --}}
{{-- index/number  array --}}
<h1 class="alert alert-warning">Pass value to view ---Index Array</h1><br>
<h4>Example:  &nbsp; $iteam = [""fish,"meat","egg"];</h4>
<h4 class="alert alert-info">Array ( [0] => fish [1] => meat [2] => egg )</h4><br>
{{-- step1 --}}
<span class="alert alert-danger">STEP1:</span><br> <br>
<h4>how it works: <br><b>foreach($iteam as $value)</b>>//In php &nbsp; 
	for($x = 0; $x < count($iteam); $x++) {echo $iteam[i];}
<br>
<h4>Output:<br> <b>(($value))</b>: fish meat egg</h4>
<h4> <b>single echo (($item[0]))</b>: fish</h4>
<br>

<h3>Explanation:</h3>
<ul>
	<li>where<b>= $item = $iteam[index] </b> where index++ in every iretation. <b>key (take) = index </b></li>
	<li>$value (take)= $item[index] </li>
</ul>
{{-- step2 --}}
<span class="alert alert-danger">STEP2:</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam as $key => $value)</b></h4>
<ul>Output:
	<li><h4><b>(($value))</b>: fish meat egg</h4></li>
	<li><h4><b>(($key))</b>: 0  1  2</h4></li>
	<li><h4><b>(($key))(($value))</b>: 0fish 1meat 2egg</h4></li>
</ul><hr><hr><hr>

{{-- Associative array --}}
{{-- Associative array --}}
<h1 class="alert alert-warning">Associative Array</h1><br>
<h4>Example:  &nbsp; $iteam = ["name" => "fish","color" =>"red", "age" =>"10"];</h4>
<h4 class="alert alert-info">Array ( [name] => fish [color] => red [age] => 10 )</h4><br>
<span class="alert alert-danger">STEP1: same as 1st but not recommended.</span><br> <br>
<h4> <b>single echo (($item['name']))</b>: fish</h4><br>
{{-- step2 --}}
<span class="alert alert-danger">STEP2:</span><br> <br>
<h4>how it works:<br><b>foreach($iteam as $key => $value)</b>//In php same </h4>
<ul>Output:
	<li><h4><b>(($value))</b>: fish red 10</h4></li>
	<li><h4><b>(($key))</b>: name  color age</h4></li>
	<li><h4><b>(($key))(($value))</b>: name:fish color:red age:10</h4></li><br><br><hr><hr><hr>
</ul>
{{-- Multidimentional array   --}}
{{-- Multidimentional array   --}}
<h1 class="alert alert-warning">Multidimentional Array</h1>
<h4><span class="alert alert-danger">Example1:</span>  &nbsp; $iteam =["name" =>["fish","meat","egg"] ];</h4>
<h4 class="alert alert-info">Array ( [name] => Array ( [0] => fish [1] => meat [2] => egg ) )</h4><br>
{{-- step1 --}}
<span class="alert alert-danger">STEP1 :</span><br> <br>
<h4>how it works:<br> <b>foreach($iteam['name'] as $value)</b>
<br>

<h3>Explanation:</h3>
<ul>
	<li>In the foreach loop the <b>$item works as(for loop) $iteam['index of name']</b> where index of name++ every iretation. </li>
	<li>$value take what is has been given</li>
</ul>
<h4>Output <br> <b>(($value))</b>: fish meat egg</h4>
<h4> <b>single echo (( $iteam['name'][0] ))</b>: parrot</h4><br>
{{-- step2 --}}
<span class="alert alert-danger">
STEP2:</span><br> <br> 
<h4>how it works: <b>foreach($iteam['name'] as $key => $value)</b></h4>
<ul>Output
	<li><h4><b>(($value))</b>: fish meat egg</h4></li>
	<li><h4><b>(($key))</b>: 0  1  2</h4></li>
	<li><h4><b>(($key))(($value))</b>: 0fish 1meat 2egg</h4></li>
</ul><br><br>
{{-- example 2 --}}
<h4><span class="alert alert-danger">Example2:</span>  &nbsp;  $data =["name" => ["parrot","hen"],"color" => ["red","blue"] ];</h4>
<h4 class="alert alert-info">Array ( [name] => Array ( [0] => parrot [1] => hen ) [color] => Array ( [0] => red [1] => blue ) )</h4><br>

<span class="alert alert-danger">STEP1 :</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam['name'] as $key =>  $value)</b>
<br>
<ul>Output
	<li><h4><b>(($value))</b>: parrot hen</h4></li>
	<li><h4><b>(($key))</b>: 0  1 </h4></li>
	<li><h4><b>$iteam['color'][$key]</b>: red blue(inside loop)</h4></li>
	<h4> <b>single echo (( $iteam['color'][0] ))</b>: red</h4><br>
</ul><br><br>

{{-- example2
<h4><span class="alert alert-danger">Example2:</span>  &nbsp; $data =["name" =>[ "data" =>["dove","parrot","hen"] ]]; one inside one same rule</h4>

<h4 class="alert alert-info">Array ( [name] => Array ( [data] => Array ( [0] => dove [1] => parrot [2] => hen ) ) )</h4><br>

<span class="alert alert-danger">STEP1 :</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam['name']['data'] as  $value)</b>
<br>
<h4>Output <b>(($value))</b>: dove parrot hen</h4><br>

<h3>Explanation:</h3>
<ul>
	<li>In the foreach loop the <b>$item works as(for loop) $iteam['index of name']</b> where index of name++ every iretation. </li>
	<li>$value take what is has been given</li>
</ul><br>

<span class="alert alert-danger">STEP2:</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam['name']['data'] as $key => $value)</b></h4>
<ul>Output
	<li><h4><b>(($value))</b>: dove parrot hen</h4></li>
	<li><h4><b>(($key))</b>: 0  1  2</h4></li>
	<li><h4><b>(($key))(($value))</b>: 0dove 1parot 2hen</h4></li>
</ul>--}}
@endsection
