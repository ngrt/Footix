var COUNT_GOAL1 = 1;
var COUNT_GOAL2 = 1;


$(document).ready(function(){
    $(function() {
        $('.datepicker').datepicker({
            dateFormat: 'dd-mm-yy',
            altField: '#thealtdate',
            altFormat: 'yy-mm-dd'
        });
    });
    $(".form-group a").click(function(){
        var div = document.createElement('div');
        $(div).addClass("form-group");
        var html = [
            "<div>",
            "<label for='goal1'>Goal " + COUNT_GOAL1 + "</label>",
            "<select id='goal1' name='goal1'><option value='4'>'Karim Benzema'</option><option value='5'>Kylian MBappe</option><option value='6'>Samuel Umtiti</option></select>",
            "</div>"
        ].join('');

        $(div).html(html);
        $(div).insertBefore('#add-buttons-1');
        COUNT_GOAL1++;
    });

    $("#add-goal-2").click(function(){
        var div = document.createElement('div');
        $(div).addClass("form-group");
        var html = [
            "<div>",
            "<label for='goal1'>Goal " + COUNT_GOAL2 + "</label>",
            "<select id='goal1' name='goal1'><option value='4'>'Karim Benzema'</option><option value='5'>Kylian MBappe</option><option value='6'>Samuel Umtiti</option></select>",
            "</div>"
        ].join('');

        $(div).html(html);
        $(div).insertBefore('#add-buttons-2');
        COUNT_GOAL2++;
    });
});