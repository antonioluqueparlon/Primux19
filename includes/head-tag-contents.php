<html lang="es">

<title><?php print $PAGE_TITLE; ?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<?php } ?>

<meta name="google-site-verification" content="-dQ3Ysq-TQ7qGO_wZu8UAzDUoEidhpKbCyGKneJeWKI" />
<meta name="viewport" content="width=device-width">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

<script>
    $(document).ready(function() {

        $('.ir-arriba').click(function() {
            $('body, html').animate({
                scrollTop: '0px'
            }, 300);
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 30) {
                $('.ir-arriba').slideDown(300);
            } else {
                $('.ir-arriba').slideUp(300);
            }
        });

    });
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/styleFooter.css">
<link rel="stylesheet" href="css/styleContacto.css">
<link rel="stylesheet" href="css/styleSeccion.css">
<link rel="stylesheet" href="css/styleApartado.css">
<link rel="stylesheet" href="css/noticia.css">
<link rel="stylesheet" href="css/styleAbout.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/login.css">

<script src="js/main.js"></script>

<span class="ir-arriba fab fa-airbnb"></span>

<!--script comentarios -->

<script>
    function commentBox() {
        var name = document.getElementById('name').value;
        var comment = document.getElementById('comment').value;

        if (name == "" || comment == "") {
            alert("Porfavor introduce la informacion requerida!");
        } else {
            var parent = document.createElement('div');
            var el_name = document.createElement('h5');
            var el_message = document.createElement('p');
            var el_line = document.createElement('hr');
            var txt_name = document.createTextNode(name);
            var txt_message = document.createTextNode(comment);
            el_name.appendChild(txt_name);
            el_message.appendChild(txt_message);
            el_line.style.border = '1px solid #000';
            parent.appendChild(el_name);
            parent.appendChild(el_line);
            parent.appendChild(el_message);
            parent.setAttribute('class', 'pane');
            document.getElementById('result').appendChild(parent);

            document.getElementById('name').value = "";
            document.getElementById('comment').value = "";
        }

    }
