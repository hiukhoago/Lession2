
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Category Detail</title>
</head>

<body>
    <header></header>
    <main>
        <div class="container my-3">
            <input class="form-control my-3" id="myInput" type="text" placeholder="Search..">
            <div class="d-flex justify-content-between my-3">
                <div>Search found 20 results</div>
                <a href="../index.php?controller=CategoryController&action=create">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </a>
            </div>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add new category</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="usr">Categoty name</label>
                                    <input type="text" class="form-control" id="usr">
                                    <?php if(isset($error)) echo $error ?>
                                </div>
                                <div class="form-group">
                                    <label for="usr">Parent categoty</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category name</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    foreach ($data as $category) {
                    ?>
                        <tr>
                            <td><?php echo $category['id'] ?></td>
                            <td><?php echo $category['name'] ?></td>
                            <td>
                                <a href="../index.php?controller=CategoryController&action=edit&id=<?=$category['id']?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="CategoryList.php?controller=CategoryController&action=detail&id=<?=$category['id']?>">
                                <i class="fa fa-files-o" aria-hidden="true"></i></a>
                                <a href="CategoryList.php?controller=CategoryController&action=delete&id=<?=$category['id']?>">
                                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="my-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer></footer>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


    <!-- Thư viện jquery đã nén phục vụ cho bootstrap.min.js  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Thư viện popper đã nén phục vụ cho bootstrap.min.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bản js đã nén của bootstrap 4, đặt dưới cùng trước thẻ đóng body-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>