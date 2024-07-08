<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Products</title>
</head>

<body>
    @if (session('success'))
    <script>
        swal("Good Job!", "{{session('success')}}", "success");
    </script>
    @endif
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid pb-5">
                        <div class="col-12 px-3 px-md-5">
                            <h4>Products</h4>
                            <div class="mt-3">
                                <label for="selectOption">Product type</label>
                                <select id="selectOption" class="form-control">
                                    <option value="FX">FX</option>
                                    <option value="commodities">Soft Commodities</option>
                                    <option value="oil">Oil and oil Derivatives</option>
                                </select>
                            </div>
                        </div>

                        <div class="row px-3 px-md-5">

                            <div id="FX" class="product-fields">
                                <form action="{{ route('user.submitorder') }}" method="POST" id="OrderForm">
                                    @csrf
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <input type="number" readonly value="0" name="status" id="status"
                                                class="form-control d-none">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <input type="text" readonly name="FundType" id="OrderType" value="FX"
                                                class="form-control d-none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="currency">Currency Buy</label>
                                                <select name="currencytb" required id="currencytb" class="form-control">
                                                    <option selected disabled hidden>Choose currency</option>
                                                    @foreach ($currencies as $currency)
                                                    <option {{ $currency['currency']}}>{{ $currency['currency']}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="amountb">Amount to Buy</label>
                                                <input type="number" id="buyamount" required name="amountb" id="amountb"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="currencys">Currency Sell</label>
                                                <select name="currencyts" required id="currencyts" class="form-control">
                                                    <option selected disabled hidden>Choose currency</option>
                                                    @foreach ($currencies as $currency)
                                                    <option {{ $currency['currency']}}>{{ $currency['currency']}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="amounts">Amount to Sell</label>
                                                <input type="number" id="sellamount" required name="amountts"
                                                    id="amounts" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="targetp">Target Price for conversion of <span class="mb-0"
                                                        id="rate"></span></label>
                                                <input type="number" id="targetprice" required name="targetp"
                                                    id="targetp" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <p id="rate"></p>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <input type="text" name="filled" value="No" id="" readonly class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3 d-flex justify-content-end">
                                            <button type="submit"
                                                class=" px-4 py-2 me-3 border-0 rounded-3 green text-white font-semi">
                                                Validate Order
                                            </button>
                                            <button type="reset" id="resetButton"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="commodities" class="product-fields">
                                <form action="{{ route('user.submitorder') }}" method="POST" id="OrderForm">
                                    @csrf
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <input type="number" readonly value="0" name="status" id="status"
                                                class="form-control d-none">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <input type="text" readonly name="FundType" value="Soft Commodities"
                                                class="form-control d-none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="underlying">Select underlying commodity</label>
                                                <select name="underlying" id="underlying" class="form-control">
                                                    @foreach ($softs as $soft)
                                                    <option {{ $soft['underlaying']}}>{{ $soft['underlaying']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="country">Country of Origin</label>
                                                <input type="text" required name="country" id="country"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="grade">Grade</label>
                                                <input type="text" required name="grade" id="grade"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="cell">Buy/Sell</label>
                                                <input type="text" required name="buysell" id="cell"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" required name="quantity" id="quantity"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="unit">Unit of Measurement</label>
                                                <select name="unit" id="unit" class="form-control">
                                                    <option value="choose" selected disabled hidden>choose</option>
                                                    <option value="Gram">Gram</option>
                                                    <option value="Kg">Kg</option>
                                                    <option value="Ton">Ton</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="targetp">Price Target per Unit</label>
                                                <input type="text" required name="targetp" id="targetp"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="Incoterm">Incoterm</label>
                                                <input type="text" required name="Incoterm" id="Incoterm"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="details">Additional Details</label>
                                                <textarea id="details" required name="details" cols="30" rows="5"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <input type="text" name="filled" value="No" id="" readonly class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3 d-flex justify-content-end">
                                            <button type="submit"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Validate Order
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div id="oil" class="product-fields">
                                <form action="{{ route('user.submitorder') }}" method="POST" id="OrderForm">
                                    @csrf
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <input type="number" readonly value="0" name="status" id="status"
                                                class="form-control d-none">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <input type="text" readonly name="FundType" class="d-none"
                                            value="Oil and oil Derivatives" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="underlying">Select underlying commodity</label>
                                                <select name="underlying" id="underlying" class="form-control">
                                                    @foreach ($oils as $oil)
                                                    <option {{ $oil['underlaying']}}>{{ $oil['underlaying']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="country">Country of Origin</label>
                                                <input type="text" required name="country" id="country"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="grade">Grade</label>
                                                <input type="text" required name="grade" id="grade"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="cell">Buy/Sell</label>
                                                <input type="text" required name="buysell" id="cell"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" required name="quantity" id="quantity"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="unit">Unit of Measurement</label>
                                                <select name="unit" id="unit" class="form-control">
                                                    <option value="choose" selected disabled hidden>choose</option>
                                                    <option value="Gram">Gram</option>
                                                    <option value="Kg">Kg</option>
                                                    <option value="Ton">Ton</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-3">
                                                <label for="targetp">Price Target per Unit</label>
                                                <input type="text" required name="targetp" id="targetp"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="Incoterm">Incoterm</label>
                                                <input type="text" required name="Incoterm" id="Incoterm"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label for="details">Additional Details</label>
                                                <textarea id="details" required name="details" cols="30" rows="5"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <input type="text" name="filled" value="No" id="" readonly
                                                    class="d-none">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-3 d-flex justify-content-end">
                                                <button type="submit"
                                                    class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                    Validate Order
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        productFields.forEach(function(field) {
            if (field.id !== 'FX') {
                field.style.display = 'none';
            }
        });
        var selectedProductField = document.getElementById('FX');
        if (selectedProductField) {
            selectedProductField.style.display = 'block';
        }
        selectOption.addEventListener('change', function() {
            document.getElementById('OrderForm').reset()
            productFields.forEach(function(field) {
                field.style.display = 'none';
            });
            var selectedOption = selectOption.value;
            document.getElementById('OrderType').value = selectedOption;
            var selectedProductField = document.getElementById(selectedOption);
            if (selectedProductField) {
                selectedProductField.style.display = 'block';
            }
        });
    </script>
    <script>
        const currencytb = document.getElementById('currencytb');
        const buyAmount = document.getElementById('buyamount');
        const currencyts = document.getElementById('currencyts');
        const sellAmount = document.getElementById('sellamount');
        const targetPrice = document.getElementById('targetprice');
        const rate = document.getElementById('rate');
        const resetButton = document.getElementById('resetButton');

        // Initially disable all inputs except currencytb
        buyAmount.disabled = true;
        currencyts.disabled = true;
        sellAmount.disabled = true;
        targetPrice.disabled = true;

        // Enable all inputs when currencytb has input
        currencytb.addEventListener('input', function() {
            buyAmount.disabled = true;
            currencyts.disabled = false;
            sellAmount.disabled = true;
            targetPrice.disabled = true;
        });

        currencyts.addEventListener('input', function() {
            buyAmount.disabled = true;
            currencytb.disabled = true;
            currencyts.disabled = true;
            sellAmount.disabled = true;
            targetPrice.disabled = false;

            let sell = currencyts.value;
            let buy = currencytb.value;
            let rate = sell + '/' + buy;
            console.log(rate);
            document.getElementById('rate').innerHTML = rate;
        });

        buyAmount.addEventListener('input', function() {
            buyAmount.disabled = false;
            currencytb.disabled = true;
            currencyts.disabled = true;
            sellAmount.disabled = true;
            targetPrice.disabled = true;

            if (buyAmount.value) {
                sellAmount.readOnly = true;
                sellAmount.value = targetPrice.value ? (buyAmount.value * targetPrice.value).toFixed(2) : '';
            } else {
                sellAmount.readOnly = false;
                sellAmount.value = '';
            }
        });

        sellAmount.addEventListener('input', function() {
            buyAmount.disabled = true;
            currencytb.disabled = true;
            currencyts.disabled = true;
            sellAmount.disabled = false;
            targetPrice.disabled = true;

            if (sellAmount.value) {
                buyAmount.readOnly = true;
                buyAmount.value = targetPrice.value ? (sellAmount.value / targetPrice.value).toFixed(2) : '';
            } else {
                buyAmount.readOnly = false;
                buyAmount.value = '';
            }
        });

        targetPrice.addEventListener('input', function() {
            buyAmount.disabled = false;
            currencytb.disabled = true;
            currencyts.disabled = true;
            sellAmount.disabled = false;
            targetPrice.disabled = false;
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const currencyBuy = document.getElementById('currencytb');
    const currencySell = document.getElementById('currencyts');
    const originalSellOptions = Array.from(currencySell.options);

    currencyBuy.addEventListener('change', function () {
        const selectedCurrency = this.value;

        // Clear current options
        while (currencySell.options.length > 0) {
            currencySell.remove(0);
        }

        // Add options back except the selected one
        originalSellOptions.forEach(option => {
            if (option.value !== selectedCurrency) {
                currencySell.add(new Option(option.text, option.value));
            }
        });
    });
});

    </script>

    @include('../Template.jslinks')
</body>

</html>