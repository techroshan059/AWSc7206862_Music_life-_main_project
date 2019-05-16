<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link href="{{url('frontend/css/main.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('frontend/css/bootstrap.css')}}" rel="stylesheet">
<!-- icofont -->
<link href="{{url('frontend/css/icofont.css')}}" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="{{url('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="{{url('frontend/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />

<!-- stylesheet -->
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>



<meta name="csrf-token" content="{{csrf_token()}}">
<script>
    window.laravel = {csrfToken:'{{csrf_token()}}'}
</script>




<style>
    .invalid-feedback{
        color: red;
    }
    .btn--hollow {
        padding-left: 25px;
        border: 1px solid #8c0000;
        color: #8c0000;
        background: transparent;
        padding-right: 25px;
        padding-top: 8px;
        padding-bottom: 8px;

    }
    .btn--hollow:hover{
      background: #8c00000d;

    }

[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
    display: none !important;
}


.default-img{
    width: 10rem;
    height: 10rem;
    background: #006591;
    border-radius: 100%;

    border: 2px solid #8c0000;


}
.profile__pic {
    width: 10rem;
    height: 10rem;
    background-color: white;
}
.d-flex ul li label{
   font-size: 1.3rem;
    font-weight: 600;
    cursor:pointer;
}
.d-flex ul li label:hover{
   color: #2b2b2b;
}
.default-img{
    width: 10rem;
    height: 10rem;
    background: #006591;
    border-radius: 100%;

    border: 2px solid #8c0000;


}
.profile__pic {
    width: 10rem;
    height: 10rem;
    background-color: white;
}
.d-flex ul li label{
   font-size: 1.3rem;
    font-weight: 600;
    cursor:pointer;
}
.d-flex ul li label:hover{
   color: #2b2b2b;
}
.btn-inverse-primary{
    border: 1px solid #ccc;
    color: #076c93;

    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),             0 2px 4px 0 rgba(0,0,0,0.08);
    border-radius: 0;
    padding: 10px 30px 10px 30px;

}

</style>

<style>

        @media (max-width: 991px)
        {
            .sidebar-nav ul {
                border-bottom: 1px solid #E7E7E7;
                margin-bottom: 1rem;
                overflow-x: scroll;
            }
        }


        @media (max-width: 575px){
            h1 {
                font-size: 1.75rem;
            }
        }

        @media (max-width: 767px)
        {
            .profile__links {
font-size: 10px;
display: inline-block;
line-height: 1.5;
}
        }


      
    .manage-nav-side{
        border-right: 1px solid #E7E7E7

    }
    .manage-sidebar-nav{
        font-size:2rem;
    }
    .manage-nav{
        list-style: none;
    }
    .manage-nav li{
        padding-bottom: 1rem;
    }
    .manage-nav li a{
        color: #4A4A4A;
        font-family:"Roboto", sans-serif;
        font-size: 1.6rem;
    }
    .manage-nav li a:hover{
        color: #337ab7;
    }
    .manage-nav li a .active{
        color: #8a0304;
        text-decoration: none;
    }

    .form label {
        font-size: 1rem;
        color: #9B9B9B;
        text-transform: uppercase;
        font-weight: 500;
        margin-bottom: 0.25rem;
    }
    .profile__pic {
        width: 8rem;
        height: 8rem;
        font-size: 2.5rem;
        background-color: #FAFAFA;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .rounded-circle {
        border-radius: 50%;
    }
    .mb-3 {
        margin-bottom: 2rem !important;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: 0.5rem 0.75rem;
        font-size: 1.3rem;
        line-height: 1.25;
        color: #2b2b2b;
        background-color: #FFFFFF;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid rgba(74, 74, 74, 0.15);
        border-radius: 1px;
        -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    }
    .btn--primary{
        color: white;
        background: #006493;
    }

    .btn--cancel{
        color: white;
        background: #d62d2d;
    }

    .btn--primary:hover{
        color: white;
        background: #0064939e;
    }

    .btn--cancel:hover{
        color: white;
        background: #d62d2d9e;
    }

    .main-space {
        min-height: 30rem;
    }

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
        font-size: 18px;
        font-weight: 100;
    }


    @media (max-width: 767px)
  
    {
        .sidebar-nav li a {
            display: inline-block;
            width: 2.7rem;
            text-align: center;
        
        }
    }


    @media (max-width: 767px)
    {
        .profile__nav li .icofont {
            display: block;
        }
    }


.profile__nav li .icofont {
font-size: 2rem;
}
.icofont {
color: #9B9B9B;
vertical-align: middle;
}

    @media (max-width: 767px)
    {
        .profile__links {
            font-size: 10px;
            display: inline-block;
            line-height: 1.5;
        }
        
    }

    .main-space {
        min-height: 30rem;
    }
    
    .container {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        padding-right: 15px;
        padding-left: 15px;
    }

    .nav > li > a {
        position: relative;
        display: block;
        padding: 2px 3px;
    }

  
    




</style>