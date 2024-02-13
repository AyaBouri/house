<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index Option</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container mt-3">
            <a href="{{url('admin/option/create')}}" class="btn btn-primary">Create Option</a>
            <h3>Index Option</h3>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Ville</th>
                        <th>Postal_Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($option as $i => $options)
                            <tr>
                                <td>{{ $option[($options['name'])] }}</td>
                                <td>{{$option[$options['phone']]}}</td>
                                <td>{{$option[$options['email']]}}</td>
                                <td>{{$option[$options['address']]}}</td>
                                <td>{{$option[$options['postal_code']]}}</td>
                                <td>
                                    <div class="d-flex gap-2 w-100 justify-content-end">
                                        <a href="{{url('admin/property/edit',$option)}}"><button class="btn btn-warning">Editer</button></a>
                                        <form action="{{asset('admin/property/destroy',$option)}}" method="post">
                                            @csrf
                                            @method("destroy")
                                            <button class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
            {{$option->links()}}
        </div>
    </body>
</html>
