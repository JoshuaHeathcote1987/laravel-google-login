<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generation Ƶ</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">

    <style>
        input[type=text] {
            border: 1px solid #000;
            border-radius: 3px 3px 3px 3px;
        }

        label {
            font-size: x-large;
        }
    </style>
</head>

<body style="background-image: url({{ asset('storage/images/accepted.jpg') }}); background-repeat: no-repeat; background-size: auto; background-size: cover; background-attachment: fixed; font-family: 'Germania One', cursive;">

    <!-- Container -->
    <div class="d-block mx-auto" style="width: 40%; margin-top: 5rem;">
        <div class="row my-5 p-5 shadow-lg d-block mx-auto" style="background: rgba(204, 204, 204, 0.5); border: 1px solid black; border-radius: 5px 5px 5px 5px;">

            <img src="{{ asset('storage/images/strength.png') }}" alt="" srcset="" class="d-block mx-auto" style="width: 30%; height: auto;">

            <form class="row g-3" method="POST" action="/introduction">
                @csrf
                <div class="col-md-6">
                    <label class="form-label">Game-Name</label>
                    <input name="game_name" type="text" class="form-control" id="inputEmail4" class="@error('game_name') is-invalid @enderror">

                    @error('game_name')
                    <div class="mt-3 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">Friend Code (Discord)</label>
                    <input name="friend_code" type="text" class="form-control" id="inputPassword4" class="@error('friend_code') is-invalid @enderror">

                    @error('friend_code')
                    <div class="mt-3 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Reasons for joining? (500 characters max)</label>
                    <textarea name="body" style="border: 1px solid black;" class="form-control" id="exampleFormControlTextarea1" rows="3" class="@error('friend_code') is-invalid @enderror"></textarea>

                    @error('body')
                    <div class="mt-3 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr style="color: black; margin-top: 30px;">
                <div class="col-12" style="margin-top: 25px;">
                    <button type="submit" class="btn btn-success" style="width: 200px; border: 1px solid black;">Send</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>