$(document).ready(function () {
    $('#search-user').on('keyup', function () {
        let value = $(this).val();
        $.ajax({
            url: 'http://127.0.0.1:8000/search',
            type: 'GET',
            dataType: 'json',
            data: {keyword: value},
            success: function (result) {
                let html = '';
                $.each(result, function (index, item) {
                    html += '<tr class="student-' + item.id + '">';
                    html += '<td>';
                    html += index + 1;
                    html += '</td>';
                    html += '<td>';
                    html += item.name;
                    html += '</td>';
                    html += '<td>';
                    html += item.age;
                    html += '</td>';
                    html += '<td>';
                    html += item.group;
                    html += '</td>';
                    html += '<td>';
                    html += '<button class="btn btn-danger delete-student" data-id="' + item.id + '">Delete</button>';
                    html += '</td>';
                })
                $('#list-students').html(html)
            },
            errors: function () {
            }
        })
    });

})
