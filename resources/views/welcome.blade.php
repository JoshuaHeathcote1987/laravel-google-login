<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Generation Ƶ</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">

</head>

<body style="background-image: url('{{ asset('storage/images/dayz.jpg') }}'); background-repeat: no-repeat; background-size: auto; background-size: cover; background-attachment: fixed; font-family: 'Germania One', cursive;">

    <!-- Container -->
    <div class="d-block mx-auto" style="width: 70%; margin-top: 5rem;">
        <div class="row">
            <img src="{{ asset('storage/images/z.png') }}" alt="" srcset="" class="d-block mx-auto" style="width: 30%; height: auto;">
        </div>

        <div class="row mt-5 p-5 shadow-lg d-block mx-auto" style="background: rgba(255, 255, 255, 0.8); border: 1px solid black; border-radius: 5px 5px 5px 5px; overflow-y: scroll; height: 500px;">
            @include('policy/code-of-conduct')
        </div>

        <div class="row my-4">
            <div class="col">
                <a href="/introduction">
                    <button onmouseover="greenIn(this)" onmouseout="greenOut(this)" style="background-color: rgb(0, 153, 51, 0.5); border: 1px solid black; border-radius: 5px 5px 5px 5px; width: 100%; height: 80px; font-size:xx-large;">
                        Accept
                    </button>
                </a>
            </div>
            <div class="col mb-5">
                <a href="/declined">
                    <button onmouseover="redIn(this)" onmouseout="redOut(this)" style="background-color: rgb(255, 0, 0, 0.5); border: 1px solid black; border-radius: 5px 5px 5px 5px; width: 100%; height: 80px; font-size:xx-large;">
                        Decline
                    </button>
                </a>
            </div>
        </div>

    </div>

    <script>
        function greenIn(x) {
            x.style.backgroundColor = 'rgb(0, 153, 51, 1)';
            x.style.boxShadow = '-4px -3px 45px 3px rgba(0, 0, 0, 0.5)';
        }

        function greenOut(x) {
            x.style.backgroundColor = 'rgb(0, 153, 51, 0.5 )';
            x.style.boxShadow = '-4px -3px 45px 3px rgba(0, 0, 0, 0)';
        }

        function redIn(x) {
            x.style.backgroundColor = 'rgb(255, 0, 0, 1)';
            x.style.boxShadow = '-4px -3px 45px 3px rgba(0, 0, 0, 0.5)';
        }

        function redOut(x) {
            x.style.backgroundColor = 'rgb(255, 0, 0, 0.5 )';
            x.style.boxShadow = '-4px -3px 45px 3px rgba(0, 0, 0, 0)';
        }
    </script>

</body>

</html>