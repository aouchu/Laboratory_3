<div id="page-inner">
        <div class="row">
                    <div class="col-xs-12"> <!--col-md-8 col-sm-12  -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Products
                            </div>
                            <div class="panel-body">
                            <form action='/Search' method='get'>
                                <div class="form-group">
                                    <label for="find">Search:</label>
                                    <input type="text" style='width:50%;display:inline' name="find">
                                    <select id='option' style='padding:.22dvh;display:inline' name='option'>
                                        <option>Select a Category</option>
                                        <option value='name'>Name</option>
                                        <option value='description'>Description</option>
                                        <option value='price'>Price</option>
                                        <option value='category'>Category</option>
                                        <option value='quantity'>Quantity</option>
                                    </select>
                                </div>  
                            </form>
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
                                            <?php if(isset($set)): ?>
                                                <?php foreach($search as $rows): ?>
                                            <tr>
                                                <td><?= $rows['id']; ?></td>
                                                <td><?= $rows['name']; ?></td>
                                                <td><?= $rows['description']; ?></td>
                                                <td><img src='<?= $rows['image']; ?>' height='50dvh' width='50dvh' /></td>
                                                <td><?= $rows['price']; ?></td>
                                                <td><?= $rows['category']; ?></td>
                                                <td><?= $rows['quantity']; ?></td>
                                                <td><a href='/Delete/<?= $rows['id']; ?>' >Delete</a></td>
                                                <td><button style='background-color:transparent;border:none;color:blue' onclick="editing(<?= $rows['id']; ?>)">Edit</a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
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
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
                
</div>