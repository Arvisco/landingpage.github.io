<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>

<body class="bg-dark">
    <script>
        AOS.init();
    </script>
    <div class="row m-5 text-center" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="col align-self-center">
            <h1 class="text-white " style="font-family: 'Francois One', sans-serif;">Nama Produk</h1>
            <hr class="hr border border-white border-2 opacity-75">
            </hr>
        </div>
    </div>
    <div class="row m-5" data-aos="fade-left">
        <div class="col">
            <div class="container">
                <div id="carouselExample" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <img src="https://i.pinimg.com/564x/44/ad/67/44ad67fc7f9eb01f4f8a5a87ef157b52.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption bg-dark opacity-50 rounded-5">
                                <h3 class="text-white">Special cake only for special person</h3>
                                <p>Give the best for ur special one.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/564x/ec/c7/d6/ecc7d690fd7b83a0dbe81207965c07da.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption bg-dark opacity-50 rounded-5">
                                <h3 class="text-white">Any cakes with any flavor</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/736x/13/4f/2d/134f2d70092d492946ce6558a20d8c42.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-5 text-center">
        <div class="col align-self-center">
            <h4 class="text-white">What u waiting for?</h4>
            <p class="text-white">hurry up hit us on facebook</p>
            <a class="btn button-34  btn-primary">Continue to our Facebook</a>
        </div>
    </div>


<style>

/* CSS */
.button-34 {
  background: #5E5DF0;
  border-radius: 999px;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}
</style>
</body>

</html>