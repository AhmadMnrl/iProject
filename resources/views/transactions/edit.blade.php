@extends('layouts-admin.master', ['title' => 'Transactions'])
@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Update Transactions</h5>
                <small class="text-muted float-end"></small>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('transactions.update', $transactions->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="order_id" class="form-label">Order ID</label>
                            {{-- <input type="text" name="order_id" value="{{ $orders->name }}" placeholder=""
                                autocomplete="off" class="form-control"> --}}

                             <select required id="order_id" name="order_id" autocomplete="off" class="form-control">
                                <option value="">Choose ID Order</option>
                                @foreach ($orders as $k)
                                    <option value="{{ $k->id }}">{{ $k->id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="transaction_date" class="form-label">Transaction Date</label>
                            <input type="date" name="transaction_date" placeholder="" value="{{ $transactions->transaction_date }}"
                                autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" name="amount" value="{{ $transactions->amount }}" placeholder=""
                                class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function hanyaAngka(evt) {
              var charCode = (evt.which) ? evt.which : event.keyCode
              if (charCode > 31 && (charCode < 48 || charCode > 57))
        
                return false;
              return true;
            }
    </script>
@endsection
