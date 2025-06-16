<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10+Charted&display=swap" rel="stylesheet">


    <title>Primo progetto Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body class="background">


    <main>

        <h1>Melaniadoesstuff</h1>
        <section class="profile">
            <h2 id>Chi sono</h2>
            <div class="bio">

                <p>Ci sono tre cose che dovete sapere su di me</p>
                <ul>
                    <li>Sono un unicorno bellissimo</li>
                    <li><b>Adoro</b> i gatti;</li>
                    <li>il mio interno ha 90 anni</li>
                </ul>
            </div>
        </section>
        <section>
            <h2>I miei postsss</h2>

            <div class="container">

                @foreach($articoli as $articolo)
                <article class="card">
                    <h4>{{$articolo['id']}}-{{$articolo['title']}}</h4>
                    <p>{{$articolo['description']}}</p>
                </article>
                @endforeach
            </div>





        </section>
    </main>
    <footer>
        <div class="img-chat">
            <a href="https://www.linkedin.com/in/melania-matacena/" target="_blank"> Contattami!</a>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>