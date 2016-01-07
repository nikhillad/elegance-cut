<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS
    ================================================== -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template
    ================================================== -->
    <link href="{{asset('css/uikit.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="uikit/js/html5shiv.js"></script>
    <script src="uikit/js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .tag-line{
        font-weight:bold;
        color:#e95144;
        font-size:17px;
        font-family: 'Poiret One', cursive;
      }
      .top-header-menu{
        margin: 0px;     
        float: right; 
      }
      .top-header-menu-li {
        margin-right: 8px;
        margin-left: 8px;
        font-size: 12px;
      }
      .header-cols{
        /*height: 130px;*/
      }
      .main-header .brand-col{
        padding-top: 0px !important;
        padding-bottom: 24px !important;
      }
      .cart-button-title{
          vertical-align:top;
          margin-left:10px;
      }
      .blue-button{
        background-color: #006CB4;
        border-radius: 3px !important;
        color: #fff;
      }
      .blue-button:hover, .blue-button:visited, .blue-button:focus{
        color: #fff !important;
      }
      .simple-container{
         padding-top: 0px !important;
         padding-bottom: 15px !important;
      }
      .generic-page-header{
        text-align: center;
        margin-bottom: 10px;
      }
       .generic-page-header-left{
       
      }
      .generic-page-header-hr{
        color: #e7214c;
        margin: 0 auto;
        width: 100px;
        margin-bottom: 30px;
        border-bottom: 2px solid #e7214c;
      }
      .message-div{
        background-color: #e7214c;
        border-radius: 3px;
        margin-top: 5px;
        margin-bottom: 20px;
        padding: 10px;
        color: #fff;
        display: none;
      }
    </style>
  </head>