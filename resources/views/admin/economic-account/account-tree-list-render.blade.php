@foreach($accounts as $account)
    <li>
        <a href="#"> </a>
        <span style="cursor: pointer"
              onclick="add(1, {{$account->acc_code}})">{{$account->acc_name}}</span>
        <ul id="li-{{$account->acc_code}}">
            @php
                $level2s = \App\Models\EconomicAccount::where('parent_code', $account->acc_code)->get();
            @endphp
            @foreach($level2s as $level2)
                <li>
                    <span style="cursor: pointer"
                          onclick="add(2, {{$level2->acc_code}})">{{$level2->acc_name}}</span>
                    @php
                        $level3s = \App\Models\EconomicAccount::where('parent_code', $level2->acc_code)->get();
                    @endphp
                    @if(count($level3s))
                        <ul id="li-{{$level2->acc_code}}">

                            @foreach($level3s as $level3)
                                <li>
                                    <span>{{$level3->acc_name}}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>
            @endforeach

        </ul>
    </li>
@endforeach
