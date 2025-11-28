<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
      <title>Edit App</title>
</head>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-8">
                        <h6 class="text-center">Edit Task</h6>
                  
                       <form action={{route("task.update",$task->id )}} method="POST">
                              @csrf
                              <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name ="name" class="form-control" value= {{$task->name}} >
                              </div>

                              <div class="mb-3">
                                    <label class="form-label">Priority</label>
                                    <input type="text" name="priority" class="form-control" value= {{$task->priority}}>
                              </div>
                              <select name="project_id" class="form-select mb-3">
                                     @foreach($projects as $project)
                                          <option value="{{ $task->project->id }}" {{ $task->project->id == $project->id ? 'selected' : '' }}>{{ $project->name ?? null }}</option>
                                    @endforeach
                              </select>

                              <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                  </div>
            </div>
      </div>
</body>
</html>