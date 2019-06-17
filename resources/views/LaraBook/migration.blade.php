@extends('LaraBook.index')
@section('title','migration')
{{--command table yielding --}}
@section('table')
<h2>Command</h2>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Command <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span></th>
			<th scope="col">Usage </th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>php artisan make:migration create_users_table --create=users</td>
			<td>create migration</td>
			<td>table name users</td>
		</tr>
		<tr class="table-warning">
			<td>php artisan migrate --froce</td>
			<td>migrate file in DB</td>
			<td>--froce stop/prevent migrate destructive migration</td>
		</tr>
		<tr class="table-primary">
			<td>php artisan migrate:rollback</td>
			<td>This command rolls back the last "batch" of migrations, which may include multiple migration files</td>
			<td>Rolling Back Migrations</td>
		</tr>
		<tr class="table-primary">
			<td>php artisan migrate:rollback --step=5</td>
			<td>you may rollback a limited number of migrations</td>
			<td>Rolling Back Migrations</td>
		</tr>
		<tr class="table-warning">
			<td>php artisan migrate:reset</td>
			<td>command will roll back all of your application's migrations</td>
			<td>Rolling Back Migrations</td>
		</tr>

		<tr class="table-primary">
			<td>php artisan migrate:refresh (--seed)</td>
			<td> command will roll back all of your migrations and then execute the  migrate command. This command effectively re-creates your entire database:</td>
			<td>Rollback & Migrate In Single Command</td>
		</tr>
		<tr class="table-primary">
			<td>php artisan migrate:refresh --step=5</td>
			<td>  For example, the following command will rollback & re-migrate the last five migrations:</td>
			<td>Rollback & Migrate In Single Command</td>
		</tr>
		<tr class="table-warning">
			<td>php artisan migrate:fresh</td>
			<td>ommand will drop all tables from the database and then execute the  migrate command</td>
			<td>Drop All Tables & Migrate</td>
		</tr>
	</tbody>
</table>
@endsection

{{-- content yielding --}}
@section('content')
<h1>Migration at a galance</h1>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li class="alert alert-success">Migration that create table structure.</li>
	<li class="alert alert-danger">Every operation on table (del/update/edit) must do through different migration file.</li>
	<li class="alert alert-success">IF we do not need crate & update col then specify false in tha model.</li>
</ul>
@endsection

{{--yielding data type table --}}
@section('table2')
  <h1>Column Construction</h1>
  <h2>Numeric</h2>
  <table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Data type(+,-) <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span></th>
			<th scope="col">With P.K</th>
			<th scope="col">Unsigned</th>
			<th scope="col">Digit(Up to)</th>
			<th scope="col">size(byte)</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->tinyInteger('votes');</td>
			<td>$table->tinyIncrements('id');</td>
			<td>$table->unsignedTinyInteger('votes');</td>
			<td>4</td>
			<td>1</td>
		</tr>
		<tr class="table-danger">
			<td>$table->smallInteger('votes');</td>
			<td>$table->smallIncrements('id');</td>
			<td>$table->unsignedSmallInteger('votes');</td>
			<td>5</td>
			<td>2</td>
		</tr><tr class="table-primary">
			<td>$table->mediumInteger('votes');</td>
			<td>$table->mediumIncrements('id');</td>
			<td>$table->unsignedMediumInteger('votes');</td>
			<td>9</td>
			<td>3</td>
		</tr><tr class="table-danger">
			<td>$table->integer('votes');</td>
			<td>$table->increments('id');</td>
			<td>$table->unsignedInteger('votes');</td>
			<td>11</td>
			<td>4</td>
		</tr>
		<tr class="table-primary">
			<td>$table->bigInteger('votes');</td>
			<td>$table->bigIncrements('id');</td>
			<td>$table->unsignedBigInteger('votes');</td>
			<td>20</td>
			<td>8</td>
		
	</tbody>
</table>
<br>
{{-- not be unsigned --}}
<h2>Can not be unsigned</h2>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Data type <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span></th>
			<th scope="col">Explanation</th>
			<th scope="col">Size(byte)</th>	
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->decimal('amount', M, D);</td>
			<td>M->1-65,D->0-30</td>
			<td>1</td>
		</tr>
		<tr class="table-warning">
			<td>$table->float('amount', M, D);</td>
			<td>M=total & D= digit after point </td>
			<td>4</td>
		</tr>
		</tr><tr class="table-primary">
			<td>$table->double('amount', M, D);</td>
			<td></td>
			<td>8</td>
		</tr>
	</tbody>
</table><br>

