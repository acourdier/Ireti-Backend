<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Products</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid pb-5">
                        <form action="orderdetail.html">
                            <div class="row px-3 px-md-5">
                                <h4>Products</h4>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="selectOption">Fund type</label>
                                        <select name="selectOption" id="selectOption" class="form-control">
                                            <option value="fx">FX</option>
                                            <option value="commodities">Soft Commodities</option>
                                            <option value="oil">Oil and oil Derivatives</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="fx" class="product-fields">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="currency">Currency Buy</label>
                                                <input type="text" id="currency" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="amountb">Amount to Buy</label>
                                                <input type="text" id="amountb" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="currencys">Currency Sell</label>
                                                <input type="text" id="currencys" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="amounts">Amount to Sell</label>
                                                <input type="text" id="amounts" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="targetp">Target Price</label>
                                                <input type="text" id="targetp" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="commodities" class="product-fields">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="underlying">Select underlying commodity</label>
                                                <select name="underlying" id="underlying" class="form-control">
                                                    <option value="Option1">Option 1</option>
                                                    <option value="Option2">Option 2</option>
                                                    <option value="Option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="country">Country of Origin</label>
                                                <input type="text" id="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="grade">Grade</label>
                                                <input type="text" id="grade" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="cell">Buy/Sell</label>
                                                <input type="text" id="cell" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" id="quantity" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="unit">Unit of Measure</label>
                                                <input type="text" id="unit" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="targetpu">Price Target per Unit</label>
                                                <input type="text" id="targetpu" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="Incoterm">Incoterm</label>
                                                <input type="text" id="Incoterm" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="details">Additional Details</label>
                                                <textarea id="details" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="oil" class="product-fields">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="underlying">Select underlying commodity</label>
                                                <select name="underlying" id="underlying" class="form-control">
                                                    <option value="Option1">Option 1</option>
                                                    <option value="Option2">Option 2</option>
                                                    <option value="Option3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="country">Country of Origin</label>
                                                <input type="text" id="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="grade">Grade</label>
                                                <input type="text" id="grade" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="cell">Buy/Sell</label>
                                                <input type="text" id="cell" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" id="quantity" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="unit">Unit of Measure</label>
                                                <input type="text" id="unit" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="targetpu">Price Target per Unit</label>
                                                <input type="text" id="targetpu" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="Incoterm">Incoterm</label>
                                                <input type="text" id="Incoterm" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="details">Additional Details</label>
                                                <textarea id="details" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit" class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Validate Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="ftr text-center">
                    <p class="mb-0 text-muted">©2024 Ireti Capital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        var selectOption = document.getElementById('selectOption');
        var productFields = document.querySelectorAll('.product-fields');
        productFields.forEach(function (field) {
            if (field.id !== 'fx') {
                field.style.display = 'none';
            }
        });
        var selectedProductField = document.getElementById('fx');
        if (selectedProductField) {
            selectedProductField.style.display = 'block';
        }
        selectOption.addEventListener('change', function () {
            productFields.forEach(function (field) {
                field.style.display = 'none';
            });
            var selectedOption = selectOption.value;
            var selectedProductField = document.getElementById(selectedOption);
            if (selectedProductField) {
                selectedProductField.style.display = 'block';
            }
        });
    </script>
   @include('../Template.jslinks')
</body>

</html>