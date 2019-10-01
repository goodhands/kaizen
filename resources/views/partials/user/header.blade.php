<div class="h-hero relative flex flex-col items-center">
        <div class="talents-wall h-hero w-full overflow-hidden flex flex-col items-center justify-center" :style="{
                'background': 'linear-gradient(0deg, #AEFFAC, transparent), url(http://127.0.0.1:8000/images/user.jpg)',
                'backgroundPosition': 'center',
            }">
        </div>
        <div class="w-full h-6 bg-white relative user-profile-subhead flex flex-row justify-center items-center">
            <div class="user-avatar-area flex flex-row justify-between items-center">
                <img src="http://127.0.0.1:8000/images/user.jpg" alt="">
                <div class="flex flex-col ml-4">
                    <h2 class="text-black text-2xl font-bold leading-tight">
                        <a href="{{ route('user.view', ['username' => $user]) }}">
                                {{ $user->fullname() }}                     
                        </a>
                        @if($user->is_pro() || $user->is_team() )
                            <a href="{{url($user->account_type)}}" title="Learn more">
                                <span class="pro-badge hover:bg-primary-light">
                                    {{strtoupper($user->account_type)}}
                                </span>
                            </a>
                        @endif
                    </h2>
                    <p class="text-black leading-tight text-sm">{{ $user->profession }}</p>
                </div>
            </div>
            <div class="user-follow-stats flex flex-row justify-between w-1/4">
                <a href="{{route('user.following', ['username' => $user])}}" class="hover:text-black text-grey font-medium" :style="{  }">Following 789</a>
                <a href="{{route('user.followers', ['username' => $user])}}" class="hover:text-black text-grey font-medium">Followers 189k</a>
                <a href="#" class="hover:text-black text-grey font-medium">Projects 189</a>
            </div>
            <div class="follow absolute profile-follow-btn">
                <a href="#" class="btn-primary">Follow</a>
            </div>
        </div>
    </div>