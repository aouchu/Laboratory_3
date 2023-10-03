<div id="page-inner">
        <div class="row">
                    <div class="col-xs-12"> <!--col-md-8 col-sm-12  -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Products
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product's Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th colspan='2'>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($products as $pr): ?>
                                            <tr>
                                                <td><?= $pr['id']; ?></td>
                                                <td><?= $pr['name']; ?></td>
                                                <td><?= $pr['description']; ?></td>
                                                <td><img src='<?= $pr['image']; ?>' height='50dvh' width='50dvh' /></td>
                                                <td><?= $pr['price']; ?></td>
                                                <td><?= $pr['category']; ?></td>
                                                <td><?= $pr['quantity']; ?></td>
                                                <td><a href='/Delete/<?= $pr['id']; ?>' >Delete</a></td>
                                                <td><button style='background-color:transparent;border:none;color:blue' onclick="editing(<?= $pr['id']; ?>)">Edit</a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
                
</div>