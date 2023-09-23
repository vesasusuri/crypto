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
                            <h4 class="card-title">Transactions Requests</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Your Username:</th>
                                            <th>Amount</th>
                                            <th>Cryptocurrency</th>
                                            <th>Reciver Hash Code</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    @foreach ($transactions as $newTransactions)
                                        <tr>                                          
                                            <td>{{ $newTransactions->account_username }}</td>
                                            <td>{{ $newTransactions->amount }}</td>
                                            <td>{{ $newTransactions->curreny }}</td>
                                            <td>{{ $newTransactions->reciver_id }}</td>
                                            <td>{{ $newTransactions->status }}</td>
                                            <td>
                                                <div class="badge badge-outline-danger">  <a onclick="return confirm('Are you sure you want to cancel this transaction?')" href="{{ url('cancel_transactions', $newTransactions->id) }}" style="color:red; text-decoration:none;">Cancel Transaction</a></div>
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