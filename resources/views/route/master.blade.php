<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Route - @yield('title')</title>

    @stack('css')
</head>
<body>
    <h3>Array</h3>
    @yield('array')

    <h3>Array Multi 1D</h3>
    @yield('single')

    <h3>Array Multi MultiD</h3>
    @yield('multi')
</body>
</html>


 {{-- //route
//route
Route::get('/',function(){
    return view('route.master');
});

Route::get('/parent',function(){
    // data pass for @each  
    $value = ["fish","meat","egg"];
    //data pass for forelse parent view
    $data =["name" =>["dove","parrot","hen"] ];
    // data pass for @include file
    $original_array = [
     "name" => ["user2","user3","user4"],"email" => ["user2@gmail.com","user3@gmail.com","user4@gmail.com"],
     "phone_number" => ["90352065","69856352","903520658"]
       ];
    
    return view('route.parent')->withData($value)->withName($data)->withOriginal($original_array)->withValue($value);
});

Route::get('/child2',function(){
    $data =["name" =>["dove","parrot","hen"] ];
    $original_array = [
     "name" => ["user2","user3","user4"],"email" => ["user2@gmail.com","user3@gmail.com","user4@gmail.com"],
     "phone_number" => ["90352065","69856352","903520658"]
       ];
    return view('route.child2')->withOriginal($original_array);
})->name('child');  --}}
