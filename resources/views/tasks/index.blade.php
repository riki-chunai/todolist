<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Task List</title>

</head>
<body>
    <div class="container">
        <div class="col-md-offset-2 col-md-10">
            <div class="row">
                <h1>Task List</h1>
            </div>
            
            @if (count($errors) > 0)
                <div class="alert alert-danger col-md-10">
                    <strong>Error:</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <form action="{{ route('tasks.store') }}" method='POST'>
                {{ csrf_field() }}
                    <div class="col-md-10">
                        <strong>Title:</strong>
                        <input type="text" name='newTaskName' class='form-control'>
                    </div>

                    <form action="{{ route('tasks.store') }}" method='POST'>
                            {{ csrf_field() }}     
                    <div class="col-md-10">
                        <strong>Description:</strong>
                        <textarea class='form-control'></textarea>
                    </div>

                    <div class="col-md-4">
                        <input type="submit" class='btn btn-primary btn-block' value='Add Task'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>