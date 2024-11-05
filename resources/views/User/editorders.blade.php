<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Profile</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <h4>Order</h4>

                            @if ($orders['FundType'] == 'FX')
                                <form action="{{ route('user.updateorder') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 d-none">
                                            <input type="text" name="id" value="{{ $orders['id'] }}">
                                        </div>
                                     
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="firstcurrency">Choose First Currency</label>
                                                <select name="firstcurrency" required id="firstcurrency"
                                                    class="form-control">
                                                    @foreach ($currencies as $currency)
                                                        <option value="{{ $currency['currency'] }}"
                                                            {{ $currency['currency'] == $orders['firstcurrency'] ? 'selected' : '' }}>
                                                            {{ $currency['currency'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="secondcurrency">Choose Second Currency</label>
                                                <select name="secondcurrency" required id="secondcurrency"
                                                    class="form-control">
                                                    @foreach ($currencies as $currency)
                                                        <option value="{{ $currency['currency'] }}"
                                                            {{ $currency['currency'] == $orders['secondcurrency'] ? 'selected' : '' }}>
                                                            {{ $currency['currency'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="targetp">Target Price</label>
                                                <input type="text" id="targetprice" required name="targetp"
                                                    id="targetp" class="form-control"
                                                    value="{{ $orders['targetp'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="currencytb">Choose Currency to buy</label>
                                                <select id="currencytb" name="currencytb" class="form-control">
                                                    <!-- Options will be dynamically added here -->
                                                </select>
                                            </div>
                                        </div>

                                        <input type="text" value="{{ $orders['currencytb'] }}" name="" id="currencytbdefault" class="d-none">
                                        <div class="col-12">
                                            <p class="mt-3 mb-0" id="rate"></p>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="amountb">Amount to Buy</label>
                                                <input type="text" id="buyamount" required name="amountb"
                                                    class="form-control" value="{{ $orders['amountb'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="amounts">Amount to Sell</label>
                                                <input type="text" id="sellamount" required name="amountts"
                                                    id="amounts" class="form-control"
                                                    value="{{ $orders['amountts'] }}">
                                            </div>
                                        </div>
                                        <div class="col-12">

                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <p id="rate"></p>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="mt-3 d-flex justify-content-end">
                                            <button type="submit"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Update Order
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @elseif ($orders['FundType'] == 'Soft Commodities')
                            <form action="{{ route('user.updateorder') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 d-none">
                                        <input type="text" name="id" value="{{ $orders['id'] }}">
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <label for="underlying">Select underlying commodity</label>
                                            <select name="underlying" id="underlying" class="form-control">
                                                @foreach ($softs as $soft)
                                                <option value="{{ $soft['underlaying']}}"
                                                    {{ $soft['underlaying']== $orders['underlaying'] ? 'selected' : '' }}>
                                                    {{ $soft['underlaying']}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="country">Country of Origin</label>
                                            <input type="text" required name="country" id="country" value="{{$orders['country']}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="grade">Grade</label>
                                            <input type="text" required name="grade" id="grade"
                                                class="form-control" value="{{$orders['grade']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="cell">Buy/Sell</label>
                                            <input type="text" required name="buysell" id="cell"
                                                class="form-control" value="{{$orders['buysell']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="quantity">Quantity</label>
                                            <input type="text" required name="quantity" id="quantity"
                                                class="form-control"  value="{{$orders['quantity']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="unit">Unit of Measurement</label>
                                            <select name="unit" id="unit" class="form-control">
                                                <option value="choose" selected disabled hidden>choose</option>
                                                <option value="Gram" {{ $orders['unit'] == 'Gram' ? 'selected' : '' }}>Gram</option>
                                                <option value="Kg" {{ $orders['unit'] == 'Kg' ? 'selected' : '' }}>KG</option>
                                                <option value="Ton" {{ $orders['unit'] == 'Ton' ? 'selected' : '' }}>Ton</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="targetp">Price Target per Unit</label>
                                            <input type="text" required name="targetp" id="targetp"
                                                class="form-control"  value="{{$orders['targetp']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="Incoterm">Incoterm</label>
                                            <input type="text" required name="Incoterm" id="Incoterm"
                                                class="form-control"  value="{{$orders['Incoterm']}}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <label for="details">Additional Details</label>
                                            <textarea id="details" required name="details" cols="30" rows="5"
                                                class="form-control">{{$orders['details']}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit"
                                            class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Update Order
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @elseif ($orders['FundType'] == 'Metals')
                            <form action="{{ route('user.updateorder') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 d-none">
                                        <input type="text" name="id" value="{{ $orders['id'] }}">
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <label for="underlying">Select underlying commodity</label>
                                            <select name="underlying" id="underlying" class="form-control">
                                                @foreach ($metals as $metal)
                                                <option value="{{ $metal['underlaying']}}"
                                                    {{ $metal['underlaying']== $orders['underlaying'] ? 'selected' : '' }}>
                                                    {{ $metal['underlaying']}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="country">Country of Origin</label>
                                            <input type="text" required name="country" id="country" value="{{$orders['country']}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="grade">Grade</label>
                                            <input type="text" required name="grade" id="grade"
                                                class="form-control" value="{{$orders['grade']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="cell">Buy/Sell</label>
                                            <input type="text" required name="buysell" id="cell"
                                                class="form-control" value="{{$orders['buysell']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="quantity">Quantity</label>
                                            <input type="text" required name="quantity" id="quantity"
                                                class="form-control"  value="{{$orders['quantity']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="unit">Unit of Measurement</label>
                                            <select name="unit" id="unit" class="form-control">
                                                <option value="choose" selected disabled hidden>choose</option>
                                                <option value="Gram" {{ $orders['unit'] == 'Gram' ? 'selected' : '' }}>Gram</option>
                                                <option value="Kg" {{ $orders['unit'] == 'Kg' ? 'selected' : '' }}>KG</option>
                                                <option value="Ton" {{ $orders['unit'] == 'Ton' ? 'selected' : '' }}>Ton</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="targetp">Price Target per Unit</label>
                                            <input type="text" required name="targetp" id="targetp"
                                                class="form-control"  value="{{$orders['targetp']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="Incoterm">Incoterm</label>
                                            <input type="text" required name="Incoterm" id="Incoterm"
                                                class="form-control"  value="{{$orders['Incoterm']}}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <label for="details">Additional Details</label>
                                            <textarea id="details" required name="details" cols="30" rows="5"
                                                class="form-control">{{$orders['details']}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit"
                                            class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Update Order
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @else
                            <form action="{{ route('user.updateorder') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 d-none">
                                        <input type="text" name="id" value="{{ $orders['id'] }}">
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <label for="underlying">Select underlying commodity</label>
                                            <select name="underlying" id="underlying" class="form-control">
                                                @foreach ($oils as $oil)
                                                <option value="{{ $oil['underlaying']}}"
                                                    {{ $oil['underlaying']== $orders['underlaying'] ? 'selected' : '' }}>
                                                    {{ $oil['underlaying']}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="country">Country of Origin</label>
                                            <input type="text" required name="country" id="country" value="{{$orders['country']}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="grade">Grade</label>
                                            <input type="text" required name="grade" id="grade"
                                                class="form-control" value="{{$orders['grade']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="cell">Buy/Sell</label>
                                            <input type="text" required name="buysell" id="cell"
                                                class="form-control" value="{{$orders['buysell']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="quantity">Quantity</label>
                                            <input type="text" required name="quantity" id="quantity"
                                                class="form-control"  value="{{$orders['quantity']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="unit">Unit of Measurement</label>
                                            <select name="unit" id="unit" class="form-control">
                                                <option value="choose" selected disabled hidden>choose</option>
                                                <option value="Gram" {{ $orders['unit'] == 'Gram' ? 'selected' : '' }}>Gram</option>
                                                <option value="Kg" {{ $orders['unit'] == 'Kg' ? 'selected' : '' }}>KG</option>
                                                <option value="Ton" {{ $orders['unit'] == 'Ton' ? 'selected' : '' }}>Ton</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="targetp">Price Target per Unit</label>
                                            <input type="text" required name="targetp" id="targetp"
                                                class="form-control"  value="{{$orders['targetp']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <label for="Incoterm">Incoterm</label>
                                            <input type="text" required name="Incoterm" id="Incoterm"
                                                class="form-control"  value="{{$orders['Incoterm']}}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <label for="details">Additional Details</label>
                                            <textarea id="details" required name="details" cols="30" rows="5"
                                                class="form-control">{{$orders['details']}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit"
                                            class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Update Order
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="ftr text-center">
                    <p class="mb-0 text-muted">©2024 Ireti Capital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    @include('../Template.jslinks')
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
        let firstcurrency = document.getElementById('firstcurrency');
        let defaultcurrencytb = document.getElementById('currencytbdefault');
        let secondcurrency = document.getElementById('secondcurrency');
        let targetPrice = document.getElementById('targetprice');
        let currencytb = document.getElementById('currencytb');
        let buyamount = document.getElementById('buyamount');
        let sellAmount = document.getElementById('sellamount');
        let rate = document.getElementById('rate');
        let resetButton = document.getElementById('resetButton');

        secondcurrency.disabled = true;
        targetPrice.disabled = true;
        currencytb.disabled = true;
        buyamount.disabled = true;
        sellAmount.disabled = true;

        firstcurrency.addEventListener('input', function() {
            firstcurrency.disabled = true;
            secondcurrency.disabled = false;
            targetPrice.disabled = true;
            currencytb.disabled = true;
            buyamount.disabled = true;
            sellAmount.disabled = true;
        });

        secondcurrency.addEventListener('input', function() {
            firstcurrency.disabled = true;
            secondcurrency.disabled = true;
            targetPrice.disabled = false;
            currencytb.disabled = true;
            buyamount.disabled = true;
            sellAmount.disabled = true;
            let rate = firstcurrency.value + '/' + secondcurrency.value;
            document.getElementById('rate').innerHTML =  'Conversion Rate is ' + rate;
        });

        targetPrice.addEventListener('input', function() {
            firstcurrency.disabled = true;
            secondcurrency.disabled = true;
            targetPrice.disabled = false;
            currencytb.disabled = false;
            buyamount.disabled = false;
            sellAmount.disabled = false;
            updateAmounts();
        });

        currencytb.addEventListener('input', function() {
            firstcurrency.disabled = true;
            secondcurrency.disabled = true;
            targetPrice.disabled = false;
            currencytb.disabled = false;
            buyamount.disabled = false;
            sellAmount.disabled = false;
        });

        buyamount.addEventListener('input', function() {
            currencytb.disabled = false;
            updateSellAmount();
            // ------remove---
            firstcurrency.disabled = false;
            secondcurrency.disabled = false;
        });

        sellAmount.addEventListener('input', function() {
            currencytb.disabled = false;
            updateBuyAmount(); 
            // ------remove---
            firstcurrency.disabled = false;
            secondcurrency.disabled = false;
        });

        document.getElementById('resetButton').addEventListener('click', function() {
            location.reload();
        });

        function updateSellAmount() {
            let bav = parseFloat(buyamount.value.replaceAll(" ", ""));
            let tpv = parseFloat(targetPrice.value.replaceAll(" ", ""));
            if (currencytb.value == firstcurrency.value) {
                sellAmount.value = tpv * bav;
            } else {
                sellAmount.value = bav / tpv;
            }
        }

        function updateBuyAmount() {
            let sav = parseFloat(sellAmount.value.replaceAll(" ", ""));
            let tpv = parseFloat(targetPrice.value.replaceAll(" ", ""));
            if (currencytb.value == firstcurrency.value) {
                buyamount.value = sav / tpv;
            } else {
                buyamount.value = tpv * sav;
            }
        }

        function updateAmounts() {
            buyamount.value = 0;
            sellAmount.value = 0;
            if (buyamount.value) {
                updateSellAmount();
            }
            if (sellAmount.value) {
                updateBuyAmount();
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        let currencyBuy = document.getElementById('firstcurrency');
        let currencySell = document.getElementById('secondcurrency');
        let originalSellOptions = Array.from(currencySell.options);
        currencyBuy.addEventListener('change', function () {
            let selectedCurrency = this.value;
            while (currencySell.options.length > 0) {
                currencySell.remove(0);
            }
            originalSellOptions.forEach(option => {
                if (option.value !== selectedCurrency) {
                    currencySell.add(new Option(option.text, option.value));
                }
            });
            });
        });
    </script>
    <script>
        function updatecurrencytb() {
            let firstCurrencyValue = firstcurrency.value;
            let secondCurrencyValue = secondcurrency.value;
            let defaultcurrencytbValue = defaultcurrencytb.value;
            
            currencytb.innerHTML = `
                <option value="${defaultcurrencytbValue}">${defaultcurrencytbValue}</option>
                <option value="${firstCurrencyValue}">${firstCurrencyValue}</option>
                <option value="${secondCurrencyValue}">${secondCurrencyValue}</option>
            `;
        }

        firstcurrency.addEventListener('change', updatecurrencytb);
        secondcurrency.addEventListener('change', updatecurrencytb);
        // Initialize with default values
        updatecurrencytb();

    </script>
    <script>
        function formatNumber(input) {
            let value = input.value.replace(/\s/g, '').replace(/[^0-9.]/g, '');
            let parts = value.split('.');
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
            if (parts[1]) parts[1] = parts[1].slice(0, 2);
            input.value = parts.join('.');
        }
        function spaceonly(input) {
            let value = input.value.replace(/\s/g, '').replace(/[^0-9.]/g, '');
            let parts = value.split('.');
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
            input.value = parts.join('.');
        }

        document.getElementById('buyamount').addEventListener('input', function (e) {
            formatNumber(e.target);
        });

        document.getElementById('sellamount').addEventListener('input', function (e) {
            formatNumber(e.target);
        });

        document.getElementById('targetprice').addEventListener('input', function (e) {
            spaceonly(e.target);
        });


    </script>
</body>

</html>
