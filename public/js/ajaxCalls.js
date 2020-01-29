$(document).ready(function() {


    $('.modal-footer').on('click', '.edit', function () {
        var div=$('#refresh').html();
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

                $("#work-refresh").load(" #work-refresh");

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
                $("#work-refresh").load(" #work-refresh");


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
                $("#edu-refresh").load(" #edu-refresh");

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
                $("#edu-refresh").load(" #edu-refresh");
                $("#cour-refresh").load(" #cour-refresh");

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
                $("#cour-refresh").load(" #cour-refresh");
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
                $("#cour-refresh").load(" #cour-refresh");


            },
        });
    });


    $('.modal-footer-skill').on('click', '.edit', function () {

        $.ajax({
            type: 'patch',
            url: '/skill/edit',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#skill-id").val(),
                'skill': $('#sk').val(),

            },
            success: function (data) {
                ohSnap(data.status, {
                    color: 'green'
                });
                $("#skills-refresh").load(" #skills-refresh");
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

    $('.modal-footer-skill').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/skill/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did-skill').text()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });
                $("#skills-refresh").load(" #skills-refresh");

            },
        });
    });

    $('.modal-footer-language').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/language/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did-language').text()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });
                $("#language-refresh").load(" #language-refresh");

            },

        });
    });

    $('.modal-footer-skill').on('click', '.edit', function () {

        $.ajax({
            type: 'patch',
            url: '/skill/edit',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#skill-id").val(),
                'skill': $('#sk').val(),

            },
            success: function (data) {
                ohSnap(data.status, {
                    color: 'green'
                });
                $("#skills-refresh").load(" #skills-refresh");
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

    $('.modal-footer-project').on('click', '.edit', function() {
        $.ajax({
            type: 'patch',
            url: '/project/edit',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('#project-id').val(),
                'name': $('#pro-name').val(),
                'description': $('#pro-desc').val(),
                'url': $('#pro-link').val()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });
                $("#project-refresh").load(" #project-refresh");

            },
        });
    });

    $('.modal-footer-project').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/project/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did-project').text()
            },
            success: function(data) {
                ohSnap(data.status, {
                    color: 'green'
                });
                $("#project-refresh").load(" #project-refresh");

            },

        });
    });




});
