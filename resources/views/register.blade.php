<html>
	<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<title>Form Register</title>
		
	</head>
	<body>

    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Laravel 8 | Register</span>
  </div>
</nav>
<br>

<div class="container">
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Register
			</div>
			<div class="card-body">
				<form method="post" action="/register">
                    @csrf
                <div class="form-group">
						<label for="name">Nama</label>
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required {{ old('name') }}>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
					</div>
                    <br>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Enter Username" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
					</div>
                    <br>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
					</div>
                    <br>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
					</div>
                    <br>
					<button type="submit" class="btn btn-primary float-end">Register</button>
                    <a href="" class="btn btn-success">Back</a>
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>