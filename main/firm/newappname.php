<?php mainchecker('admin', 'adminauth'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>App Settings</title>


<link rel="stylesheet" href="main/firm/css/bootstrap.min.css" />

<link rel="stylesheet" href="main/firm/vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="main/firm/vendors/swiper_slider/css/swiper.min.css" />

<link rel="stylesheet" href="main/firm/vendors/select2/css/select2.min.css" />

<link rel="stylesheet" href="main/firm/vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="main/firm/vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="main/firm/vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="main/firm/vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="main/firm/vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="main/firm/vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="main/firm/vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="main/firm/vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="main/firm/vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="main/firm/vendors/morris/morris.css">

<link rel="stylesheet" href="main/firm/vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="main/firm/css/metisMenu.css">

<link rel="stylesheet" href="main/firm/css/style.css" />
<link rel="stylesheet" href="main/firm/css/colors/default.css" id="colorSkinCSS">
<?php echo Yolk::uicore('cssa'); ?>
</head>
<body class="crm_body_bg">



<?php involve('adminnav.php'); ?>


<section class="main_content dashboard_part">

<?php involve('admintop.php'); ?>

<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h2 class="center-text">App Setings</h2>
</div>
</div>

<?php
$row = fetchall('settings');
echo  $row[0]['logo'] != '' ? '<h4>App logo</h4><img src="yolkassets/upload/'.$row[0]['logo'].'"/>' : '';
echo $row[0]['favicon'] != '' ? '<h4>App Favicon</h4><img src="yolkassets/upload/'.$row[0]['favicon'].'"/>' : '';
?>


<form class="appsettings">
<div class="form-group">
<label for="exampleFormControlInput1">App Name</label>
<input type="text" name="appname" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $row[0]['appname']; ?>">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Footer Text</label>
<input type="text" name="footertext" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $row[0]['footertext']; ?>">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Facebook Link</label>
<input type="text" name="facebook" class="form-control" id="exampleFormControlInput1" placeholder=""  value="<?php echo $row[0]['facebook']; ?>">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Twitter Link</label>
<input type="text" name="twitter" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $row[0]['twitter']; ?>">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Linkedin Link</label>
<input type="text" name="linkedin" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $row[0]['linkedin']; ?>">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Skype Link</label>
<input type="text" name="skype" class="form-control" id="exampleFormControlInput1" placeholder=""  value="<?php echo $row[0]['skype']; ?>">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Short Description of app</label>
<textarea  name="shortnote" class="form-control" id="exampleFormControlInput1" placeholder=""><?php echo $row[0]['shortnote']; ?></textarea>
</div>



<!-- <div class="form-group">
    <select class="default_sel mb_30 w-100">
<option data-display="Select">Nothing</option>
<option value="1">Some option</option>
<option value="2">Another option</option>
<option value="3" disabled>A disabled option</option>
<option value="4">Potato</option>
</select>
</div> -->
<div class="form-group">
    <?php echo inputfile::basic('logo', 'Upload App logo', '', 'value="'.$row[0]['logo'].'"'); ?>   
</div>


<div class="form-group">
    <?php echo inputfile::basic('favicon', 'Upload favicon', '', 'value="'.$row[0]['favicon'].'"'); ?>   
</div>
<?php echo inputs::input('submit', 'bnt', 'primary', 'cener-button', 'Submit'); ?>



</form>
</div>
</div>




</div>
</div>

<?php involve('adminfooter.php'); ?>
</section>



<script src="main/firm/js/jquery-3.4.1.min.js"></script>

<script src="main/firm/js/popper.min.js"></script>

<script src="main/firm/js/bootstrap.min.js"></script>

<script src="main/firm/js/metisMenu.js"></script>

<script src="main/firm/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="main/firm/vendors/chartlist/Chart.min.js"></script>

<script src="main/firm/vendors/count_up/jquery.counterup.min.js"></script>

<script src="main/firm/vendors/swiper_slider/js/swiper.min.js"></script>

<script src="main/firm/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="main/firm/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="main/firm/vendors/gijgo/gijgo.min.js"></script>

<script src="main/firm/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="main/firm/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="main/firm/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="main/firm/vendors/datatable/js/jszip.min.js"></script>
<script src="main/firm/vendors/datatable/js/pdfmake.min.js"></script>
<script src="main/firm/vendors/datatable/js/vfs_fonts.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.print.min.js"></script>
<script src="main/firm/js/chart.min.js"></script>

<script src="main/firm/vendors/progressbar/jquery.barfiller.js"></script>

<script src="main/firm/vendors/tagsinput/tagsinput.js"></script>

<script src="main/firm/vendors/text_editor/summernote-bs4.js"></script>

<script src="main/firm/js/custom.js"></script>


<script src="main/firm/js/active_chart.js"></script>
<?php echo Yolk::uicore('jsa'); ?>
<script src="processor/processor.js"></script>
</body>
</html>