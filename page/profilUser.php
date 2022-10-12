<?php
    include '../component/sidebarUser.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>EDIT PROFIL USER</h4> 
            <a href="../page/listMoviesPage.php" onClick="return confirm ( \'Are you sure want to edit this data?\')">
            <i style="color: red" class="fa fa-arrow-left fa-2x"></i>
            </a>
        </div>
        <hr>
        <form action="../process/addMovieProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                    <option value="Comedy">Comedy</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Year Realese</label>
                <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Season</label>
                <input class="form-control" id="season" name="season" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Synopsis</label>
                <input class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="addMovie" style="background:black">Save</button>
            </div>
        </form>


    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    </body>
</html>
