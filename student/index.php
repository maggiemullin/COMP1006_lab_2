    <?php include('header.php'); ?>
    <body>
        <div class="container">
            <div class="wrapper">
                
                <header>
                    <h1> Silly Valentine Poem Generator </h1>
                </header>
                <form method="post" action="poem-generator.php">
                    <div class="form-group">
                        <input type="text" placeholder="Enter your favorite colour" name="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Enter a plural noun" name="noun" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="enter a name" name="person" class="form-control">
                    </div>
                    <input type="submit" value="submit" class="btn btn-primary" name="submit">
                </form>
                    
            </div>
        </div><!--end container-->
    </body>
</html>