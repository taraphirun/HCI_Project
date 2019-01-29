$("#slider-range").slider({
    range: true,
    min: 960,
    max: 1320,
    step: 30,
    values: [960, 1320],
    slide: function(e, ui) {
        var hours1 = Math.floor(ui.values[0] / 60);
        var minutes1 = ui.values[0] - (hours1 * 60);

        if (hours1.length == 1) hours1 = '0' + hours1;
        if (minutes1.length == 1) minutes1 = '0' + minutes1;
        if (minutes1 == 0) minutes1 = '00';
        if (hours1 >= 11) {
            if (hours1 == 11) {
                hours1 = hours1;
                minutes1 = minutes1 + "pm";
            } else {
                hours1 = hours1 - 11;
                minutes1 = minutes1 + "pm";
            }
        } else {
            hours1 = hours1;
            minutes1 = minutes1 + "am";
        }
        if (hours1 == 0) {
            hours1 = 11;
            minutes1 = minutes1;
        }

        $('.slider-time').html(hours1 + '.' + minutes1);

        var hours2 = Math.floor(ui.values[1] / 60);
        var minutes2 = ui.values[1] - (hours2 * 60);

        if (hours2.length == 1) hours2 = '0' + hours2;
        if (minutes2.length == 1) minutes2 = '0' + minutes2;
        if (minutes2 == 0) minutes2 = '00';
        if (hours2 >= 11) {
            if (hours2 == 11) {
                hours2 = hours2;
                minutes2 = minutes2 + "pm";
            } else {
                hours2 = hours2 - 11;
                minutes2 = minutes2 + "pm";
            }
        } else {
            hours2 = hours2;
            minutes2 = minutes2 + "pm";
        }

        $('.slider-time2').html(hours2 + '.' + minutes2);

        $('.box').each(function() {
            var startTime = (hours1 + '.' + minutes1).replace('.', '').replace('pm', '');
            var endTime = (hours2 + '.' + minutes2).replace('.', '').replace('pm', '');
            //console.log('.box[data-start-time="' + startTime + '"]');

            var thisStartTime = $(this).data('start-time').replace('.', '');
            var thisEndTime = $(this).data('end-time').replace('.', '');
            //console.log('Selecting all events between ' + startTime + ' and ' + endTime);
            // skeleton key
            //console.log(thisStartTime + '<=' + endTime);
            if ((parseInt(thisEndTime) > parseInt(startTime)) && (parseInt(thisStartTime) < parseInt(endTime))) {
                $(this).show();
            } else {
                $(this).hide();
            }
            //
        });

    }
});