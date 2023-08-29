<!DOCTYPE html>
<html lang="en">
  <head>
  @include("user.links")
  </head>
  <body>
    <div class="container-scroller">
      @include("user.sidebar")
      @include("user.navbar")
        <div class="container-fluid px-4">
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <br><br><br><br>
                            <h4 class="card-title">Withdraw Requests</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Your Username:</th>
                                            <th>Which Currency:</th>
                                            <th>Amount</th>
                                            <th>Cryptocurrency</th>
                                            <th>Hash Code</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    @foreach ($withdraws as $newWithdraws)
                                        <tr>                                          
                                            <td>{{ $newWithdraws->account_username }}</td>
                                            <td>{{ $newWithdraws->wallet_address }}</td>
                                            <td>{{ $newWithdraws->amount }}</td>
                                            <td>{{ $newWithdraws->cryptocurrency }}</td>
                                            <td>{{ $newWithdraws->account_hash }}</td>
                                            <td>{{ $newWithdraws->status }}</td>
                                            <td>
                                                <div class="badge badge-outline-danger">  <a onclick="return confirm('Are you sure you want to cancel this withdraw?')" href="{{ url('cancel_withdraw', $newWithdraws->id) }}" style="color:red; text-decoration:none;">Cancel Withdraw</a></div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>