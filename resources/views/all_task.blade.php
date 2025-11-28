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
                  <div class="col-8">
                        <h6 class="text-center">All Tasks</h6>
                        @if (session()->has('success'))
                              <div class="alert alert-success">
                                    {{ session('success') }}
                              </div>
                        @endif
                        <table class="table .table-striped .table-hover">
                              <thead>
                                    <tr>
                                          <th>No</th>
                                          <th>Task Name</th>
                                          <th>Priority</th>
                                          <th>Project</th>
                                          <th>View</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $n=1; ?>
                                    @foreach ($tasks as $task)
                                          <tr>
                                                <td>{{ $n++ }}</td>
                                                <td>{{ $task->name }}</td>
                                                <td>{{ $task->priority }}</td>
                                                <td>{{ $task->project->name}}</td>
                                                <td><a href={{ route('task.show',$task->id) }}>View</a></td>
                                                <td><a href={{ route('task.edit',$task->id) }}>Edit</a></td>
                                                <td>
                                                      <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit">Delete</button>
                                                      </form>
                                                </td>
                                          </tr>
                                    @endforeach
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</body>
</html>