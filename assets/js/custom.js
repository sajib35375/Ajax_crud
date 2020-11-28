(function ($){
    $(document).ready(function (){

        $('input#staff_photo').change(function(e){
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#staff_photo_load').attr('src',file_url);
        });

        $(document).on('submit','form#staff_form',function(event){
            event.preventDefault();
           let name = $('form#staff_form input[name="name"]').val();
           let email = $('form#staff_form input[name="email"]').val();
           let cell = $('form#staff_form input[name="cell"]').val();

           if ( name == '' || email=='' || cell == '' ){
               $('.msg').html('<p class="alert alert-danger">all fields are required<button class="close" data-dismiss="alert">&times;</button></p>');
           }else{

               $.ajax({
                  url:"ajax_template/staff_add.php",
                   method:"POST",
                   data:new FormData(this),
                   contentType:false,
                   processData:false,
                   success:function(data){
                      $('.msg').html(data);
                      $('form#staff_form')[0].reset();
                       $('img#staff_photo_load').attr('src','');
                       all_staff();
                   }
               });



           }
        });

        all_staff();
        function all_staff(){
            $.ajax({
                url:"ajax_template/staff_all.php",
                success:function (data){
                    $('tbody#staff_id').html(data);
                }
            });

        }



    });
})(jQuery)