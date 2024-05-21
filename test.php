<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    #showMSB {
        visibility: hidden;
        opacity: 0;
        position: fixed;
        left: 50%;
        top: 30px;
        color: #fff;
        background: #000;
        padding: 15px;
        border-radius: 2px;
    }

    #showMSB.display {
        opacity: 1;
        visibility: visible;
        -webkit-animation: fadein 1s, fadeout 1s 4s;
        animation: fadein 1s, fadeout 1s 4s;
    }

    @keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: -20px;
            opacity: 0;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: -20px;
            opacity: 0;
        }
    }

    @-webkit-keyframes fadein {
        from {
            top: -20px;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            top: -20px;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }
    </style>
</head>

<body>
    <?php
 session_start();
if(isset($_SESSION["toastMSB"])){?>
    <div id="showMSB">
        <?php echo $_SESSION["toastMSB"]; ?>
    </div>

    <?php
                        }
                        ?>

    <script>
    $(document).ready(function() {
        <?php if(isset($_SESSION["toastMSB"]) ){ ?>
        $("#showMSB").addClass("display");
        setTimeout(function() {
            $("#showMSB").removeClass("display");
        }, 5000);
        <?php
        }    
        unset($_SESSION["toastMSB"]);
    ?>
    })
    </script>
</body>

</html>