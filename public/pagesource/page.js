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

        if(steps > 0){
            for (let indexcek = 1; indexcek < 50; indexcek++) {
                console.log($('#'+secs[steps-1]+'-input-'+indexcek));
                if (document.getElementById(secs[steps-1]+'-input-'+indexcek) != null) {
                    if ($('#'+secs[steps-1]+'-input-'+indexcek+' :input')[0].checkValidity() != true) {
                        // validatorcek++;
                        //  console.log($('#'+secs[steps-1]+'-input-'+indexcek+' :input')[0].reportValidity());
                        //  alert('tolong masukan semua data');
                        //  alert( 'Please Input ' +$('#'+secs[steps-1]+'-input-'+indexcek).attr('data-error'));
                        //  alert( 'Please Input ' +$('#'+secs[steps-1]+'-input-'+indexcek)[0].innerText);
                        // let info = $('#'+secs[steps-1]+'-input-'+indexcek).attr('data-error');
                         Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Input ' +$('#'+secs[steps-1]+'-input-'+indexcek).attr('data-error')
                          });
                          $('#'+secs[steps-1]+'-input-'+indexcek).attr('style','color: #fa0909!important');
                        //  console.log( 'Please Input ' +$('#'+secs[steps-1]+'-input-'+indexcek)[0].innerHTML);
                        //  $('#'+secs[steps-1]+'-input-'+indexcek)[0].innerHTML;
                        //  console.log($('#'+secs[steps-1]+'-input-'+indexcek));
                         break;

                    }else{

                    }
                    // if (validatorcek==0) {
                    //     alert('success');
                    // }
                }else{
                        $('.forms').on('show.bs.collapse','.collapse', function() {
                            $('.forms').find('.collapse.show').collapse('hide');
                        });
                        $('#'+secs[steps]).collapse('show');
                        $('#'+secs[steps-1]+'-pita').removeClass("pita1");
                        $('#'+secs[steps-1]+'-pita').addClass("pita");
                        console.log(secs[steps-1]);
                        console.log(steps);
                        steps++;
                        break;
                }

            }
        }else{
            $('#'+secs[steps-1]+' :input')[0].reportValidity();
            // console.log($('#'+secs[steps-1]+' :input')[0].reportValidity());
        }
        if (steps == 8){
            document.getElementById("mySubmitId").style.display = "block";
            document.getElementById("myNextID").style.display = "none";
        }


    });

    $('.prev').click(function() {
        console.log(secs[steps-1]);
        console.log(steps);
        if(steps > 1){
            $('.forms').on('show.bs.collapse','.collapse', function() {
                $('.forms').find('.collapse.show').collapse('hide');
            });
            $('#'+secs[steps-1]).collapse('hide');
            $('#'+secs[steps-2]).collapse('show');
            $('#'+secs[steps-2]+'-pita').removeClass("pita");
            $('#'+secs[steps-2]+'-pita').addClass("pita1");
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