{{-- non binary string --}}
<h2>Non binary string</h2>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Range</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->char('name', 100);</td>
			<td>0to255</td>
			<td>optional length</td>
		</tr>
		<tr class="table-info">
			<td>$table->string('name', 100);</td>
			<td>1-255</td>
			<td>optional length</td>
		</tr>
		<tr class="table-primary">
			<td>$table->text('description');</td>
			<td>up to 65,535</td>
			<td></td>
		</tr>
		<tr class="table-info">
			<td>$table->mediumIncrements('id');</td>
			<td>1crs+</td>
			<td></td>
		</tr>
		<tr class="table-primary">
			<td>$table->longText('description');</td>
			<td>4GB (4crs+)</td>
			<td></td>
		</tr>
		<tr class="table-info">
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="table-primary">
			<td>$table->enum('level', ['easy', 'hard']);</td>
			<td></td>
			<td>chose the value from option</td>
		</tr>
	</tbody>
</table>
<span>Note for enum:</span>
<ul>
	<li>A string can have only one value</li>
	<li>Each col value may be assigned one enumeration member</li>
	<li>If a value insert that in not in enum list .Blank value will be inserted.</li>
</ul>
<br>

{{-- binary --}}
<h2>Binary</h2>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Range</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->boolean('confirmed');</td>
			<td></td>
			<td>0=false & non-zero=True/BOOLEAN equivalent column.</td>
		</tr>
		<tr class="table-danger">
			<td>$table->binary('data');</td>
			<td>Upto 255 characters</td>
			<td>binary string/BLOB equivalent column.</td>
		</tr>
		
	</tbody>
</table>
<p>BOLB-A Binary Large OBject (BLOB) is a collection of binary data stored as a single entity in a database management system. Blobs are typically images, audio or other multimedia objects, though sometimes binary executable code is stored as a blob.</p><br>
{{-- date-time --}}
<h2>Date & Time</h2>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Size(byte)</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->date('created_at');	</td>
			<td>3</td>
			<td>YYYY-MM-DD</td>
		</tr>
		<tr class="table-primary">
			<td>$table->dateTime('created_at');</td>
			<td>8</td>
			<td>YYYY-MM-DD HH:MM:SS</td>
		</tr>
		<tr class="table-primary">
			<td>$table->dateTimeTz('created_at');</td>
			<td></td>
			<td>with timzone</td>
		</tr>
		<tr class="table-danger">
			<td>$table->time('sunrise');</td>
			<td>3</td>
			<td>HH:MM:SS</td>
		</tr>
		<tr class="table-danger">
			<td>$table->timeTz('sunrise');</td>
			<td></td>
			<td>with timeZone</td>
		</tr>
		<tr class="table-primary">
			<td>$table->timestamp('added_on');</td>
			<td></td>
			<td>YYYY-MM-DD HH:MM:SS</td>
		</tr>
		<tr class="table-primary">
			<td>$table->timestampTz('added_on');</td>
			<td></td>
			<td>with timezone</td>
		</tr>
		<tr class="table-danger">
			<td>$table->timestamps();</td>
			<td></td>
			<td>YYYY-MM-DD HH:MM:SS</td>
		</tr>
		<tr class="table-danger">
			<td>$table->timestampsTz();</td>
			<td></td>
			<td>with timezone</td>
		</tr>
		<tr class="table-info">
			<td>$table->year('birth_year');</td>
			<td>$table->rememberToken();</td>
			<td>Adds a nullable remember_token VARCHAR(100) equivalent column</td>
		</tr>
	</tbody>
</table>
<span>Note for timestamps:</span>
<ul>
	<li>add nullable created-at and updated-at column</li>
</ul>
<span>Note for timestamp:</span>
<ul>
	<li>Autometic initilize & updating current time </li>
	<li>update when a row get create or modified</li>
	<li>based upon internal clock</li>
</ul>
@endsection

@section('table3')
<h2>Column Modifier</h2>
	<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Modifier</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>->comment('my comment')</td>
			<td>Add a comment to a column (MySQL/PostgreSQL)</td>
		</tr>
		
		<tr class="table-info">
			<td>->nullable($value = true)</td>
			<td>Allows (by default) NULL values to be inserted into the column (my-other wise show error)</td>
		</tr>

		<tr class="table-info">
			<td>->default($value)</td>
			<td>Specify a "default" value for the column</td>
		</tr>>
	</tbody>
</table><br>
<h2>Indexes($table->index('state'))</h2>
<ul>
	<li>inorder to fastest result when searching through that particular col</li>
	<li>when DB table make then we make a certain col index if we plan for future</li>
	<li>index queckly find the field or field of data without scan the whole table</li>
</ul>
<h2>->unique() is not duplicate</h2>
@endsection