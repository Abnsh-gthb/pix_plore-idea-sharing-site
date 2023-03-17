
<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModal" aria-hidden="true">
    <form action="..\Project1\upload.php" method="post" enctype="multipart/form-data">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-5">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="img">
                </div>
                <div class="input-group flex-nowrap mb-5">
                    <span class="input-group-text" id="addon-wrapping" name="name">Image Name</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <select class="form-control form-control" name="category">
                    <option selected disabled>Select Category</option>
                    <?php
                          $sql = "SELECT * FROM `category`";
                          $res = mysqli_query($con, $sql);
                          while ($row = mysqli_fetch_assoc($res)) {
                              echo '<option value="'. $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                          }
                    ?>
                </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo '
                    <button type="submit" class="btn btn-success" name="submit">Upload</button>
                    ';
                }
                else{
                    echo '
                    <button type="submit" class="btn btn-success" name="submit" disabled>Login to Upload</button>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
    </form>
</div>