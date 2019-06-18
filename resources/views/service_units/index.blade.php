<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
   <div class="container mt-2">
      <form class="form" method="get" >
          <div class="row">
            <div class="form-group col-10 col-md-8 col-lg-6 mb-2">
              <label for="field-text" class="sr-only">Buscar</label>
              <input type="text" name="search" value="{{Request::input('search')}}" class="form-control" id="field-text" placeholder="Buscar por nome, endereço, bairro ou cidade">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
          </div>
      </form>
      <table class="table table-striped">
         <thead>
         <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
         </tr>
         </thead>
         <tbody>
          @foreach ($service_units as $service_unit)
            <tr>
               <td>{{ $service_unit->name }}</td>
               <td>{{ $service_unit->address }}</td>
               <td>{{ $service_unit->neighborhood }}</td>
               <td>{{ $service_unit->city }}</td>
               <td>{{ $service_unit->state }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="text-center">
        {{ $service_units->appends(Request::except('page'))->links() }}
      </div>
   </div>
</body>
</html>
