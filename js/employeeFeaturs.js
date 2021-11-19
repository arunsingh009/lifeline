

$(document).ready(function(){



    $.ajax({
        url:"../php/featureEmployees.php",
        type:"GET",
        dataType:"json",
        success:function(data){
            $.each(data,function(key,val){
                $(".employee-card-featuree").append('<div class="card-in"><div class="card-image"><img  src="../php/upload/'+val.image+'" /></div><div class="card-text"><span class="date">'+val.service+'</span><h2>'+val.fname+'</h2><span class="material-icons">star</span> <span class="material-icons"> star</span> <span class="material-icons">star</span> <span class="material-icons">star </span> <span class="material-icons">star</span> </div></div>');
            })
        }
    })
});

//card-image image ko modify krna hai for eg responsive
