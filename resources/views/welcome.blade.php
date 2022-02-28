<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel Ajax CRUD</title>
  </head>
  <body>

    <header>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                        <h1>Laravel Ajax CRUD</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="body">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="card-header d-flex justify-content-between content-align-center">
                        <h2 class="mb-0">Task List</h2>
                    <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#taskCreate">Create Task</a>
                  </div>
                  <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col" style="width: 150px">Action</th>
                          </tr>
                        </thead>
                        <tbody id="taskTableBody">
                            @foreach($tasks as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td style="width: 150px">
                                    <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#taskEdit">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Button trigger modal -->

<!--Task Create Modal -->
<div class="modal fade" id="taskCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="taskCreateLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="" id="createTaskForm">
            <div class="modal-header">
                <h5 class="modal-title" id="taskCreateLabel">Create Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div id="taskCreateMessage"></div>
                    <label for="">Enter Task Here</label>
                    <input type="text" class="form-control" name="task_name" id="" placeholder="Enter The Task Name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Task</button>
            </div>
        </form>
    </div>
  </div>
</div>


<!--Task Edit Modal -->
<div class="modal fade" id="taskEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="taskEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="" id="CreateTaskForm">
            <div class="modal-header">
                <h5 class="modal-title" id="taskEditLabel">Edit Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div id="taskCreateMessage"></div>
                    <label for="">Enter Task Here</label>
                    <input type="text" class="form-control" name="task_name" id="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Task</button>
            </div>
        </form>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
