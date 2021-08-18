@if($serviceConnectionTransactions == null)
    <p class="text-center"><i>No payment transactions recorded!</i></p>
    <a href="{{ route('serviceConnectionPayTransactions.create-step-four', [$serviceConnections->id]) }}" class="btn btn-primary btn-sm" title="Add Payment Transaction"><i class="fas fa-pen ico-tab"></i>Create Payment Invoice</a>
@else

@endif