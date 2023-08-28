<form action="{{url('register/add')}}" method="post">
	@csrf
	<input type="text" name="nama" placeholder="nama"> <br>
	<input type="text" name="instansi" placeholder="instansi"> <br>
	<input type="text" name="username" placeholder="username"> <br>
	<input type="password" name="password" placeholder="password"> <br>
	<button>+ Save</button>
</form>