<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Index</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Laravel 8 | Index</span>
          <span class="float-end">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="btn btn-primary">Logout</button>
            </form>
          </span>
        </div>
      </nav>
      <br>
      <div class="container">

        @if (session('success'))
        <div class="alert-success">
          <p>{{ session('success') }}</p>
        </div>
        @endif
        
        @if ($errors->any())
        <div class="alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        
        <a href="{{ url('anggota/create') }}" class="btn btn-success">Insert</a>
      <table class="table table-striped">
        <thead>
          <tr align="center">
            <th scope="col" >No</th>
            <th scope="col">Nip</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $d)
          <tr align="center">
            <td>{{ $i }}</td>
            <td>{{ $d->nip }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->gender }}</td>
            <td>
                <a href="{{ url('anggota/' . $d->id . '/edit') }}" class="btn btn-warning">Update</a>
            </td>
                <form method="POST" action="{{ url('anggota', $d->id ) }}">
                    @csrf
                    @method('DELETE')
                   <td> <button class="btn btn-danger">Delete</button></td>
                  </form>
          </tr>
          @php
              $i++;
          @endphp
          @endforeach
        </tbody>
      </table>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>