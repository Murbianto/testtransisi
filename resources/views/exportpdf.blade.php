<html>
<head>
	<title>Hi</title>
</head>
<body>
	<h1>Welcome to ItSolutionStuff.com - {{ $title }}</h1>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      @foreach($employee as $key =>$value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->employees_name}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->employees_email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>