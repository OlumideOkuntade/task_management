<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
      <title>Task Management</title>
</head>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-6">
                        <h6 class="my-2 ms-5 text-center">Task Form</h6>
                        
                        @if (session()->has('success'))
                              <div class="alert alert-success">
                                    {{ session('success') }}
                              </div>
                        @endif
                        <form action="{{ route('task.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name ="name" class="form-control" placeholder="Enter task name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Priority</label>
                                <input type="text" name="priority" class="form-control" placeholder="Enter task priority">
                            </div>

                            <select name="project_id" class="form-select mb-3">
                                    <option value="" selected>Select Project</option>
                                    @foreach ($projects as $project)
                                        <option value="{{$project->id}}">{{ $project->name ?? null }}</option>
                                    @endforeach
                            </select>

                              <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
      <script src="/bootstrap/js/bootstrap.js"></script>
      <script></script>
</body>
</html>