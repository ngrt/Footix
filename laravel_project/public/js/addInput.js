var COUNT_GOAL1 = 1;
var COUNT_GOAL2 = 1;


$(document).ready(function(){
    $(function() {
        $('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
    });
    /*$(".form-group a").click(function(){
        var div = document.createElement('div');
        $(div).addClass("form-group");
        var html = [
            "<div>",
            "{!! Form::label('player_id', 'Goal 1') !!}",
            "{!! Form::select('player_id', $players1, null, ['class' => 'form-control']) !!}",
            "</div>"
        ].join('');

        $(div).html(html);
        $(div).insertBefore('#add-buttons-1');
        COUNT_GOAL1++;
    });*/
    $("#add-goal-2").click(function(){
        var div = document.createElement('div');
        $(div).addClass("form-group");
        var html = [
            "<div>",
            "{!! Form::label('player_id', 'Goal 1') !!}",
            "{!! Form::select('player_id', $players2, null, ['class' => 'form-control']) !!}",
            "</div>"
        ].join('');

        $(div).html(html);
        $(div).insertBefore('#add-buttons-2');
        COUNT_GOAL2++;
    });
});