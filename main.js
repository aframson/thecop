$(function (params) {
    


    $("#alld").change(function() {
        if($(this).prop('checked')) {
            $('#memurl').hide();
        } else {
            $('#memurl').show();
        }
    });
    
    


    $('#show').click(function (e) {

        e.preventDefault();

         $.ajax({
            url:'route.php?func=showWiz',
            method:'post',
            dataType:'text',
            data:$(".kt-form").serialize(),

            success:function (data) {
                $('#showwiz').html(data)
            }

       })
         
    })


$('#subform').click(function (e) {


        e.preventDefault();

        $.ajax({
             url:'route.php?func=SubmitForms',
             method:'post',
             dataType:'text',
             data:$(".kt-form").serialize(),
             beforeSend:function() {
               
             },
             success:function (data) {
                //    alert(data)
                window.location.href="print.php"
             }

        })


    })






    $('#deact').click(function (e) {
            e.preventDefault();

            let number = 0;

            $.ajax({
                url:'route.php?func=Deactivate',
                method:'post',
                dataType:'text',
                data:{data:number},
                beforeSend:function (params) {
                    
                },
                success:function (data) {
                      alert(data)
                }
            })





    })





    $('#update1').click(function (e) {
            e.preventDefault();

            $.ajax({
                url:'route.php?func=UpdateUserInfo',
                method:'post',
                dataType:'text',
                data:$('#fsub').serialize(),
                beforeSend:function (params) {
                    
                },
                success:function (data) {
                      alert(data)
                }
            })



    })








    $("#chp").click(function (e) {

           e.preventDefault();

           $.ajax({
            url:'route.php?func=UpdatePass',
            method:'post',
            dataType:'text',
            data:$('#passform').serialize(),
            beforeSend:function (params) {
                
            },
            success:function (data) {
                  if(data =='done'){
                      alert(data)
                  }else{
                      alert(data)
                  }
            }
        })

    })







})