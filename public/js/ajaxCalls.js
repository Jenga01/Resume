$(document).ready(function() {




    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'patch',
            url: '/experience/edit/work',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'position': $('#pos').val(),
                'workplace': $('#work').val(),
                'period': $('#per').val(),
                'responsibilities': $('#resp').val(),
                'stack': $('#stack').val()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });

                setTimeout(() => window.location.reload(), 1000);
            },

            error: function (result) {
                var errors = '';
                for (results in result.responseJSON) {
                    errors += result.responseJSON[results] + '<br>';
                    ohSnap(errors, {
                        color: 'red'
                    });
                }


            }
        });
    })

    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/experience/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did-exp').text()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });

                setTimeout(() => window.location.reload(), 1000);
            },
        })
    });


 $('.modal-footer-edu').on('click', '.edit', function () {

        $.ajax({
            type: 'patch',
            url: '/education/edit/edu',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#edu_id").val(),
                'studies_name': $('#sn').val(),
                'institution': $('#ins').val(),
                'period': $('#per').val(),
                'degree': $('#deg').val(),
                'location': $('#loc').val()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });

                setTimeout(() => window.location.reload(), 1000);
            },

            error: function (result) {
                var errors = '';
                for (results in result.responseJSON) {
                    errors += result.responseJSON[results] + '<br>';
                    ohSnap(errors, {
                        color: 'red'
                    });
                }


            }
        });
    });

   $('.modal-footer-edu').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/education/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did-edu').text()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });

                setTimeout(() => window.location.reload(), 1000);
            },
        });
    });


    $('.modal-footer-cour').on('click', '.edit', function () {

        $.ajax({
            type: 'patch',
            url: '/education/edit/course',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#cid").val(),
                'course_name': $('#cn').val(),

            },
            success: function (data) {
                ohSnap(data.status, {
                    color: 'green'
                });
            },

            error: function (result) {
                var errors = '';
                for (results in result.responseJSON) {
                    errors += result.responseJSON[results] + '<br>';
                    ohSnap(errors, {
                        color: 'red'
                    });
                }


            }
        });
    });

    $('.modal-footer-cour').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/education/course/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did-c').text()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });

                setTimeout(() => window.location.reload(), 1000);
            },
        });
    });


});
