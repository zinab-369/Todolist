<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
 <div class="container w-25 mt-5">
     <div class="card shadow-sn">
         <div class="card body">
             <h3>to-do list</h3>
             <form action="{{route('add.task')}}" method="POST" autocomplete="off">
                @csrf
                <div class="input-group">
                    <input type="text" name="content" class="form-control" placeholder="Add new Task">
                    <button type="submit" class="btn btn-dark btn-sm px4"><i class="fas fa-plus">Add </i></button>
                </div>
            </form>
            @if (count($tasks))
                <ul class="list-group list-group-flush mt-3">
                    @foreach ($tasks as $task )
                        <li class="list-group-item">
                            <form action="{{route('delete.task',$task->id)}}" method="POST">
                                {{$task->content}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link btn-sm float-end"><i class ="fas fa-trash"></i></button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @else
            <p class ="text=center mt-3">no tasks</p>
            @endif
         </div>
     </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
     integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>
