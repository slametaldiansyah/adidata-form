$(document).ready(function() {
    var steps = 1;
    var secs = [
        'jabatan',
        'personal-data',
        'family',
        'education',
        'kemampuan',
        'pengalaman',
        'orgnref',
        'other'
    ];

    $('#jabatan').collapse({
        toggle: false
      })

    $('.next').click(function() {
        if(steps > 0 & $('#'+secs[steps-1]+' :input')[0].checkValidity()){
            $('#forms').on('show.bs.collapse','.collapse', function() {
                $('#forms').find('.collapse.show').collapse('hide');
            });
            $('#'+secs[steps]).collapse('show');
            steps++;
        }else{
            $('#'+secs[steps-1]+' :input')[0].reportValidity();
        }
    });

    $('.prev').click(function() {
        console.log(secs[steps-1]);
        if(steps > 1){
            $('#forms').on('show.bs.collapse','.collapse', function() {
                $('#forms').find('.collapse.show').collapse('hide');
            });
            $('#'+secs[steps-2]).collapse('show');
            steps--;
        }
    });

    $('.select2mul').select2();
    $(".select2fill").select2({
        tags: true
      });


});

