$(document).on('click', '.delete-modal', function() {
    $('#footer_action_button_res').text(" Delete");
    $('#footer_action_button_res').removeClass('glyphicon-check');
    $('#footer_action_button_res').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-resume').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('#myModal-delete-resume').modal('show');
});


$(document).ready(function() {



    var iCnt = 0;
    // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
    var container = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'
    });

    $('#btAdd').click(function() {
        if (iCnt <= 30) {

            iCnt = iCnt + 1;

            // ADD TEXTBOX.
            $(container).append('<input type=text class="input" name="courses[]" id=tb' + iCnt + ' ' +
                'placeholder="Course '+ iCnt + ' " />');

            // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.


            // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
            $('#main').after(container);
        }
            // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
        // (20 IS THE LIMIT WE HAVE SET)
        else {
            $(container).append('<label>Reached the limit</label>');
            $('#btAdd').attr('class', 'bt-disable');
            $('#btAdd').attr('disabled', 'disabled');
        }
    });

    // REMOVE ONE ELEMENT PER CLICK.
    $('#btRemoveSkill').click(function() {
        if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }

        if (iCnt == 0) {
            $(container)
                .empty()
                .remove();

            $('#btSubmit').remove();
            $('#btAdd')
                .removeAttr('disabled')
                .attr('class', 'bt');
        }
    });

    // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
    $('#btRemoveAll').click(function() {
        $(container)
            .empty()
            .remove();

        $('#btSubmit').remove();
        iCnt = 0;

        $('#btAdd')
            .removeAttr('disabled')
            .attr('class', 'btn btn-primary');
    });
});

$(document).ready(function() {

    var iCnt = 0;
    // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
    var container = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'
    });

    $('#btAddSkill').click(function() {
        if (iCnt <= 30) {

            iCnt = iCnt + 1;

            // ADD TEXTBOX.
            $(container).append('<input type=text class="input" name="skills[]" id=tb' + iCnt + ' ' +
                'placeholder="Skill '+ iCnt + ' " />');

            // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.


            // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
            $('#main').after(container);
        }
            // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
        // (20 IS THE LIMIT WE HAVE SET)
        else {
            $(container).append('<label>Reached the limit</label>');
            $('#btAddSkill').attr('class', 'bt-disable');
            $('#btAddSkill').attr('disabled', 'disabled');
        }
    });

    // REMOVE ONE ELEMENT PER CLICK.
    $('#btRemoveSkill').click(function() {
        if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }

        if (iCnt == 0) {
            $(container)
                .empty()
                .remove();

            $('#btSubmit').remove();
            $('#btAddSkill')
                .removeAttr('disabled')
                .attr('class', 'bt');
        }
    });

    // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
    $('#btRemoveAllSkill').click(function() {
        $(container)
            .empty()
            .remove();

        $('#btSubmit').remove();
        iCnt = 0;

        $('#btAddSkill')
            .removeAttr('disabled')
            .attr('class', 'btn btn-primary');
    });
});



/*EXPERIENCE*/

$(document).on('click', '.edit-modal-work', function() {
    $('#footer_action_button').text(" Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#pos').val($(this).data('pos'));
    $('#work').val($(this).data('work'));
    $('#per').val($(this).data('per'));
    $('#resp').val($(this).data('resp'));
    $('#stack').val($(this).data('tools'));
    $('#myModal').modal('show');
});

$(document).on('click', '.delete-modal', function() {
    $('#footer_action_button').text(" Delete");
    $('#footer_action_button').removeClass('glyphicon-check');
    $('#footer_action_button').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-exp').text($(this).data('id'));
    $('.work').text($(this).data('work'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.pos').html($(this).data('pos'));
    $('#myModal').modal('show');
});
/*Education*/

$(document).on('click', '.edit-modal-edu', function() {
    $('#footer_action_button_edu').text(" Update");
    $('#footer_action_button_edu').addClass('glyphicon-check');
    $('#footer_action_button_edu').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#edu_id').val($(this).data('id'));
    $('#sn').val($(this).data('sn'));
    $('#ins').val($(this).data('ins'));
    $('#per').val($(this).data('per'));
    $('#deg').val($(this).data('deg'));
    $('#loc').val($(this).data('loc'));
    $('#myModal-edu').modal('show');
});

$(document).on('click', '.delete-modal-edu', function() {
    $('#footer_action_button_edu').text(" Delete");
    $('#footer_action_button_edu').removeClass('glyphicon-check');
    $('#footer_action_button_edu').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-edu').text($(this).data('id'));
    $('.ins').text($(this).data('ins'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.edu').html($(this).data('ins'));
    $('#myModal-edu').modal('show');
});

/*Courses*/
$(document).on('click', '.edit-modal-c', function() {
    $('#footer_action_button_c').text(" Update");
    $('#footer_action_button_c').addClass('glyphicon-check');
    $('#footer_action_button_c').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#cid').val($(this).data('id'));
    $('#cn').val($(this).data('course'));
    $('#myModal-c').modal('show');
});

$(document).on('click', '.delete-modal-c', function() {
    $('#footer_action_button_c').text(" Delete");
    $('#footer_action_button_c').removeClass('glyphicon-check');
    $('#footer_action_button_c').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-c').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.cour').html($(this).data('cins'));
    $('#myModal-c').modal('show');
});

/*SKILL*/

$(document).on('click', '.edit-modal-skill', function() {
    $('#footer_action_button_skill').text(" Update");
    $('#footer_action_button_skill').addClass('glyphicon-check');
    $('#footer_action_button_skill').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#skill-id').val($(this).data('id'));
    $('#sk').val($(this).data('skill'));
    $('#myModal-skill').modal('show');
});

$(document).on('click', '.delete-modal-skill', function() {
    $('#footer_action_button_skill').text(" Delete");
    $('#footer_action_button_skill').removeClass('glyphicon-check');
    $('#footer_action_button_skill').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-skill').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('#myModal-skill').modal('show');
});

/*LANGUAGE*/


$(document).on('click', '.delete-modal-language', function() {
    $('#footer_action_button_language').text(" Delete");
    $('#footer_action_button_language').removeClass('glyphicon-check');
    $('#footer_action_button_language').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-language').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('#myModal-language').modal('show');
});

/*Project*/

$(document).on('click', '.edit-modal-project', function() {
    $('#footer_action_button_project').text(" Update");
    $('#footer_action_button_project').addClass('glyphicon-check');
    $('#footer_action_button_project').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#project-id').val($(this).data('id'));
    $('#pro-name').val($(this).data('name'));
    $('#pro-desc').val($(this).data('desc'));
    $('#pro-link').val($(this).data('url'));
    $('#myModal-project').modal('show');
});

$(document).on('click', '.delete-modal-project', function() {
    $('#footer_action_button_project').text(" Delete");
    $('#footer_action_button_project').removeClass('glyphicon-check');
    $('#footer_action_button_project').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did-project').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('#myModal-project').modal('show');
});





