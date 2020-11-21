<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="agent">
        <div class="utf-agent-avatar"><a href="{{route('agent.show',$agent->USER_ID)}}"> <img
                    src="{{asset('images/agent-01.jpg')}}" alt=""> <span class="view-profile-btn">PROFİLİ GÖSTER</span>
            </a></div>
        <div class="utf-agent-content">
            <div class="utf-agent-name">
                <h4><a href="{{route('agent.show',$agent->USER_ID)}}">{{$agent->ADI}} {{$agent->SOYADI}} {{$agent->TELEFON}} {{$agent->GSM}}</a></h4>
            </div>
        </div>
    </div>
</div>
