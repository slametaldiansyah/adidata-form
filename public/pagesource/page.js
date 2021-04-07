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
            console.log(steps);
            console.log(secs);
        }else{
            $('#'+secs[steps-1]+' :input')[0].reportValidity();
        }
        $('#'+secs[steps]).collapse('show');
        // steps++;
        if (steps == 7){
            document.getElementById("mySubmitId").style.display = "block";
            document.getElementById("myNextID").style.display = "none";
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
        if (steps < 7){
            document.getElementById("mySubmitId").style.display = "none";
            document.getElementById("myNextID").style.display = "block";
        }
    });

    $('.select2mul').select2();
    $(".select2fill").select2({
        tags: true
      });


});

