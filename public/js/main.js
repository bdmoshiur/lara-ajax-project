$.ajaxSetup({
    headers: {x_csrf_token: $('meta[name="csrf-token"]').attr('content')}
});

// Create Task
$('#createTaskForm').submit(function (e) {
    e.preventDefault();
    let msg = $('#taskCreateMessage');
    let input = $('#createTaskForm input[name="task_name"]');
    let FormData = {
       name: input.val(),
    };

    $.ajax({
        type: 'POST',
        url: '/task/store',
        data: FormData,
        success: function (data) {
            $(msg).html('');
            $(msg).append('<div class="alert alert-success">Task Create Successfuly</div>');
            $(input).val('');
            $('#taskTableBody').prepend('<tr><th scope="row">'+data.id+'</th><td>'+data.name+'</td><td style="width: 150px"><a href="#" class="btn btn-sm btn-info">Edit</a><a href="#" class="btn btn-sm btn-danger">Delete</a></td></tr>');
        },
        error: function (error) {
            $(msg).html('');
            $(msg).append('<ul id="alertMessage" class="alert alert-danger"></ul>');
           $.each(error.responseJSON.errors,function (error,item) {
              $(msg).find('#alertMessage').append('<li style="list-style:none">'+item[0]+'</li>');
           });
        }
    });
});

// Edit Task
