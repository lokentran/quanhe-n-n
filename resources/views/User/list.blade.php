<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
   {{-- @foreach ($users as $user)
   <p>{{ $user->name }}</p>
       @foreach ($user->roles as $role)
           <p>{{ $role->name }}</p>
       @endforeach
     


   @endforeach --}}

    {{-- @foreach ($roles as $role)
        <p>{{ $role->name }}</p>
        @foreach ($role->users as $user)
            <p>{{ $user->email }}</p>
        @endforeach

    @endforeach --}}

    <div class="container"> 

        <a class="btn btn-primary" href="{{ route('user.formAdd') }}">Add User</a>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Number</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>   
                <th scope="col">Action</th>   
              </tr>
            </thead>
            <tbody>

            @foreach ($users as $key => $user)
               <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->name }},
                        @endforeach
                    
                    </td>
                    <td><a class="btn btn-primary" href="{{ route('user.formEdit', $user->id) }}">Edit</a></td>
                </tr>
            @endforeach
           
            
            
            </tbody>
            
          </table>
    </div>

</body>
</html>