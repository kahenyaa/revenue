                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <div class="ui fluid vertical menu">
  <a id="config" href="{{ url('/dashboard/config') }}" class="ui yellow right ribbon label  item"> Setup </a>

  <a href="{{ url('/dashboard') }}" class="item"> Alerts </a>
  <a href="{{ url('/dashboard/profile') }}" class="item"> Profile </a>
  <a href="{{ url('/dashboard/businesses') }}" class="item"> Businesses </a>
  <a href="{{ route('plot.index') }}" class="item"> Plots </a>
  <a href="{{ route('plot.index') }}" class="item"> Applications </a>
  <a href="{{ route('plot.index') }}" class="item"> Invoices </a>

  @if (Auth::user()->agentAccount->type == 'business')
  <a href="{{ route('plot.index') }}" class="item"> Permits  </a>
  @endif
</div>
