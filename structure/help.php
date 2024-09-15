<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/loader.css">
    <title>help</title>
</head>
<body>

    <!-- loading animation -->
    <div id="loader"></div>
    <script>
        load_page();
        unload_page();
        function load_page(){
            window.addEventListener('load', ()=>{
                document.getElementById('loader').classList.add('page_ready');
            });
        }
        function unload_page(){
            window.addEventListener('unload', ()=>{
                document.getElementById('loader').classList.add('page_ready');
            });
        }
    </script>
    
</body>
</html>