<?php
if (isset($_POST['submit'])) {
    $newProduct = new glowController();
    $newProduct->addProduct();
}
?>
<div class="container" style="margin-right: 0px; margin-top:8%;  margin-bottom:8%;">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center"><a href="<?php echo BASE_URL; ?>dashboard" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>Ajouter un Product</div>
                <div>
                    <form method="post" enctype="multipart/form-data" id="form-1">
                        <div class="form-fieldset">
                            <div class="form-group">
                                <label for="name">name*</label>
                                <input type="text" name="name[]" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="image">image*</label>
                                <input type="file" name="image[]" id="image" class="form-control" placeholder="image">
                            </div>
                            <div class="form-group">
                                <label for="description">description*</label>
                                <input type="text" name="description[]" class="form-control" placeholder="description">
                            </div>
                            <div class="form-group mb-3">
                                <label for="statut">statut*</label>
                                <select class="form-select" aria-label="Default select example" name="statut[]">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Résilié</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="prix">prix*</label>
                                <input type="number" name="prix[]" class="form-control" placeholder="prix">
                            </div>
                        </div>
                        <div class="form-group2">
                            <button type="submit" class="btn btn-primary" name="submit">Valider</button>
                            <button type="button" class="add-more btn btn-secondary">Add More</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
 



  $(document).ready(function() {
    // Clone the first form fieldset and add a button to remove it
    var formFieldset = $(".form-fieldset").first().clone();
    formFieldset.append('<button class="remove-fieldset btn btn-danger">Remove</button>');

    // Add click event listener to the "Add More" button
    $(".add-more").click(function() {
      // Append the cloned form fieldset to the form
      $("#form-1").append(formFieldset.clone());
    });
        // Add click event listener to the "Remove" buttons
        $(document).on("click", ".remove-fieldset", function() {
            // Remove the parent fieldset when the "Remove" button is clicked
            $(this).parent().remove();
        });
    });
</script>


