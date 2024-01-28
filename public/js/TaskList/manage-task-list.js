$(document).ready(function() {
    $('.edit-btn').on('click', function() {
        var taskId = $(this).data('task-id');
        window.location.href = '/edit-task-list/' + taskId;
    });

    $('.delete-btn').on('click', function() {
        var taskId = $(this).data('task-id');
        if (confirm('Are you sure?')) {
            $.ajax({
                url: '/tasks/' + taskId,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function() {
                    // handle success, e.g., remove row from table
                    console.log('Task deleted successfully!');
                },
                error: function() {
                    console.log('Error deleting task');
                }
            });
        }
    });
});