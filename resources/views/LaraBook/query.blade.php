@extends('LaraBook.index')
@section('title','model')
@section('content')
{{-- Query builder--}}
<h1>Welcome to query Builder and eloquent</h1>
<span class="alert alert-info">Query builder at a galance</span><br><br>
<h3 >[{"id":11,"category":"phone","name":"htc","price":150,"created_at":"2019-06-07 20:13:08","updated_at":"2019-06-07 20:13:08"}] (return single row)</h3><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li >[] is declaring an Array:
given, a list of elements held by numeric index.</li>
	<li >{} is declaring a new object:
given, an object with fields with Names and type+value,
some like to think of it as "Associative Array". but are not arrays, in their representation</li>
	<li >var a={name:"abc",age:"14"}; is equivalent to var a= new Object(); and get the valu by a -> name//a -> age
</li>
	<li>You may access each column's value by accessing the column as a property of the object:</li>
</ul>
<p><b>Note:</b>You can use Arrays when you are bothered about the order of elements(of same type) in your collection else you can use objects. In objects the order is not guaranteed.</p> <br>
{{-- Row related--}}
<spna class="alert alert-primary" style="font-size: 18px;">Row related queries</span><br><br>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return ,use</th>
			<th scope="col">Action</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>model::get(); or model::all();</td>
			<td>[{array obj(my)}] ,$data -> id</td>
			<td>all data from the model ralated table.</td>
			<td>The get method returns where each result is an instance of the PHP stdClass object</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>First row</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Certain number of row</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('id','01')->get();</td>
			<td>[{}] (array obj-my) ,$data -> id</td>
			<td>Selected single row</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('id', '9')->first();</td>
			<td>{obj} ,$data -> id</td>
			<td>Selected single row</td>
			<td>This method will return a single stdClass object</td>
		</tr>
		<tr>
			<td>model::find($id);</td>
			<td>{obj} ,$data -> id</td>
			<td>Single row by its id column value</td>
			<td>This method will return a row related $id </td>
		</tr>

		<tr>
			<td>model::where('id', '0')->value('price');</td>
			<td>Return single value onle .ex: 500</td>
			<td>Selected single row with single value</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Selected single row multiple value</td>
			<td></td>
			
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Selected multiple row</td>
			<td></td>
		</tr>
		
		
		<tr>
			<td>model::count();</td>
			<td>Single numaric value </td>
			<td>Count the number of row exist</td>
			<td></td>
		</tr>
	</tbody>
</table><br>

{{-- column related --}}
<spna class="alert alert-primary" style="font-size: 18px;">Column related queries</span><br><br>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return ,use</th>
			<th scope="col">Action</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr >
			<td>model::pluck('id');</td>
			<td>[],</td>
			<td>Single selected column</td>	
			
			<td></td>
		</tr>
		<tr>
			<td>model::pluck('id','price');</td>
			<td>{},.....</td>
			<td>You may also specify a custom key column for the returned Collection:</td>
			
			<td></td>
		</tr>
		<tr >
			<td>model::select('price')->get();</td>
			<td>[{}],</td>
			<td>Single selected column</td>
			
			<td></td>
		</tr>

		<tr >
			<td>model::::distinct()->select('name')->get();</td>
			<td>[{}],</td>
			<td>Not duplicate value of that column</td>			
			<td>works on single column only</td>
		</tr>

		<tr >
			<td>model::select('price','id')->get();</td>
			<td>[{}],</td>
			<td>Single multiple column</td>			
			<td></td>
		</tr>

	</tbody>
</table><br>
<h2>pluck() VS select()</h2><br>
{{-- where operation  --}}
<spna class="alert alert-primary" style="font-size: 18px;">where operation('col_name','operator','val')</span><br><br>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return,use</th>
			<th scope="col">Action </th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>model::where('price','>',200)->get();</td>
			<td>[{}],</td>
			<td>return all column(data) & condition on price</td>
			<td></td>
		</tr>
		<tr>
			<td>model::select('id','name')->where('price','>',200)->get();</td>
			<td>[{}],</td>
			<td>return selected column & condition on price</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('name', 'like', 'h%')->get();</td>
			<td>[{}],</td>
			<td>character start with h</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where([['name','like' ,'j%'],['price', '>', 200]])->get(); (bad)</td>
			<td>[{}],</td>
			<td class="alert alert-danger">multiple column condition</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('name','like' ,'htc')
                    ->where('price', '>', 100)
                    ->get();</td>
			<td>[{}],</td>
			<td class="alert alert-danger">chaining</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('category' ,'phone')
                    ->where('price', '>', 100)
                    ->get();</td>
			<td>[{}],</td>
			<td class="alert alert-danger">chaining</td>
			<td></td>
		</tr>
	</tbody>
</table>
<h2 class="alert alert-warning">In every time we can put where condition in whole table or selected column like above two</h2>
{{-- column operation  --}}
<spna class="alert alert-primary" style="font-size: 18px;">Column related operation (aggregate method)</span><br><br>
	<p>By definition, an aggregate function performs a calculation on a set of values and returns a single value. <b> MySQL provides many aggregate functions that include AVG , COUNT , SUM , MIN , MAX , etc. </b>An aggregate function ignores NULL values when it performs calculation except for the COUNT function.</p><br>

<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return ,use</th>
			<th scope="col">Action</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			
			<td>model::max('price');</td>
			<td>single value return</td>
			<td>Max value of a column</td>
			<td></td>
		</tr>
		<tr>
			
			<td>model::min('price');</td>
			<td>single value return</td>
			<td>Min value of a column</td>
			<td></td>
		</tr>
		<tr>
			
			<td>model::avg('price');</td>
			<td>return a single value</td>
			<td>Average of a column</td>
			<td></td>
		</tr>
		<tr>
			
			<td>model::sum('price');</td>
			<td>return a single value</td>
			<td>Sum of a column</td>
			<td></td>
		</tr>
	</tbody>
</table><br>
@endsection
