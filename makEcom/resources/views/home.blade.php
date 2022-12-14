<!DOCTYPE html>
<html lang="en">

<head>
    @include("homecss")
</head>

<body>
    
    @include("topbar")

    @include("navbar")

    @include("features")

    @include("categories")
    
    @include("offers")

    @include("products")

    @include("discount")

    @include("contact")

    {{-- <style>
        .iframeContainer {
            position: relative;
            height: 500px;
            width: 100%;
        }
        .iframecontent {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100%;
            height: 450px;
        }
    </style>
    <div class="iframeContainer">
        <iframe src="http://10.12.17.46:8080/ords/appl_inv/hr/" class="iframecontent" frameborder="0"></iframe>r

    </div> --}}

    @include("footer")

    <!-- Back to Top -->
    {{-- align-items-center justify-content-center --}}
    {{-- <a href="#" class="back-to-top d-flex">
        <i class="bi bi-arrow-up-short"></i>
    </a> --}}
    {{-- <a href="#navbar" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a> --}}

    @include("homejs")
</body>
</html>