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
                post details
                </div>
                  <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" class="form-contol"value="{{$post->title}}" placeholder="Enter Post Title"/>
                        </div>
                        <div class="form-group">
                            <label for="body">Post Description</label>
                            <textarea class="form-control" name="body"rows="3">{{$post->body}}</textarea>
                        </div>

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