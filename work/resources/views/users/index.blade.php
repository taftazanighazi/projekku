 @section('main')
  <h1> All Users</h1>
  <p>{{ link_to_route('users.create', 'Add new user') }}</p>

 @if($users->count())
   <table class="table table-striped table-bordered">
	<thead>
		<tr>
		  <th> Username</th>
          <th> Password </th>
		  <th> Email </th>
		  <th> Phone </th>
		  <th> Name </th>
		</tr>
	</thead>

	<tbody>
	
