<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming soon page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
        .page-title{
            color: #20BDEA ;
            padding-left: 28%;
            padding-right: 30%;
            padding-top: 10%;
        }
        .welcome-paragraph {
            font-size: 3rem;
        }


    </style>
</head>
<body>
    <div class="page-title">
        <h1 class="welcome-paragraph">Hello fam, we are coming for you</h1>
        <div>
            <img src="{{ asset('assets/images/under-construction.gif') }}" alt="">
        </div>
    </div>
    {{-- <iframe src="https://giphy.com/embed/mlvseq9yvZhba" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/funny-cat-mlvseq9yvZhba">via GIPHY</a></p> --}}
</body>
</html>
