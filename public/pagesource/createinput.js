
function addBtnFormal() {

    var n = 1;
    var div1 = document.createElement("div");
    div1.className = 'row';
    var div2 = document.createElement("div");
    div2.className = 'col-md-2';
    var select = document.createElement("select");
    select.setAttribute("class",'form-control');
    select.setAttribute("name",'formal['+n+'][jenjang]');
    select.append('<option value="">--option--</option>@foreach ($educationlist as $es)<option value="{{$es->id}}">{{$es->education}}</option>@endforeach');
    select.append('<small id="jenjang-2" class="form-text text-muted">Jenjang</small>');
    div2.append(select);
    div1.append(div2);

    document.getElementById("formallist").appendChild(div1);
}

// $(function(){
//     var $select = $(".yearNum");
//     var n = ' Year';
//     for (i=0;i<=5;i++){
//         $select.append($('<option></option>').val(i).html(i+n))
//     }
//     });

//     $(select).append('<option value=' + data.data[i]['email'] + '>' + data.data[i]['email'] + '</option>');

// var div= document.createElement('div');
// div.innerHTML= '<input type="radio" name="test" value="a" />';
// var radio= div.firstChild;
