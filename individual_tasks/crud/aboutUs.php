<?php include '../header.php';
?>

<h2>About Us</h2>

    <script>
        //this is a comment
        document.write("Hello world")
        //this is an alert box
        //window.alert("This is an alert box")
    </script>

<noscript>
    If Javascript is disabled:please enable Js.
</noscript>


<script>
        //document.write but after loading the page
        // document.write("Hello world")

        function hello()
        {
            document.write("This is afer the has loaded")
        }
       
</script>

    <button oclick="hello()"> Click Me</button>
    <!--instead of calling fucntion we can add js code to do something-->
    <button onclick="document.write('This is that')"> Click Me</button>

<?php include '../footer.php';
?>