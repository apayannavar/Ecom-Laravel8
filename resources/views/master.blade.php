<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>FARMERS MARKET</title>
</head>
<body>
   
    {{-- header starts here --}}
    {{-- header is added here bfore the content --}}
    {{ View::make('header') }} 
    {{-- header ends here --}}


    {{-- content starts here --}}
    @yield('content')
    {{-- content ends here --}}


    {{-- footer starts here --}}
    {{-- footer is added here after the content --}}
    {{ View::make('footer') }} 
    {{-- footer ends here --}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;   
    }
    img.slider-img{
        height: 400px !important;
    } 
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: #d3c4a2 !important;
        font-size: 20px;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 10%;
        padding: 5px;
        background-color: #dfe6e9;
    }
    .trending-wrapper{
        margin: 10px;
        background-color: #b8e994;
        padding: 2px;
        text-align: center;
    }
    .detail-img{
        height: 350px;

    }
    .product-category-detail-page{
        text-align: center;
        color: grey;
    }
    .btn-buy-now{
        background-color: #e55039;
    }
    .search-box{
        width: 500px !important;
    }
    .searched-wrapper{
        margin: 10px;
        padding: 5px;
        text-align: center;
    }
    .searched-img{
        height: 250px;
    }
    .seached-result-heading{
        text-align: center;
        padding: 30px;
        background-color: #f7f1e3;
    }
    .cart-list-divider{
        border-bottom: 2px solid #cccc;
        margin-bottom: 20px;
        padding-bottom: 20px; 
    }

</style>
</html>