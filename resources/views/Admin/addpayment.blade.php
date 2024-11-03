<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Add Payments</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <h4>Add Payments</h4>
                            @if ($users->count() < 1)
                            <p class="text-danger">No customers available. You can only add a payment if there is at least one customer.</p>
                            @else
                            <form action="{{route('admin.savepayment')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="customer">Customer Name</label>
                                            <select name="customer" id="customer"onchange="fetchBeneficiary(); fetchOrder();" class="form-control" required>
                                                <option value="" selected hidden disbaled>Choose customer</option>
                                                @foreach ($users as $user)
                                                <option value="{{ $user['id']}}">{{ $user['fname']}}</option>
                                                @endforeach
                                            </select>
                                            <script>
                                                async function fetchBeneficiary() {
                                                    const id = document.getElementById('customer').value;
                                                    let Beneficiary = document.getElementById('Beneficiary')
                                                    Beneficiary.innerHTML = '';
                                                    try {
                                                        const response = await fetch(`/admin/getBeneficiary/${id}`);
                                                        if (!response.ok) {
                                                        throw new Error('Network response was not ok');
                                                        }
                                                        const data = await response.json();
                                                        for (let beneficiary of data) {
                                                            console.log(beneficiary);
                                                            Beneficiary.insertAdjacentHTML("beforeend",`<option value="${beneficiary.id}">${beneficiary.accountname}</option>`)
                                                        }
                                                        
                                                    } catch (error) {
                                                        console.error('There was a problem with the fetch operation:', error);
                                                    }
                                                }
                                            </script>
                                                        <script>
                                                            async function fetchOrder() {
                                                                const id = document.getElementById('customer').value;
                                                                let Order = document.getElementById('Order')
                                                                Order.innerHTML = '';
                                                                try {
                                                                    const response = await fetch(`/admin/getOrder/${id}`);
                                                                    if (!response.ok) {
                                                                    throw new Error('Network response was not ok');
                                                                    }
                                                                    const data = await response.json();
                                                                    for (let order of data) {
                                                                        console.log(order);
                                                                        Order.insertAdjacentHTML("beforeend",`<option value="${order.id}">${order.id}</option>`)
                                                                    }
                                                                    
                                                                } catch (error) {
                                                                    console.error('There was a problem with the fetch operation:', error);
                                                                }
                                                            }
                                                        </script>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="Beneficiary">Beneficiary</label>
                                            <select name="Beneficiary" id="Beneficiary" class="form-control" required>
                                                
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="Order">Order</label>
                                            <select name="orderid" id="Order" class="form-control" required>
                                                
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="amount">Amount</label>
                                            <input type="number" required name="amount" id="amount"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="Pending">Pending</option>
                                                <option value="Accepted">Accepted</option>
                                                <option value="Declined">Declined</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <button type="submit"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Add Payment
                                            </button>
                                        </div>
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

</body>

</html>