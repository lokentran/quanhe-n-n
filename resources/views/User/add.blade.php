
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

</head>
<body>
    <div class="container">
        <form action="{{ route('user.add') }}" method="post">
            @csrf
            <div class="form-group">
                <p>User Name</p>
                <input type="text" class="form-control" name="name">
                
            </div>
            <div class="form-group">
                <p>User Email</p>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                @foreach ($roles as $role)
                    <input type="checkbox" id="{{ $role->name.$role->id }}" name="role[{{ $role->id }}]" value="{{ $role->id }}">
                    <label for="{{ $role->name.$role->id }}">{{ $role->name }}</label><br>
                @endforeach
            </div>

            <button class="btn btn-primary" >Add User</button>

        </form>


    </div>
</body>
</html>