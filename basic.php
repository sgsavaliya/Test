<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Crop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <script src="libs/jquery.js" ></script>
        <script src="dist/rcrop.min.js" ></script>
        <link href="dist/rcrop.min.css" media="screen" rel="stylesheet" type="text/css">

        <style>
            body{margin: 0; padding: 0px}
            main{
                min-height:500px;
                display: block
            }
            pre{
                overflow: auto;
            }
            .demo{
                padding: 20px;
            }
            .image-wrapper{
                max-width: 600px;
                min-width: 200px;
            }
            img{
                max-width: 100%;
            }

        </style>

        <script>
            $(document).ready(function () {
                $('#image-1').rcrop({
                    grid: true
                });
                
            });
        </script>

    </head>
    <body>
        <main>
            <div class="demo">
                <h2>Grid</h2>
                <p>asdsda</p>
                <pre>
               
                </pre>
                <div class="image-wrapper">
                    <img id="image-1" src="images/demo.jpg">
                </div>
            </div>
        </main>
    </body>
</html>
