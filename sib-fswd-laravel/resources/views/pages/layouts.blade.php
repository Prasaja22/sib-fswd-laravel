<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    @yield('abel')

    <div class="container my-4">

        <h3>Table User</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>email</td>
                    <td>nama</td>
                    <td>role</td>
                    <td>data</td>
                    <td>phone</td>
                    <td>address</td>
                    <td>
                        <a type="button" class="btn btn-danger"
                            href="#">Delete</a>
                        <button class="btn btn-warning" data-toggle="modal" type="button"
                            data-target="#update_modal"><span
                                class="glyphicon glyphicon-edit"></span> Edit</button>
                        <div class="modal fade" id="update_modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="databases/update.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Email address</label>
                                                <input name="id" type="hidden" value=""
                                                    class="form-control" id="exampleFormControlInput1"
                                                    placeholder="email@email.com">
                                                <input name="email" type="email" value=""
                                                    class="form-control" id="exampleFormControlInput1"
                                                    placeholder="email@email.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Name</label>
                                                <input name="nama" type="text" value=""
                                                    class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Password</label>
                                                <input name="password" type="text"
                                                    value="" class="form-control"
                                                    id="exampleFormControlInput1" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Role</label>
                                                <select value="" name="role"
                                                    class="form-control" id="exampleFormControlSelect1">
                                                    <option value="admin">Admin</option>
                                                    <option value="staff">Staff</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Avatar</label> <br>
                                                <img src="#" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input name="avatar" value="" type="file"
                                                    class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Phone</label>
                                                <input name="phone" type="number" value=""
                                                    class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Address</label>
                                                <textarea name="address" class="form-control"
                                                    id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" name="tambah"
                                                    class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>



        </table>
        <!-- Button trigger modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input name="nama" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input name="password" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Role</label>
                                <select name="role" class="form-control" id="exampleFormControlSelect1">
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Avatar</label>
                                <input name="avatar" type="file" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Phone</label>
                                <input name="phone" type="number" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea name="address" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="tambah" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


</html>
