<?php
    include '../component/sidebarUser.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);" >

    <div class="body d-flex justify-content-center">
        <h4>Profile</h4>
    </div>
    <hr>
    <table class="table ">
    <thead>
    <tr>
        <th scope="col">Email</th>
    </tr>  
    <tr>
        <th scope="col">Name</th>
    </tr>
    <tr>
        <th scope="col">Photo</th>
    </tr>
</thead>
<tbody>
    <?php
    $query = mysqli_query($con, "SELECT * FROM users ") or
    die(mysqli_error($con));
    if (mysqli_num_rows($query) == 0) {
        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
        }else{

            while($data = mysqli_fetch_assoc($query)){
            echo'
                <tr>
                    <th scope="row">'.$data['email'].'</th>
                </tr>
                <tr>
                    <th scope="row">'.$data['name'].'</th>
                </tr>
                <tr>
                    <th img src="/gambar/>'.$data['foto'].'</th>
                </tr>';
            
            }
            }
    ?>
</tbody>   
</div>
</aside>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html> 
