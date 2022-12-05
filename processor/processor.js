
$(function(){
   $('#socl').click(function(){
    swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: 'success',
        padding: "2em",
        // target: document.querySelector("html")
      });
   })

    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="adminhome";
              });

        }

        else if(response == 'logout'){

          swal({
              title: "Logout Successful!",
              text: "will be redirected soon",
              timer: 2000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="adminauth";
            });

      }
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }


        else if(response == 'loginfailed'){

            swal({
                title: "Oops!",
                text: "Record not found in database! ",
                type: "error",
                padding: "2em",
              });

        }
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function before()
{
    
    swal({
        title: 'Please Wait !',
        html: 'request in progress...',// add html attribute if you want or remove
        allowOutsideClick: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    });
}



$('.welcome').submit(function(e){

    e.preventDefault();
    // before();
    var staff = {
        url: 'processor/processor.php?action=welcome',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});


$('.sd').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=adminlogin',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// logout
$('.logi').click(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=adminlogout',
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// add slide
$('.addslide').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=addslide',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// adding Practice area

$('.addpractice').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=addpractice',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// add award 

$('.addaward').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=addaward',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// add testimony

$('.addtestimony').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=addtestimony',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// edit about 
$('.editabout').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=editabout',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// edit ceo
$('.editceo').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=editceo',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// app settings

$('.appsettings').submit(function(e){

  e.preventDefault();
  // before();
  var staff = {
      url: 'processor/processor.php?action=appsettings',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});
// profile setting

$('.profilesettings').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=profilesettings',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// add admin

$('.addadmin').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=addadmin',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// edit contact info

$('.contactsetting').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=contactsetting',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});




$('.addattorney').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=addattorney',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});
// deelting slide

$('.delslide').click(function(e){

  var id = $(this).attr('id');
  // alert(id);

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=delete&table=homeslide&id='+ id,
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// deleting practice

$('.delpractice').click(function(e){

  var id = $(this).attr('id');
  // alert(id);

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=delete&table=practiceareas&id='+ id,
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// del awards
$('.delawards').click(function(e){

  var id = $(this).attr('id');
  // alert(id);

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=delete&table=awards&id='+ id,
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// deleter testimommy
$('.deltestimony').click(function(e){

  var id = $(this).attr('id');
  // alert(id);

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=delete&table=testimony&id='+ id,
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// delete Attorney

$('.delattorney').click(function(e){

  var id = $(this).attr('id');
  // alert(id);

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=delete&table=attorney&id='+ id,
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// deleting admin

$('.deladmin').click(function(e){

  var id = $(this).attr('id');
  // alert(id);

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=delete&table=supper&id='+ id,
      type: 'post',
      // data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


    
})