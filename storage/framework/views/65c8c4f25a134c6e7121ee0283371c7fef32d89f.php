
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>
                <div class="card-body">

                    <form action="<?php echo e(url('saveproduct')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group row">
                            <label for="product_name" class="col-sm-2 col-form-label"><span
                                style="color:red">*</span>Category</label>
                                <div class="col-sm-5">
                                    <select name="cat_id" id="cat_id" required="required"
                                    class="form-control select2">
                                    <option value="">Select Category</option>
                                    <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>">
                                        <?php echo e($cat->category_name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <select name="sub_cat_id" id="sub_cat_id" required="required"
                                class="form-control select2">
                                <option value="">Select Subcategory</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_name" class="col-sm-2 col-form-label"><span
                            style="color:red">*</span>Product Name</label>
                            <div class="col-sm-8">
                                <input required="required" type="text" class="form-control"
                                name="product_name" maxlength="50" placeholder="Product Name">
                            </div>
                             <div class="col-sm-2">
                                <input required="required" type="text" class="form-control"
                                name="price" maxlength="50" placeholder="Price">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="short_description" class="col-sm-2 col-form-label"><span
                                    style="color:red">*</span>Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea required="required" class="form-control" name="short_description" maxlength="50"
                                        placeholder="Short Description"></textarea>
                                    </div>
                                </div>
                                <div class="" id="attrdiv">
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label"><span
                                        style="color:red">*</span>Description</label>
                                        <div class="col-sm-10">
                                            <textarea id="editor1" rows="5" required="required" class="form-control" name="description" maxlength="5000"
                                            placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-2 col-form-label"><span
                                        style="color:red">*</span>Product Image</label>
                                        <div class="col-sm-6">
                                            <input type="file" required="required" class="form-control" name="photo" maxlength="100" type="photo">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 text-center">
                                    <a class="btn btn-primary" href="<?php echo e(url('admin/products')); ?>">Back</a>
                                    <input class="btn btn-primary" type="submit" value="Next" />

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function() {
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
        CKEDITOR.replace('editor1')
//bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<script>
    function edit_products(id, product_name, description, status) {
        $("#editproductsname").val(product_name);
        $("#editdescription").val(description);
        $("#editstatus").val(status);
        $("#product_id").val(id);
        $("#editproduct").modal("show");
    }

    $('#cat_id').on('change', function() {
        var cat_id = this.value;
        $("#sub_cat_id").html('');
        $.ajax({
            url: "<?php echo e(url('getsubcategory')); ?>",
            type: "POST",
            data: {
                cat_id: cat_id,
                _token: '<?php echo e(csrf_token()); ?>'
            },
            dataType: 'json',
            success: function(result) {
                $('#sub_cat_id').html('<option value="">Select Sub Category</option>');
                $.each(result, function(key, value) {
                    $("#sub_cat_id").append('<option value="' + value
                        .id + '">' + value.category_name + '</option>');
                });
            }
        });
    });

    if(value.attr_type == "text"){
        $("#attrdiv").append("<div class='form-group row'><label class='col-sm-2 col-form-label'>"+value.attr_name+"</label> <div class='col-sm-10'><input name='"+name+"' type='text' maxlength='100' class='form-control'/></div></div>");
    }else if(value.attr_type == "date"){
        $("#attrdiv").append("<div class='form-group row'><label class='col-sm-2 col-form-label'>"+value.attr_name+"</label><div class='col-sm-10'><input name='"+name+"' onkeyup='return false' type='date' class='form-control'  /></div></div>");
    }else if(value.attr_type == "textarea"){
        $("#attrdiv").append("<div class='form-group row'><label class='col-sm-2 col-form-label'>"+value.attr_name+"</label><div class='col-sm-10'><textarea name='"+name+"' maxlength='500' class='form-control' ></textarea></div></div>");
    }else if(value.attr_type == "dropdown"){
        option = "<option value=''>Select</option>";
        myArray = value.attr_value.split(",");
        let j = 0;
        while (j < myArray.length) {
            option = option + "<option value='"+myArray[j]+"' >"+myArray[j]+"</option>";
            j++;
        }
        $("#attrdiv").append("<div class='form-group row'><label class='col-sm-2 col-form-label'>"+value.attr_name+"</label><div class='col-sm-10'><select name='"+name+"' class='form-control'>"+option+"</select></div></div>");
    }else if(value.attr_type == "checkbox"){
        option = "";
        myArray = value.attr_value.split(",");
        let j = 0;
        option = "<label class='col-sm-2 col-form-label'>"+value.attr_name+"&nbsp;</label>";
        while (j < myArray.length) {
            option = option + "<label ><input name='"+name +"[]' type='checkbox' class='checkbox-inline ' value='"+myArray[j]+"' />&nbsp;"+myArray[j].toString()+"&nbsp;</label>";
            j++;
        }
        console.log(option);
        $("#attrdiv").append("<div class='form-group row'>"+option +"</div>");
    }
    $('#sub_cat_id').on('change', function() {
        var cat_id = $("#cat_id").val();
        var sub_cat_id = this.value;
        $("#attrdiv").html('');
        $.ajax({
            url: "<?php echo e(url('getattributes')); ?>",
            type: "POST",
            data: {
                cat_id: cat_id,
                sub_cat_id: sub_cat_id,
                _token: '<?php echo e(csrf_token()); ?>'
            },
            dataType: 'json',
            success: function(result) {
                for (let i = 0; i < result.length; i++) {
                    value = result[i];
                    if (value.attr_type == "checkbox") {
                        name = "attr_check_" + result[i].id;
                    } else {
                        name = "attr_" + result[i].id;
                    }

                    if (value.attr_type == "text") {
                        $("#attrdiv").append(
                            "<div class='form-group row'><label class='col-sm-2 col-form-label'>" +
                            value.attr_name + "</label> <div class='col-sm-10'><input name='" +
                            name +
                            "' type='text' maxlength='100' class='form-control'  /></div></div>"
                            );
                    } else if (value.attr_type == "date") {
                        $("#attrdiv").append("<div class='form-group col-md-6'><label>" + value
                            .attr_name + "</label><input name='" + name +
                            "' onkeyup='return false' type='date'  class='form-control'  /></div>"
                            );
                    } else if (value.attr_type == "textarea") {
                        $("#attrdiv").append("<div class='form-group col-md-6'><label>" + value
                            .attr_name + "</label><textarea name='" + name +
                            "' maxlength='500' class='form-control' ></textarea></div>");
                    } else if (value.attr_type == "dropdown") {
                        option = "<option value=''>Select</option>";
                        myArray = value.attr_value.split(",");
                        let j = 0;
                        while (j < myArray.length) {
                            option = option + "<option value='" + myArray[j] + "' >" + myArray[j] +
                            "</option>";
                            j++;
                        }
                        $("#attrdiv").append("<div class='form-group col-md-6'><label>" + value
                            .attr_name + "</label><select name='" + name +
                            "' class='form-control'>" + option + "</select></div>");
                    } else if (value.attr_type == "checkbox") {
                        option = "";
                        myArray = value.attr_value.split(",");
                        let j = 0;
                        option = "<label>" + value.attr_name + "&nbsp;</label>";
                        while (j < myArray.length) {
                            option = option + "<label class='checkbox-inline' ><input name='" +
                            name + "[]' type='checkbox' value='" + myArray[j] + "' />&nbsp;" +
                            myArray[j].toString() + "&nbsp;</label>";
                            j++;
                        }
                        $("#attrdiv").append("<div class='col-md-12'>" + option + "</div>");
                    }
                }
            },
            error: function(result) {
                console.log(result);
            }
        });
    });


    $(".decimal").keypress(function(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 &&
            (charCode < 48 || charCode > 57)) {
            return false;
    }
    if (charCode == 46 && this.value.indexOf(".") !== -1) {
        return false;
    }
    return true;
});
</script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });

    var counter = 1;
    var dynamicInput = [];

    function addInput(){
        var newdiv = document.createElement('div');
        newdiv.id = dynamicInput[counter];
        newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs[]'> <input type='button' value='-' onClick='removeInput("+dynamicInput[counter]+");'>";
        document.getElementById('addstores').appendChild(newdiv);
        counter++;
    }

    function removeInput(id){
        var elem = document.getElementById(id);
        return elem.parentNode.removeChild(elem);
    }




</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/products/addproduct.blade.php ENDPATH**/ ?>