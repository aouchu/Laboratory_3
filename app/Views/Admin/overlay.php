<div class='overlay <?php if(isset($prod['id']) || isset($setter)): else:?><?= 'hidden'; endif; ?>'>
</div>

<section id='manage' class='<?php if(isset($prod['id']) || isset($setter)): else:?><?= 'hidden'; endif; ?>'>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title"><?php if(isset($setter)): if($setter == 'null'): ?><?= 'Add'; else: ?><?= 'Edit'; endif; endif; ?> Products
                                            <button style='float:right;background-color:transparent;border:none;padding:0;margin:0' onclick='closeModal()'>⨉</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body" style='padding-left:5dvh'>
                                    <form action='/Save' method='post' enctype="multipart/form-data">
                                            
                                            <input type='hidden' name='id' value='<?php if(isset($prod['id'])): ?><?= $prod['id']; endif; ?>'>
                                        <div class="form-group">
                                            <label for="name">Product's Name:</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Product's Name" value='<?php if(isset($prod['name'])): ?><?= $prod['name']; endif; ?>'>
                                        </div> 

                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <input type="text" class="form-control" name="description" placeholder="Enter Product's Description" value='<?php if(isset($prod['description'])): ?><?= $prod['description']; endif; ?>'>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price:</label>
                                            <input type="text" class="form-control" name="price" placeholder="Enter Product's Price" value='<?php if(isset($prod['price'])): ?><?= $prod['price']; endif; ?>'>
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <input type="text" class="form-control" name="category" placeholder="Enter Product's Category" value='<?php if(isset($prod['category'])): ?><?= $prod['category']; endif; ?>'>
                                        </div>

                                        <div class="form-group">
                                            <label for="quantity">Quantity:</label>
                                            <input type="text" class="form-control" name="quantity" placeholder="Enter Product's Quantity" value='<?php if(isset($prod['quantity'])): ?><?= $prod['quantity']; endif; ?>'>
                                        </div>

                                        <?php if(isset($prod['image'])): ?>
                                        <div class="form-group">
                                            <label for='currimg'>Current Image:</label>
                                            <input type='hidden' name='currentimage' value='<?= $prod['image']; ?>'/>
                                            <img src='<?= $prod['image']; ?>' height='100dvh' width='100dvh' id='currimg'/>
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label for="image">File input</label>
                                            <input type="file" name="image">
                                            <p class="help-block">Upload the Product's Image.</p>
                                        </div>
            
                                        <input type="submit" class="btn btn-default" value='submit'>

                                    </form>
                                </div>
                            </div>
                        </div>
                </section>