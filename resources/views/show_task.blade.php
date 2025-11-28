<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
      <title>Task Managementr</title>
</head>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-8">
                        <h6 class="text-center">A Task</h6>
                        <table class="table .table-striped .table-hover">
                              <thead>
                                    <tr>
                                          <th>No</th>
                                          <th>Task Name</th>
                                          <th>Priority</th>
                                          <th>Project</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $n=1; ?>
                                   
                                          <tr>
                                                <td>{{ $n++ }}</td>
                                                <td>{{ $task->name }}</td>
                                                <td>{{ $task->priority }}</td>
                                                <td>{{ $task->project->name}}</td>              
                                          </tr>
                              
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</body>
</html>