
<div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
            <form action="/editform" method="POST">
                @csrf
<!-- <input type="hidden" name="id"  value={{$data['id']}}> -->
     
                <div class="mb-3">
                    
                      <label for="">Account Name</label>
                      <input type="text" name="account_name"  class="form-control" placeholder="" aria-describedby="helpId" value="{{$data['account_name']}}" >
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="mb-3">
                      <label for="">Account Number</label>
                      <input type="text" name="account_number"  class="form-control" placeholder="" aria-describedby="helpId"  value="{{$data['account_number']}}" >
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="mb-3">
                      <label for="">Total Balance</label>
                      <input type="text" name="total_balance"  class="form-control" placeholder="" aria-describedby="helpId"  value="{{$data['total_balance']}}">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="mb-3">
                      <label for="">Total Transactions</label>
                      <input type="text" name="total_transaction"  class="form-control" placeholder="" aria-describedby="helpId"  value="{{$data['total_transaction']}}" >
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="mb-3">
                      <label for="">Total Deduct</label>
                      <input type="text" name="total_deduct"  class="form-control" placeholder="" aria-describedby="helpId"  value="{{$data['total_deduct']}}" >
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                    
               
            </form>
</div>
</div>
</div>

        
           


               