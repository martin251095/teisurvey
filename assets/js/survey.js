$(document).ready(function(){
    $('#add_question').click(function(){

        const index = +$('#widgets-counter').val();

        const tmpl = $('#survey_questionSurveys').data('prototype').replace(/_name_/g, index);

        $('#survey_questionSurveys').append(tmpl);

        $('#widgets-counter').val(index+1);

        handleDeleteButtons();
    });

    function handleDeleteButtons(){
        $('button[data-action="delete"]').click(function(){
            const target = this.dataset.target;
            $(target).remove();
        });
    }

    function updateCounter(){
        const count = +$('#survey_questionSurveys div.form-group').length;
        $('#widgets-counter').val(count);
    }

    updateCounter();

    handleDeleteButtons();
});
