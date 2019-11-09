<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/public/images/favicon.ico" rel="icon" type="image/x-icon" />

    <title><?php print $_SESSION['oConfig']->getConfig()->info->title; ?></title>

    <link rel="stylesheet" type="text/css" href="/public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/public/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/public/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="/public/css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/responsive.css">

    <?php echo $aViewCss; ?>
</head>

<style>
    #countryList{
        position: absolute;
        background-color: #efefef;
        width: 100%;
        border-bottom: 1px solid #bdbdbd;
        border-right: 1px solid #bdbdbd;
        border-left: 1px solid #bdbdbd;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        text-align: left;
        box-shadow: 0 4px 7px -5px black;
        z-index: 10;
    }

    #countryList li:hover{
        background-color: #ff8d8d !important;
        transition: all 0.5ms;
    }

    #countryList li:hover a{
        color: #ffffff !important;
        transition: all 0.5ms;
    }
</style>