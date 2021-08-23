<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
        <div class="row">
            <div class="col-md 6 offset-md 3">
                <div class="card-header">
                    Add New Post
                </div>
                  <div class="card-body">
                    @if(Session::has('post_created'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('post_created')}}
                       </div>
                        @endif
                    <form method="POST" action="{{route('post.addsubmit')}}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title</lable>
                            <input type="text" name="title" class="form-contol" placeholder="Enter Post Title" required/>
                        </div>
                        <div class="form-group">
                            <lable for="body">Post Description</lable>
                            <textarea class="form-control" name="body"rows="3"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" value="submit"/>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
     integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


</body>
</html>
