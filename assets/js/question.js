$(document).ready(function(){
    $('#add_answer').click(function(){

        const index = +$('#widgets-counter-2').val();

        const tmpl = $('#_survey_questionSurveys_answers').data('prototype').replace(/_name_/g, index);

        $('#_survey_questionSurveys_answers').append(tmpl);

        $('#widgets-counter-2').val(index+1);

        handleDeleteButtons();
    });

    function handleDeleteButtons(){
        $('button[data-action="delete"]').click(function(){
            const target = this.dataset.target;
            $(target).remove();
        });
    }

    function updateCounter(){
        const count = +$('#_survey_questionSurveys_answers div.form-group').length;
        $('#widgets-counter-2').val(count);
    }

    updateCounter();

    handleDeleteButtons();
});
